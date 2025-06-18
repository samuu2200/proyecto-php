<?php 

    /* 
        Ejercicio 2:
        Escribir un script de php que nos muestre por pantalla todos los número pares qeu hay del 1 al 100
    */
    echo "<h2>Bucle for</h2>";
    for ($i = 0; $i <= 100; $i+=2) {
        echo "$i <br>";
    }

    echo "<hr>";

    echo "<h2>Bucle while</h2>";
    $i = 0;
    while ($i <= 100) {
        if ($i % 2 == 0) {
            echo "$i <br>";
        }
        $i++;
    }
?>