<?php 

/* 
FUNCIONES:
Una función es un conjuntos de instrucciones agrupadas bajo un nombre concreto y que puede reutilizarse solamente invocando a la función tantas veces como queramos.

funcion nombre_de_mi_funcion ($param1, $param2) {
    // Bloque de instrucciones
}

nombre_de_mi_funcion($param1, $parmam2);
    
*/

// EJEMPLO 1
function muestraNombres() {

    echo "Samuel <br/>";
    echo "Víctor <br/>";
    echo "Rosa <br/>";
    echo "Antonio <br/>";
    
}

/* muestraNombres();
muestraNombres();
muestraNombres();
muestraNombres(); */

// Ejemplo 2
function tabla($numero) {

    for ($i = 1; $i <= 10; $i++) {
        echo "$numero x $i = " . ($numero * $i) . "<br>";
    }
    
}

// Ejemplo 3
function calculadora2($num1, $num2, $negrita = false) {

    $suma = $num1 + $num2;
    $resta = $num1 - $num2;
    $multiplicacion = $num1 * $num2;
    $division = ($num2 === 0) ? "No se puede dividir entre 0" : ($num1 / $num2);

    if ($negrita) {
        echo "<h1>";
    }
    
    echo "Suma: $suma <br>" ; 
    echo "Resta: $resta <br>" ; 
    echo "Multiplicación: $multiplicacion <br>" ; 
    echo "División: $division <br>" ; 

    if ($negrita) {
        echo "</h1>";
    }
    
}

calculadora2(3, 0, true);

echo "<hr>";

function calculadora($num1, $num2, $mostrar = false): array {
    $resultado = [
        'suma'           => $num1 + $num2,
        'resta'          => $num1 - $num2,
        'multiplicacion' => $num1 * $num2,
        'division'       => $num2 === 0 ? null : $num1 / $num2,
        'division_error' => $num2 === 0 ? 'No se puede dividir entre 0' : null,
    ];

    if ($mostrar) {
        foreach ($resultado as $clave => $valor) {
            echo ucfirst($clave) . ": " . ($valor !== null ? $valor : '-') . "<br>";
        }
    }

    return $resultado;
}

calculadora(10, 0, true);

?>