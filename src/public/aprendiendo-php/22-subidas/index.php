<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario para subidas de archivos</title>
</head>

<body>
    <form action="subir.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="archivo" />
        <input type="submit" value="Enviar" />
    </form>

    <?php
    $nombreArchivo = $_GET['nombreArchivo'] ?? null;
    $success = $_GET['upload'] ?? null;
    if ($success === 'success') {
        echo "<p>Archivo subido exitosamente: " . htmlspecialchars($nombreArchivo) . "</p>";
    }

    $directorio = __DIR__ . '/uploads/';

    if (is_dir($directorio)) {
        if ($gestor = opendir($directorio)) {
            while (($image = readdir($gestor)) !== false) {
                if ($image !== '.' && $image !== '..') {
                    echo "<img src='uploads/" . htmlspecialchars($image) . "' alt='Imagen subida' style='max-width:300px;'/>";
                }
            }
            closedir($gestor);
        }
    }
    ?>


</body>

</html>