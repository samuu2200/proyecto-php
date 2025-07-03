<?php 
/* 
Ejercicio 4: Combinar arrays

Objetivo: Crear un array asociativo combinando dos arrays.

Combínalos en un array asociativo con claves y valores.
*/

$claves = ['nombre', 'edad', 'email'];
$valores = ['Juan', 30, 'juan@email.com'];

$combi = array_combine($claves, $valores);
print_r($combi);