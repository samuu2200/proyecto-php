<?php

$directorio = './mi_carpeta';

if (!is_dir($directorio)) {
    if (mkdir($directorio, 0755, true)) {
        echo "Directorio creado<br>";
    } else {
        die("No se pudo crear el directorio.");
    }
} else {
    echo "El directorio ya existe<br>";
}

if ($gestor = opendir($directorio)) {
    echo "<h1>Contenido de la carpeta</h1><ul>";
    while (false !== ($archivo = readdir($gestor))) {
        if ($archivo != '.' && $archivo != '..') {
            echo "<li>$archivo</li>";
        }
    }
    echo "</ul>";
    closedir($gestor);
} else {
    echo "No se ha podido abrir el directorio.";
}

?>
