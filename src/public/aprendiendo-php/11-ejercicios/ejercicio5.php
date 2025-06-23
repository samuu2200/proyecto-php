<?php 

/* 
    EJERCICIO 5:
    Hacer un programa que muestre todos los números entre dos números que nos lleguen por las urls ($_GET)
*/

$num1 = filter_input(INPUT_GET, 'num1', FILTER_VALIDATE_INT);
$num2 = filter_input(INPUT_GET, 'num2', FILTER_VALIDATE_INT);

if ($num1 !== false && $num2 !== false) {

    echo "<h1>Recorriendo número pasados por parámetros con while</h1>";

    if ($num1 <= $num2) {
        for ($i = $num1; $i <= $num2; $i++) {
            echo "$i<br/>";
        }
    } else {
        echo "El número inicial ($num1) debe ser menor o igual que el número final ($num2).";
    }
    
} else {

    if ($num1 === false) echo "El número $num1 es inválido, por favor corrigelo";
    if ($num2 === false) echo "El número $num2 es inválido, por favor corrigelo";
    
}
    
?>