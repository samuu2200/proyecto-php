<style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 10px;
    }
</style>

<?php

/* 
ARRAYS:
Un array es una colección o un conjunto de datos/valores, bajo un único nombre y para acceder a esos valores podemos usar un índice numerico o alfanumerico

*/

$pelicula = "Batman";
// Declaración de un array de películas
$peliculas = array('Batman', 'Spiderman', 'Superman');

// Declaración de un array de cantantes
$cantantes = ['2pac', 'Drake', 'Jennifer Lopez'];

// Array asociativo
$personas = array(
    'nombre' => 'Samuel',
    'apellidos' => 'Quintero',
    'web' => 'daroscode.es',
);




var_dump($personas['apellidos']);

/* if (isset($peliculas[0])) {
    echo $peliculas[0] . "<br>";
}

if (isset($cantantes[0])) {
    echo $cantantes[0] . "<br>"; 
} */

// Recorrer el array
if (!empty($cantantes)) {
    foreach ($cantantes as $cantante) {
        echo $cantante . "<br>";
    }
} else {
    echo "No hay cantantes en la lista";
}

// Recorrer con For
if (!empty($cantantes)) {
    for ($i = 0; $i < count($cantantes); $i++) {
        echo $cantantes[$i] . "<br>";
    }
}

// Recorrer for inverso
if (!empty($peliculas)) {
    for ($i = count($peliculas) - 1; $i >= 0; $i--) {
        echo "Película #$i: $peliculas[$i] <br>";
    }
}

echo "<br>";

// Mostrar más información de un array
if (!empty($peliculas)) {
    foreach ($peliculas as $index => $pelicula) {
        echo "Película #$index: $pelicula <br>";
    }
} else {
    echo "No hay películas en la lista";
}

// Array multidimencionales
$contactos = [

    [
        'nombre' => 'Antonio',
        'email' => 'antonio@antonio.com',
    ],
    [
        'nombre' => 'Luis',
        'email' => 'luis@luis.com',
    ],
    [
        'nombre' => 'Salvador',
        'email' => 'salvador@salvador.com',
    ],

];

echo "<h3>Lista de contactos</h3>";
echo "<ul>";
if (!empty($contactos)) {
    foreach ($contactos as $index => $contacto) {
        echo "<li>";
        echo "Contacto #" . ($index + 1) . "<br>";
        echo "Nombre: " . $contacto['nombre'] . "<br>";
        echo "Email: " . $contacto['email'] . "<br>";
        echo "<hr>";
        echo "</li>";
    }
} else {
    echo "<li>";
    echo "No se ha encontrado una lista de contactos";
    echo "</li>";
}
echo "</ul>";

$libros = [
    [
        'titulo'  => '48 leyes del poder',
        'autor'   => 'Robert Greene',
        'anio'    => '1998',
    ],
    [
        'titulo'  => 'El ego es tu enemigo',
        'autor'   => 'Ryan Holiday',
        'anio'    => '2023',
    ],
    [
        'titulo'  => 'Cómo ganar amigos e influir sobre las personas',
        'autor'   => 'Dale Carnegie',
        'anio'    => '1936',
    ],
    [
        'titulo'  => 'Padre rico, padre pobre',
        'autor'   => 'Robert Kiyosaki',
        'anio'    => '1997',
    ],
];

echo "<h3>Tabla de libros</h3>";
echo "<table>";
if (!empty($libros)) {

    echo "<tr>";
    foreach (array_keys($libros[0]) as $clave) {
        echo "<th> $clave </th>";
    }
    echo "</tr>";

    foreach ($libros as $libro) {
        echo "<tr>";
        foreach ($libro as $valor) {
            echo "<td>" . htmlspecialchars($valor) . "</td>";
        }
        echo "</tr>";
    }
    
} else {
    echo "No hay libros en la tabla";
}
echo "</table>";


?>