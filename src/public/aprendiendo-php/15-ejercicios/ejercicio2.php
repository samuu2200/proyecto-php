<?php 

/* 
Escribir un programa con PHP que añada valores a un array mientras que su longitud sea mejor a 120 y luego mostrarlo por pantalla
*/

$valores = [1, 2, 3];
$contador = end($valores) + 1;

while (count($valores) <= 120) {
    $valores[] = $contador;
    $contador++;
}

foreach ($valores as $valor) {
    echo $valor . "<br>";
}

?>