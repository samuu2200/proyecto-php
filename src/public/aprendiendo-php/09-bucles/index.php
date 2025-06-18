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

echo '<hr>';

// Ejemplo
if (isset($_GET['numero'])) {
    
    // Cambiar tipo de dato
    $numero = (int) $_GET['numero'];
    
} else {
    $numero = 1;
}

echo "<h1>Tabla de multiplicar del número $numero</h1>";

$contador = 1;
while ($contador <= 10) {
    echo "$numero x $contador = " . ($numero * $contador) . "<br/>";
    $contador++;
}

/* 
    DO WHILE 
do {
    // Bloque de instrucciones
} while (condicion); 
*/

echo '<hr>';
echo "<h1>Prueba con el do-while</h1>";

$edad = 18;
$contador = 1;
do {

    echo "Tienes acceso al local privado $contador <br>";
    $contador++;

} while ($edad >= 18 && $contador <= 10);



?>