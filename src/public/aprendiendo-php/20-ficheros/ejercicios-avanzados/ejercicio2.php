<?php 

$rutaCSV = __DIR__ . "/ficheros-avanzados/usuario.cvs";

if (!file_exists($rutaCSV)) {
    $contenidoInicial = "nombre,email,edad" . PHP_EOL;
    $contenidoInicial .= "Ana,ana@mail.com,25" . PHP_EOL;
    $contenidoInicial .= "Luis,luis@mail.com,30" . PHP_EOL;
    $contenidoInicial .= "Marta,marta@mail.com,22" . PHP_EOL;  

    file_put_contents($rutaCSV, $contenidoInicial);
}

// Abrir el archivo CSV
$archivo = fopen($rutaCSV, "r");
if (!$archivo) {
    die("No se puede abrir el archivo");
}

// Mostrar tabla

?>