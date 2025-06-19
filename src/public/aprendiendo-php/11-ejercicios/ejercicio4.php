<?php 

/* 
    Ejercicio 4:
    Recoger dos números por la url (GET) y hacer todas las operaciones básicas de una calculadora, suma, resta, multiplicación y división de esos dos números
*/

// Recogemos por url los números para utilizarlos en las operaciones

$numero1 = filter_input(INPUT_GET, 'numero1', FILTER_VALIDATE_INT) ?? 0;
$numero2 = filter_input(INPUT_GET, 'numero2', FILTER_VALIDATE_INT) ?? 0;

if ($numero1 !== false && $numero2 !== false) {
    
    echo "<h2>Calculadora PHP</h2>";
    echo "<p>Parámetros recibidos: $numero1 y $numero2</p>";

    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicacion = $numero1 * $numero2;
    $division = $numero2 !== 0 ? $numero1 / $numero2 : "No se puede dividir entre cero";

    echo "<ul>";
    echo "<li>Suma: $numero1 + $numero2 = $suma </li>"; 
    echo "<li>Resta: $numero1 - $numero2 = $resta </li>"; 
    echo "<li>Multiplicación: $numero1 * $numero2 = $multiplicacion </li>"; 
    echo "<li>División: $numero1 / $numero2 = $division </li>"; 
    echo "</ul>";

} else {

    echo "<strong>Error:</strong> ";
    if ($numero1 === false) echo "El parámetro 'numero1' no es válido. ";
    if ($numero2 === false) echo "El parámetro 'numero2' no es válido.";
    
}


?>