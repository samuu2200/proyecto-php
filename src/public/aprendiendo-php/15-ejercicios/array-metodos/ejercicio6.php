<?php 
/* 
Ejercicio 6: Comprobar existencia de un elemento

Objetivo: Verificar si un valor existe en el array.

Comprueba si el color "verde" está en el array e imprime un mensaje.
*/

$colores = ['rojo', 'verde', 'azul'];

$busqueda = in_array('verde', $colores);
echo $busqueda;