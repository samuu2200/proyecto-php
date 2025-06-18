<?php 
// FOR
/* for (inicializar, condicion, incremento) {
    // Bloque de instrucciones    
} */

$resultado = 0;
for ($i = 0; $i <= 100; $i++) {
    $resultado += $i;
    echo "<p>$resultado</p>";
}
echo "El resultado es: $resultado<br>";

?>