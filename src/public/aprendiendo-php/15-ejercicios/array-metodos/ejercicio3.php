<?php 
/* 
Ejercicio 3: Reordenar datos

Objetivo: Ordenar un array asociativo por valor ascendente.

Ordena el array por precios de menor a mayor manteniendo las claves.
*/

$precios = [
    'manzana' => 2,
    'pera' => 3,
    'naranja' => 1
];

asort($precios);
foreach ($precios as $precio) {
    echo $precio . "<br>";
}