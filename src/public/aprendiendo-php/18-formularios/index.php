<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios PHP y HTML</title>
</head>

<body>
    <h1>Formulario</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <p>
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" />
        </p>

        <p>
            <label for="apellido">Apellido: </label>
            <input type="text" name="apellido" pattern="[A-Z]+" />
        </p>

        <p>
            <label for="boton">Botón: </label>
            <input type="button" name="boton" value="Clickeame" />
        </p>

        <p>
            <label for="sexo">Sexo: </label>
            Hombre: <input type="checkbox" name="sexo" value="hombre" checked/>
            Mujer: <input type="checkbox" name="sexo" value="mujer" />
        </p>

        <p>
            <label for="color">Color: </label>
            <input type="color" name="color" />
        </p>

        <p>
            <label for="fecha">Fecha: </label>
            <input type="date" name="fecha" />
        </p>

        <p>
            <label for="correo">Correo: </label>
            <input type="email" name="correo" />
        </p>

        <p>
            <label for="archivo">Archivo: </label>
            <input type="file" name="archivo" multiple/>
        </p>

        <p>
            <label for="number">Numero: </label>
            <input type="number" name="number" />
        </p>

        <p>
            <label for="pass">Contraseña: </label>
            <input type="password" name="pass" />
        </p>

        <p>
            <label for="continente">Continente: </label>
            América Latina: <input type="radio" name="continente" value="America Latina" />
            Europa: <input type="radio" name="continente" value="Europa" />
            Asia: <input type="radio" name="continente" value="Asia" />
        </p>

        <p>
            <label for="web">Página web: </label>
            <input type="url" name="web" />
        </p>

        <input type="submit" value="Enviar" />
    </form>
</body>

</html>