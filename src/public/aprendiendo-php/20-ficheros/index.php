<?php 
/* // Definir la ruta del archivo
$archivoRuta = __DIR__ . "/fichero.txt";

$archivo = fopen($archivoRuta, "a+");
if (!$archivo) {
    die("Error: No se pudo abrir el archivo");
}

// Poner el puntero al principio para leer todo
rewind($archivo);

// Leer y mostrar el contenido de manera segura
echo "<pre>"; // Para que el texto conserve los de línea
while (!feof($archivo)) {
    $linea = fgets($archivo);
    if ($linea !== false) {
        echo htmlspecialchars($linea); // Evitamos inyecciones html
    }
}
echo "</pre>";

// Escribir en el archivo
$texto = "*** Soy el archivo metido desde PHP ***" . PHP_EOL;
if (fwrite($archivo, $texto) === false) {
    echo "Error: No se pudo escribir en el archivo";
}

// Cerrar el archivo
fclose($archivo); */

$rutaArchivo = __DIR__ . "/fichero.txt";

$archivo = fopen($rutaArchivo, "a+");
if (!$archivo) {
    die("Error: No se pudo abrir el archivo");
}

rewind($archivo);

echo "<pre>";
while (!feof($archivo)) {
    $linea = fgets($archivo);
    if ($linea !== false) {
        echo htmlspecialchars($linea);
    }
}
echo "</pre>";

$texto = "Archivo creado por PHP" . PHP_EOL;
if (fwrite($archivo, $texto) === false) {
    echo "Error: No se pudo escribir en el archivo";
}

fclose($archivo);

?>