<?php 

/* 
    Ejercicio 3:
    Escribir un programa que imprima por pantalla los cuadrados (un número multiplicado por si mismo) de los 40 números naturales
    PD: Utilizar el bucle while
*/

/* $contador = 1;
while ($contador <= 40) {

    echo "El cuadrado de $contador es: " . $contador * $contador . "<br>";

    $contador++;
} */


for ($i = 1; $i <= 40; $i++) {
    $cuadrado = $i * $i;
    echo "El cuadrado de $i es: " . $cuadrado . "<br>";
}



?>