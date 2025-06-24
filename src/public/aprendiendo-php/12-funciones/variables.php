<?php 

/* 

VARIABLES LOCALES:
Son las que se definen dentro de una función y no pueden ser usadas fuera de la función, solo están disponible dentro. A no ser que yo haga un return

VARIABLES GLOBALES:
Las variables globales son las que se declaran fuera de una función y están disponibles dentro y fuera de las funciones

*/

// Variable global
$frase = "Ni los genios son tan genios, ni los mediocres tan mediocres";

// echo $frase;

function holaMundo() {
    global $frase;
    echo "<h1>$frase</h1>";

    $year = 2019;
    echo "<h1>$year</h1>";
    return $year;
}

//echo holaMundo();

// Funciones variables
function buenosDias() {
    return "Hola, buenos días :)";
}

function buenasTardes() {
    return "Hey, qué tal ha ido la comida?";
}

function buenasNoches() {
    return "¿te vas a dormir ya?, Buenas noches";
}

/* echo "<br>";
$horario = "buenasNoches";
echo $horario(); */

// Funciones con arrays asociativos y funciones anonimas
$horarios = [
    'buenosDias' => "Buenos días señoras y señores",
    'buenasTardes' => "Buenas tardes señoras y señores",
    'buenasNoches' => "Buenas noches a todos",
];

$hora = 22;

if ($hora < 12) {
    $opcion = 'buenosDias';
} elseif ($hora < 20) {
    $opcion = 'buenasTardes';
} else {
    $opcion = 'buenasNoches';
}

echo $horarios[$opcion];

echo "<br>";
// Funciones anónimas
$acciones = [
    'sumar' => function($a, $b) { return $a + $b; },
    'restar' => function($a, $b) { return $a - $b; }
];

$operacion = 'restar';
echo $acciones[$operacion](6, 55);


?>