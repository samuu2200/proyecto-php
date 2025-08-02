<?php 

$rutaArchivo = __DIR__ . "/ficheros-prueba/diario.txt";

$textoArr = [
    "Ayer había comido una rica comida muy sabrosa, donde pude disfrutar un montón de ella",
    "El problema es que ayer estaba muy bien pero hoy ya no tanto",
    "Quisiera volver a probar la misma comida de ayer"
];

if (file_exists($rutaArchivo)) {
    echo "El archivo existe, se comprobará su contenido <br>";
    $flags = FILE_APPEND | LOCK_EX;
} else {
    die("El archivo no existe");
}

$texto = implode(PHP_EOL, $textoArr) . PHP_EOL;
$contenido = file_get_contents($rutaArchivo);
if ($contenido === false) {
    die ("No se ha podido leer el archivo");
}

$nuevoContenido = str_replace("Ayer", "hoy", $contenido);

$resultado = file_put_contents($rutaArchivo, $nuevoContenido);
if ($resultado === false) {
    die("No se puede sobreescribir en el archivo");
} 

echo "El archivo fue actualizado correctamente";
$contenidoFinal = file_get_contents($rutaArchivo);
echo "<pre>" . htmlspecialchars($contenidoFinal) . "</pre>";

?>