<?php 
/* 
Ejercicio 5: Extraer una columna

Objetivo: De un array de arrays asociativos, obtener solo los valores de una clave.

Obtén un array con solo los nombres.
*/

$usuario = [
    ['id' => 100, 'nombre' => 'Ana'],
    ['id' => 200, 'nombre' => 'Luis'],
    ['id' => 300, 'nombre' => 'Marta'],
];

$columna = array_column($usuario, 'nombre', 'id');
print_r($columna);


