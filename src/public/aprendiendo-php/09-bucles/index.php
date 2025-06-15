<?php 

// BUCLE WHILE
// es una estrucutra de control que itera o repiete la ejecución de una serie de intrucciones tantas veces como sea necesario, en base a una condición

/* 
while (condicion) {
    bloque de intrucciones
    otra instrucción
} 
*/

$numero = 0;

while ($numero <= 100) {
    echo $numero;
     
    if ($numero != 100) {
        echo ", ";
    }
    
    $numero++;
}

?>