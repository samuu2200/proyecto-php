<?php 

$rutaCSV = __DIR__ . "/ficheros-avanzados/usuario.cvs";

if (!file_exists($rutaCSV)) {

    $contenidoInicial = "nombre,email,edad" . PHP_EOL;
    $contenidoInicial .= "Ana,ana@mail.com,25" . PHP_EOL;
    $contenidoInicial .= "Luis,luis@mail.com,30" . PHP_EOL;
    $contenidoInicial .= "Marta,marta@mail.com,22" . PHP_EOL;

    file_put_contents($rutaCSV, $contenidoInicial);
}

$archivo = fopen($rutaCSV, 'r');
if (!$archivo) die("No se ha podido abrir el archivo");

echo "<h1>Tabla de usuarios</h1>";
echo "<table border='1' cellpadding='5' >";
$esCabecera = true;

while (!feof($archivo)) {
    $fila = fgetcsv($archivo);

    if ($fila === false || $fila === [null]) continue;

    echo "<tr>";
    foreach ($fila as $celda) {
        $celda = htmlspecialchars($celda);
        echo $esCabecera
            ? "<th>$celda</th>"
            : "<td>$celda</td>";
    }
    echo "</tr>";

    $esCabecera = false;
}
echo "</table>";

fclose($archivo);

?>