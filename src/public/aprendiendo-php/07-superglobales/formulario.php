<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario php</title>
</head>
<body>
    <h1>Formulario en php</h1>
    <form action="recibir.php" method="POST">
        <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre">
        </p>

        <p>
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos">            
        </p>    

        <input type="submit" value="Enviar datos">
    </form>
</body>
</html>
