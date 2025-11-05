<?php 
/* 
Crear una sesion que aumente su valor en uno y que disminuya en uno en funcion al parametro getCounter esta a 1 o 0
*/

session_start();
if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 0;
}

if (isset($_GET['getCounter'])) {
    if ($_GET['getCounter'] == 1) {
        $_SESSION['counter']++;
    }
    if ($_GET['getCounter'] == 0) {
        $_SESSION['counter']--;
    }
}
echo "El valor del contador es: " . $_SESSION['counter'];
--


?>

<a href="ejercicio1.php?getCounter=1">Aumentar el valor</a>
<a href="ejercicio1.php?getCounter=0">Disminuir el valor</a>