<?php 

// Debugguear
$nombre = "Samuel Quintero";
var_dump($nombre);

echo "<br>";
echo "<br>";

// Fechas
echo date('d-m-Y');

echo "<br>";
echo "<br>";

echo time();

echo "<br>";
echo "<br>";

// Metematicas
echo "Raiz cuadrada de 10 es " . sqrt(10);

echo "<br>";
echo "<br>";

echo "Número aléatorio entre 10 y 40: " . rand(10, 40);

echo "<br>";
echo "<br>";

echo "Número pi: " . pi();

echo "<br>";
echo "<br>";

echo "Redondear: " . round(7.898234, 2);

echo "<br>";
echo "<br>";

// Más funciones generales
echo gettype($nombre);

echo "<br>";
echo "<br>";

// Dectectar tipado
if (is_string($nombre)) {
    echo "Esa variable es un string";
} 

echo "<br>";
echo "<br>";

if (!is_float($nombre)) {
    echo "La variable nombre no es un número con decimales";
}

echo "<br>";
echo "<br>";

// Comprobar si existe una variable
if (isset($nombre)) {
    echo "La variable existe";
} else {
    echo "La variables no existe";
}

echo "<br>";
echo "<br>";

// Limpiar espacios
$frase = "         mi contenido        ";
var_dump($frase);
echo "<br>";
var_dump(trim($frase));

// Eliminar variables / indices de arrays
$year = 2020;
unset($year);
var_dump($year);

echo "<br>";
echo "<br>";

// Comprobar variable vacia
$texto = false;
if (empty($texto)) {
    echo "La variable texto está vacia";
} else {
    echo "La variable tiene contenido";
}

echo "<br>";
echo "<br>";

// Contar caracteres de una cadena
$cadena = "12345";
echo strlen($cadena);

echo "<br>";
echo "<br>";

// Encontrar caracter
$frase = "La vida es bella";
echo strpos($frase, "ida");

echo "<br>";
echo "<br>";

// Reemplazar palabras de un string
$frase = str_replace("vida", "moto", $frase);
echo $frase;

echo "<br>";
echo "<br>";

// Mayúsculas y minúsculas
echo strtolower($frase);
echo "<br>";
echo strtoupper($frase);

?>