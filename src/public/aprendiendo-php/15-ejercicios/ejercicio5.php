<?php 

/* 
Crear un array con el contenido de la tabla:
ACCION  AVENTURA    DEPORTES
GTA     ASSASINS    FIFA
        CRASH       PES
COD     PRINCE OF   MOTOGP
PUG

Cada columna debe ir en un fichero separado(includes)

*/

include __DIR__ . "/accion.php";
include __DIR__ . "/aventura.php";
include __DIR__ . "/deportes.php";

$juegos = [
    'accion' => $accion,
    'aventura' => $aventura,
    'deportes' => $deportes
];

echo "<table border='1' cellpadding='3'";
if (!empty($juegos)) {
    // Tomamos las claves del primer juego para cabecera dinámica
    echo "<tr>";
    foreach (array_keys($juegos) as $categoria) {
        echo "<th>" . htmlspecialchars($categoria) . "</th>";
    }
    echo "</tr>";

    // Ahora recorremos cada juego
    foreach ($juegos as $juego) {
        echo "<tr>";
        foreach ($juego as $valor) {
            echo "<td>" . htmlspecialchars($valor) . "</td>";
        }
        echo "</tr>";
    }
}
echo "</table>";


?>