<?php 

/* 
Hacer un programa en PHP que tenga un array con 8 número enteros y que haga lo siguiente:
1. Recorrerlo y mostrarlo
2. Ordenarlo y mostrarlo
3. Mostrar su longitud
4. Buscar algún elemento
*/

// Funciones
function mostrarArray($numeros) {
    $resultado = "";
    foreach($numeros as $numero) {
        $resultado .= $numero . "<br>";
    }
    return $resultado;
}

$numeros = [13, 26, 32, 4, 57, 65, 79, 86];

// Recorrerlo y mostrarlo
foreach($numeros as $numero) {
    echo $numero . " ";
}

echo "<br>";
echo "<br>";

// Ordenarlo y mostrarlo
echo "<h1>Ordenar y mostrar</h1>";
sort($numeros);
echo mostrarArray($numeros);

echo "<h1>Inverso y mostrar</h1>";
asort($numeros);
echo mostrarArray($numeros);
?>