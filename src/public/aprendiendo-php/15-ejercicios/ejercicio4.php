<?php 

/* 
Crear un script en php que tengo 4 variables, una de tipo array, otra de tipo string, otra int, y otra bool y que imprima un mensaje según el tipo de variable que sea
*/

$array = [1, 2, 3, 4];
$string = "Hola mundo";
$int = 22;
$bool = true;

echo gettype($array) . "<br>";
echo gettype($string) . "<br>";
echo gettype($int) . "<br>";
echo gettype($bool) . "<br>";


?>