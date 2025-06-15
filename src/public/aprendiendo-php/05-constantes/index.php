<?php 

/* 
Constantes
Es un contenedor de información que no puede variar
*/

define('nombre', 'Samuel Quintero');
define('web', 'daroscode.es');

echo '<h1>' . nombre . ' ' . web . '</h1>';

$web = "avanzadi.com";
echo $web;

$web = "hola" . "<br>";
echo $web;

// Constantes predefinidas

// Nos dice el sistema operativo del ordenador
echo PHP_OS . '<br>';
// Nos dice la versión de php
echo PHP_VERSION . '<br>';
// Nos dice que directorios tenemos el php
echo PHP_EXTENSION_DIR . '<br>';
// Línea donde está ubico el código
echo __LINE__ . '<br>';
// Nos dice la ruta completa de este archivo
echo __FILE__ . '<br>';
// Nos dice en que función se está ejecutando esa línea de código
function hola() {
    echo __FUNCTION__ . '<br>';
}

hola();





?>