<?php 

/* 
    Condicionales

    IF:
     if (condicion) {
        instrucciones
     } else {
        otras instrucciones 
     }



    // OPERADORES DE COMPARACIÓN
    == igual
    === exactamente igual
    != distinto / diferente
    <> diferente
    !== no identico
    < menor que
    > mayor que
    <= menor o igual que
    >= mayor o igual que 

    // OPERADORES LOGICOS
    && and
    || or
    ! not
    and, or 
*/

// Ejemplo 1
$color = "rojo";

if (hash_equals("rojo", $color)) {
    echo "EL COLOR ES ROJO";
} else {
    echo "El color no es rojo";
}

echo "<br>";

// Ejemplo 2
$year = 2018;
if($year != 2019) {
    echo "Es un año diferente a  2019";
} else {
    echo "Estamos 2019";
}

echo "<br>";

// Ejemplo3
$edad = 13;
$mayoria_edad = 18;
$nombre = "Samuel";

if ($edad >= $mayoria_edad) {
    echo "<h1>$nombre es mayor de $mayoria_edad</h1>";
} else {
    echo '<h2>' . $nombre . ' no es mayor de ' . $mayoria_edad . '<h2>';
}

echo "<br>";

// Ejemplo 4

$dia = 7;
/*
if ($dia == 1 ) {
    echo "Es lunes";
} else {
    if ($dia == 2) {
        echo "Es martes";
    } else {
        if ($dia == 3) {
            echo "Es miércoles";
        }
    }
}
if ($dia == 1) {
    echo "lunes";
} else if ($dia == 2) {
    echo "martes";
} else if ($dia == 3) {
    echo "miércoles";
} else if ($dia == 4) {
    echo "jueves";
} else {
    echo "es fin de semana";
}
*/


$dia_semana = match(true) {
    $dia == 1 => "Lunes",
    $dia == 2 => "Martes",
    $dia == 3 => "Miércoles",
    $dia == 4 => "Jueves",
    $dia == 5 => "Viernes", 
    default => "Es fin de semana"
};

echo $dia_semana;


// GOTO
goto marca;
echo "<h3>Instrucción 1</h3>";
echo "<h3>Instrucción 2</h3>";
echo "<h3>Instrucción 3</h3>";
echo "<h3>Instrucción 4</h3>";

marca: 
echo "<h1>Me he saltado 4 echos</h1>";
?>
