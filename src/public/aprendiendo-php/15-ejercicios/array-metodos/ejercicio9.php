<?php 
/* 
Ejercicio 9: Extraer claves

Objetivo: Obtener solo las claves de un array asociativo.

Obtén un array con las claves.
*/

$usuario = [
    'nombre' => 'Laura',
    'email' => 'laura@email.com',
    'edad' => 28
];

foreach (array_keys($usuario) as $user) {
    echo $user . "<br>";
}