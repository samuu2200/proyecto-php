<?php 
/* 
Ejercicio 2: Transformar elementos

Objetivo: Convertir un array de nombres a mayúsculas.

Crea un nuevo array con todos los nombres en mayúsculas.
*/

$nombres = ['juan', 'ana', 'pedro', 'maria'];

$mayus = array_map('strtoupper', $nombres);
$tabla = array_map(fn($value): int => $value * 2, range(1, 100));

foreach ($tabla as $num) {
    echo $num . "<br>";
}


?>