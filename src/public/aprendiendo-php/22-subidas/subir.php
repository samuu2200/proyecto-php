<?php 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $archivo = $_FILES['archivo'] ?? null;

    // Validar que se ha subido un archivo sin errores
    if (!$archivo || $archivo['error'] !== UPLOAD_ERR_OK) {
        echo "Error en la subida del archivo.";
        exit;
    } 

    // Validar el tipo MIME del archivo subido
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mime = finfo_file($finfo, $archivo['tmp_name']);
    finfo_close($finfo);

    $tiposPermitidos = ['image/jpeg', 'image/png', 'image/jpg', 'image/gif'];
    if (!in_array($mime, $tiposPermitidos)) {
        echo "Tipo de archivo no permitido. Solo se permiten imágenes JPEG, PNG y GIF.";
        exit;
    }

    $maxSize = 2 * 1024 * 1024; // 2MB
    if ($archivo['size'] > $maxSize) {
        echo "El archivo es demasiado grande. El tamaño máximo permitido es 2MB.";
        exit;   
    }
 
    $directorio = __DIR__ . '/uploads/';
    if (!is_dir($directorio)) {
        mkdir($directorio, 0755);
    }

    $nombre_limpio = preg_replace("/[^A-Z0-9._-]/i", "_", $archivo['name']);

    // 6. Evitar sobrescritura (añadir timestamp o id único)
    $nombre_final = uniqid() . '_' . $nombre_limpio;

    // 7. Mover el archivo subido
    $ruta_final = $directorio . '/' . $nombre_final;

    if (move_uploaded_file($archivo['tmp_name'], $ruta_final)) {
        echo "✅ Archivo subido correctamente como $nombre_final";
    } else {
        echo "❌ Error al mover el archivo.";
    }

} else {
    echo "No se ha enviado ningún archivo.";
}
?>