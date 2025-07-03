<?php 
/* 
Ejercicio 1: Filtrar elementos

Objetivo: De un array de números, conservar solo los pares.

Instrucciones: Crear un nuevo array que contenga solo los números pares.
*/

$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$pares = array_filter($numeros, function($n) {
    return $n % 2 === 0;
});

print_r($pares);

echo "<br>";

$impares = array_filter($numeros, fn($value): int => $value % 2 !== 0);

print_r($impares);

?>