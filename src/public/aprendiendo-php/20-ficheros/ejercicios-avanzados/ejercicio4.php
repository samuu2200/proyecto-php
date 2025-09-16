<?php 

$registrosValidos = [];
$registrosInvalidos = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['archivo_cvs'])) {
    $tmpName = $_FILES['archivo_cvs']['tmp_name'];
    $nombreOriginal = $_FILES['archivos_cvs']['name'];
    $extension = pathinfo($nombreOriginal, PATHINFO_EXTENSION);

    if ($extension !== 'cvs') {
        die("El archivo no tiene extensión .cvs");
    }

    if (!is_uploaded_file($tmpName)) {
        die("Error al subir el archivo");
    }
}

?>