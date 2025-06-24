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

/* calculadora(10, 0);
echo "<hr>";
calculadora(4, 5); */

// Ejemplo 4
function calculadoraOperacion($num1, $num2, ?string $operacion = null) {

    $resultado = [
        'suma'              => $num1 + $num2,
        'resta'             => $num1 - $num2,
        'multiplicacion'    => $num1 * $num2,
        'division'          => $num2 === 0 ? null : $num1 / $num2,
        'division_error'    => $num2 === 0 ? 'No se puede dividir entre 0' : null,
    ];

    $operacion = strtolower($operacion);
    if ($operacion !== null) {
        return $resultado[$operacion] ?? "Operacion '$operacion' inválida";
    }

    return $resultado;

}

echo calculadoraOperacion(5, 5, 'SUMA');
$data = calculadora(6, 6);
foreach ($data as $clave => $valor) {
    echo ucfirst($clave) . ": " . ($valor !== null ? $valor : '-') . "<br>";
}

// Ejemplo 5
function getNombre($nombre):string {
    $texto = "El nombre es $nombre";
    return $texto;
}

function getApellidos($apellidos): string {
    $texto = "El apellido es $apellidos";
    return $texto;
}

function devuelveElNombre($nombre, $apellidos): string {
    $texto = getNombre($nombre)
            ."<br>" .
            getApellidos($apellidos); 
    return $texto;
}

echo devuelveElNombre("Samuel", "Quintero"); 


?>