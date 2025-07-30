<?php 

$rutaArchivo = __DIR__ . "/datos.txt";

$textoArray = [
    "Hola mundo",
    "Hello world",
    "Que hubo parce"
];

if (file_exists($rutaArchivo)) {
    echo "El texto se ha agregado correctamente <br>";
    $flags = FILE_APPEND | LOCK_EX;
} else {
    echo "El archivo no existe, se creara uno ahora <br>";
    $flags = LOCK_EX;
}

$texto = implode(PHP_EOL, $textoArray) . PHP_EOL;

$resultado = file_put_contents($rutaArchivo, $texto, $flags);
if ($resultado === false) {
    die("Error al escribir en el archivo");
} else {
    echo "Se ha agregado nuevo contenido al final del archivo <br>";
}

$lineas = file($rutaArchivo, FILE_IGNORE_NEW_LINES);
$totalLineas = count($lineas);

foreach ($lineas as $numero => $linea) {
    echo "Linea " . ($numero + 1) . ": " . htmlspecialchars($contenido) . "<br>";
}

$contenido = file_get_contents($rutaArchivo);
if ($contenido === false) {
    echo "No se ha podido leer el archivo";
} else {
    echo "<pre>";
    echo htmlspecialchars($contenido);
    echo "</pre>";
}

?>