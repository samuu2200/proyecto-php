<?php 

/* 
Cookie: Es un fichero que se almace en el ordenador del usuario que visita la web, con el fin de recordar datos o rastrear el comportamiento del mismo en la web.
*/

// Crear cookie
//setcookie('nombre', 'valor que solo puede ser texto', caducidad, ruta, dominio );

// Cookie básica
setcookie('micookie', 'valor de mi galleta');

// Cookie con expiración
setcookie('unyear', 'valor de mi cookie de 365 días', time() + (60 * 60 * 24 * 365));

?>

<a href="ver_cookies.php">Ver cookies</a>