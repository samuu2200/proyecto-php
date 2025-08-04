<?php
$registrosValidos = [];
$registrosInvalidos = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['archivo_csv'])) {
    $tmpName = $_FILES['archivo_csv']['tmp_name'];
    $nombreOriginal = $_FILES['archivo_csv']['name'];
    $extension = pathinfo($nombreOriginal, PATHINFO_EXTENSION);

    if ($extension !== 'csv') {
        die("❌ El archivo no tiene extensión .csv");
    }

    if (!is_uploaded_file($tmpName)) {
        die("❌ Error al subir el archivo.");
    }

    $handle = fopen($tmpName, "r");
    if (!$handle) {
        die("❌ No se pudo abrir el archivo.");
    }

    $filaNum = 0;
    $cabecera = [];

    while (($fila = fgetcsv($handle, 1000, ",")) !== false) {
        $filaNum++;

        // Guardar cabecera para referencias
        if ($filaNum === 1) {
            $cabecera = $fila;
            continue;
        }

        list($nombre, $email, $edad) = $fila;

        $errores = [];

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errores[] = "Email inválido";
        }

        if (!is_numeric($edad)) {
            $errores[] = "Edad no numérica";
        }

        if (!empty($errores)) {
            $registrosInvalidos[] = [
                'fila' => $filaNum,
                'datos' => $fila,
                'errores' => $errores
            ];
        } else {
            $registrosValidos[] = [
                'nombre' => $nombre,
                'email' => $email,
                'edad' => (int)$edad
            ];
        }
    }

    fclose($handle);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Importar usuarios CSV</title>
</head>
<body>
    <h2>📤 Subir archivo CSV</h2>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="archivo_csv" accept=".csv" required>
        <button type="submit">Importar</button>
    </form>

    <?php if (!empty($registrosValidos)): ?>
        <h3>✅ Registros válidos</h3>
        <table border="1" cellpadding="5">
            <tr>
                <th>Nombre</th><th>Email</th><th>Edad</th>
            </tr>
            <?php foreach ($registrosValidos as $usuario): ?>
                <tr>
                    <td><?= htmlspecialchars($usuario['nombre']) ?></td>
                    <td><?= htmlspecialchars($usuario['email']) ?></td>
                    <td><?= $usuario['edad'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <?php if (!empty($registrosInvalidos)): ?>
        <h3>❌ Registros con errores</h3>
        <?php foreach ($registrosInvalidos as $error): ?>
            <p><strong>Fila <?= $error['fila'] ?>:</strong>
            <?= implode(", ", array_map('htmlspecialchars', $error['datos'])) ?><br>
            <em>Errores: <?= implode("; ", $error['errores']) ?></em></p>
        <?php endforeach; ?>
    <?php endif; ?>
</body>
</html>