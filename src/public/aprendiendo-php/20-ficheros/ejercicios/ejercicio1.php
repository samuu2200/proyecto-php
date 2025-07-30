<?php 

$rutaArchivo = __DIR__ . "/notas.txt";

// Comprobamos que el archivo exista y si existe lo leemos y lo mostramos
if (file_exists($rutaArchivo)) {
    $contenido = file_get_contents($rutaArchivo);
    if ($contenido === false) {
        die("Error al leer el archivo");
    } else {
        echo "<pre>";
        echo htmlspecialchars($contenido);
        echo "</pre>";
    }
} else {
    echo "El archivo no existe, se creará uno nuevo ahora";
}

// Sobreescribir el archivo con el nuevo texto que haremos
$texto = "Soy el nuevo texto que va a reemplazar el antiguo";
$resultado = file_put_contents($rutaArchivo, $texto, LOCK_EX);
if ($resultado === false) {
    echo "Error al escribir en el archivo";
} else {
    echo "Se ha sobreescrito en el archivo correctamente, felicidades";
}

?>