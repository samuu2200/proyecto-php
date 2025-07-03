<?php 
/* 
Ejercicio 8: Quitar duplicados

Objetivo: Eliminar valores repetidos.

Crea un array nuevo sin elementos duplicados.
*/


$numeros = [1,2,2,3,4,4,5];

$unique = array_unique($numeros);
print_r($unique);