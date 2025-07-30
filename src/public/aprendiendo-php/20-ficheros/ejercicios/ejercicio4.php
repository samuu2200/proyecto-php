<?php 

$mensaje = filter_input(INPUT_POST, 'mensaje', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

$rutaArchivo = __DIR__ . "/mensajes.txt";

if (!empty($mensaje)) {

    $mensaje = trim($mensaje);

    $flags = file_exists($rutaArchivo) 
        ? FILE_APPEND | LOCK_EX
        : LOCK_EX; 


    $resultado = file_put_contents($rutaArchivo, $mensaje, $flags);
    if ($resultado === false) {
        die("Error al escribir en el archivo. <br>");
    } else {
        echo "Se ha agregado texto correctamente. <br>";
    }
    $contenido = file_get_contents($rutaArchivo) . PHP_EOL;
    if ($contenido !== false) {
        echo "Contenido del archivo:<br>";
        echo "<pre>" . htmlspecialchars($contenido) . "</pre>";
    } else {
        echo "No se ha podido leer el archivo";
    }
    
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "El mensaje no es válido o no está definido";
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Textarea</title>
</head>
<body>
    <form method="post">
        <textarea name="mensaje"></textarea>
        <br>
        <button type="submit">Guardar</button>
    </form>
</body>

</html>