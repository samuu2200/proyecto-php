<?php 

$cantantes = ['2pac', 'Drake', 'Jennifer Lopez', 'Alfredo'];
$numeros = [1, 2, 3, 4, 5, 6, 7, 8];

/* // Ordena númericamente
sort($cantantes);

echo "<br>";
echo "<br>";

//Ordena a la inversa
arsort($cantantes);

echo "<br>";
echo "<br>";

// Añadir elementos array
$cantantes[] = "Natos";
array_push($cantantes, "Waor");

echo "<br>";
echo "<br>";

// Eliminar elementos
array_pop($cantantes);

echo "<br>";
echo "<br>";

unset($cantantes[3]);

echo "<br>";
echo "<br>";

// Aleatorio
$indice = array_rand($cantantes);
echo $cantantes[$indice];

echo "<br>";
echo "<br>";

// Dar la vuelta
var_dump(array_reverse($numeros));

echo "<br>";
echo "<br>"; */

// Buscar dentro de un array
$resultado = array_search('Drake', $cantantes);
var_dump($resultado);

echo "<br>";
echo "<br>";

// Count número de elementos
echo count($cantantes);

echo "<br>";
echo "<br>";

echo sizeof($cantantes);
    
?>