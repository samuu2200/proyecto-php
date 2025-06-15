<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprimir con php - Master en php</title>
</head>
<body>
    <h1>Master en PHP - <?php echo 'jajajaja'; ?> samu</h1>

    <?= "Bienvenido al curos más grande de PHP" ?>

    <?php 
        // Titular de la sección
        echo "<h3>Listado de videojuegos:</h3>";

        /*
            Esta es una lista 
            de videojuegos
        */
        
        echo "<ul>"
            . "<li>GTA</li>"
            . "<li>Fifa</li>"
            . "<li>Mario bros</li>"
            . "</ul>";

        //echo "<br>HOLA HOLA</br>";

        // Parrafo explicativo
        echo '<p>Esta es toda ' . ' - ' . ' lista de juegos</p>';
    ?>

</body>
</html>

