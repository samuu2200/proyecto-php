<?php 

/* 
Hacer un programa que compruebe si una variable está vacia y si está vacia rellenarla con texto en minúsculas y mostrarlo en mayúsculas y negrita
*/

$variableConValores = "Quiero ser el mejor programador del mundo";
$variableSinValores = "";

if (empty($variableSinValores)) {

    $variableSinValores = "Este año será el mejor de todos";
    $resultado = strtoupper($variableSinValores);

    echo "<strong> $resultado </strong>";
    
} else {
    echo "Esta variable NO está vacia";
}

?>