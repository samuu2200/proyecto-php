<?php 

$rutaLog = __DIR__ . "/logs/log.txt";

if (!is_dir(__DIR__ . "/logs")) {
    mkdir(__DIR__ . "/logs", 0755, true);
}

// Obtener la IP del usuario
$ip = $_SERVER['REMOTE_ADDR'] ?? 'IP desconocida';

// Fecha
$fecha = date("Y-m-d H:i:s");

$mensaje = "[$fecha] - $ip - Acceso al sistema" . PHP_EOL;

$resultado = file_put_contents($rutaLog, $mensaje, FILE_APPEND | LOCK_EX);
if ($resultado === false) {
    die("Error al escribir en el archivo de log");
}

$contenido = file_get_contents($rutaLog);
if ($contenido === false) {
    die("Error al leer el archivo de log.");
}

echo "<h3>Historial de accesos:</h3>";
echo "<pre>" . htmlspecialchars($contenido) . "</pre>";


?>