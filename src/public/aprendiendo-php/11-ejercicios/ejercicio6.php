<?php 

/* 
    EJERCICIO 6
    Mostrar una tabla de html con las tablas de multiplicar del 1 al 10
*/

echo "<h2>Tablas de multiplicar del 1 al 10</h2>";

echo "<table border='1' cellpadding='10' cellspacing='0' style='text-align:center;'>";

// Primera fila: cabeceras (Tabla del 1, del 2, ...)
echo "<tr>";
for ($i = 1; $i <= 10; $i++) {
    echo "<th>Tabla del $i</th>";
}
echo "</tr>";

// Segunda fila: cada celda contiene la tabla correspondiente
echo "<tr>";
for ($i = 1; $i <= 10; $i++) {
    echo "<td>";
    for ($j = 1; $j <= 10; $j++) {
        echo "$i × $j = " . ($i * $j) . "<br>";
    }
    echo "</td>";
}
echo "</tr>";

echo "</table>";

        

?>