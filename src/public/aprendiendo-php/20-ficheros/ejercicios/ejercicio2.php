<?php
/* 
$rutaArchivo = __DIR__ . "/registro.txt";

$textoArray = [
    "Hola mundo, soy Samuel",
    "Yo solo quiero que todo lo bueno venga a mí de la mejor manera",
    "Quiero ser uno de los mejores programadores y mejor pagados de todos"
];

if (file_exists($rutaArchivo)) {
    echo "Se ha añadido nuevas líneas al archivo <br>";
    $flags = FILE_APPEND | LOCK_EX;
} else {
    echo "No existe ese archivo, se creará uno ahora mismo";
    $flags = LOCK_EX;
}

$texto = implode(PHP_EOL, $textoArray) . PHP_EOL;

$resultado = file_put_contents($rutaArchivo, $texto, $flags);
if ($resultado === false) {
    echo "Ha habido al escribir el archivo";
} 

$contenido = file_get_contents($rutaArchivo);
if ($contenido === false) {
    echo "Ha habido un error al leer el contenido del archivo";
} else {
    echo "<pre>";
    echo htmlspecialchars($contenido);
    echo "</pre>";
}
 */

$textoArray = [
    "Samuel Darío Quintero Jaimes",
    "Santiago Morales",
    "Daroscode", 
    "Avanzadi innovation"
];
$rutaArchivo = __DIR__ . "/registro.txt";

if (file_exists($rutaArchivo)) {
    echo "Se ha añadido nuevas líneas al archivo";
    $flags = FILE_APPEND | LOCK_EX;
} else {
    echo "No existe ese archivo, se creará un nuevo ahora";
    $flags = LOCK_EX;
}

$texto = implode(PHP_EOL, $textoArray);
$resultado = file_put_contents($rutaArchivo, $texto, $flags);
if ($resultado === false) {
    echo "Ha habido un error al escribir en el archivo";
} 

$contendio = file_get_contents($rutaArchivo);
if ($contendio === false) {
    echo "Ha habido un error al leer el contenido";
} else {
    echo "<pre>";
    echo htmlspecialchars($contenido);
    echo "</pre>";
}