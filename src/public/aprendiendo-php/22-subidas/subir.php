<?php 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $archivo = $_FILES['archivo'] ?? null;

    if (!$archivo || $archivo['error'] !== UPLOAD_ERR_OK) {
        echo "Error al subir el archivo.";
        exit;
    }

    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $tipo = finfo_file($finfo, $archivo['tmp_name']);
    finfo_close($finfo);

    $tiposPermitidos = ['image/jpeg', 'image/png', 'image/gif'];
    if (!in_array($tipo, $tiposPermitidos)) {
        echo "Tipo de archivo no permitido.";
        exit;   
    }

    $tamanioMaximo = 2 * 1024 * 1024; // 2MB
    if ($archivo['size'] > $tamanioMaximo) {
        echo "El archivo es demasiado grande. El tamaño máximo es 2MB.";
        exit;
    }   

    $directiorioSubidas = __DIR__ . '/uploads/';
    if (!is_dir($directiorioSubidas)) {
        mkdir($directiorioSubidas, 0755, true);
    }

    $nombreArchivo = preg_match('/^[a-zA-Z0-9._-]+$/', $archivo['name']) ? $archivo['name'] : uniqid('file_', true);
    $rutaDestino = $directiorioSubidas . $nombreArchivo;    

    if (move_uploaded_file($archivo['tmp_name'], $rutaDestino)) {
        $successUrl = "index.php?upload=success&nombreArchivo=" . urlencode($nombreArchivo);
        header("Location: $successUrl");
        exit;
    } else {
        echo "Error al mover el archivo subido.";
    }
} else {
    echo "Método de solicitud no válido.";
}
?>