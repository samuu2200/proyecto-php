<?php 

$rutaOriginal = __DIR__ . "/ficheros-prueba/comentarios.txt";
$rutaMayus = __DIR__ . "/ficheros-prueba/comentarios_mayus.txt";

$textoArr = [
    "Esto es un comentario.",
    "Aquí hay otra línea",
    "Texto en minúsculas"
];

if (!file_exists($rutaOriginal)) {
    echo "El archivo no existe, se creará uno ahora <br>";
}

$texto = implode(PHP_EOL, $textoArr) . PHP_EOL;
$contenidoTexto = file_put_contents($rutaOriginal, $texto);
if ($contenidoTexto === false) {
    die("Error al sobreescribir el archivo");
}

$contenidoReal = file_get_contents($rutaOriginal);
if ($contenidoReal === false) {
    die("Error: NO se puede leer el archivo");
}

$mayus = strtoupper($contenidoReal);
$resultado = file_put_contents($rutaMayus, $mayus);
if ($resultado === false) {
    die("Error: No se ha podido transforma el texto a mayúsculas");
}

echo "El archivo ha sido modificado exitosamente";
echo "<pre>" . htmlspecialchars($mayus) . "</pre>";

?>