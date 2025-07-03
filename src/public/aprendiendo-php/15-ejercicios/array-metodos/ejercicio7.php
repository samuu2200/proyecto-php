<?php 
/* 
 Ejercicio 7: Obtener clave por valor

Objetivo: Encontrar la clave asociada a un valor.

Busca la clave correspondiente al país "Italia" y muéstrala.
*/

$paises = [
    'es' => 'España',
    'fr' => 'Francia',
    'it' => 'Italia'
];

$search = array_search('España', $paises);
var_dump($search);
