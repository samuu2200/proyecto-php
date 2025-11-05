<?php
/* 
1. Debe ser una función
2. Validar un email con filter_var
3. Recoger una variable por GET y validarla
4. Mostrar el resultado
*/

function validateEmail(?string $email): bool
{
    if (empty($email)) {
        return false;
    }

    return (bool) filter_var($email, FILTER_VALIDATE_EMAIL);
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $email = $_GET['email'] ?? null;

    $mensaje = validateEmail($email)
        ? "El email $email es válido"
        : "El email $email es inválido";
} else {
    $mensaje = 'Vacío';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validando email</title>
</head>

<body>

    <form action="" method="GET">
        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
        <input type="submit" value="Validar">
    </form>

    <?php if ($mensaje): ?>
        <h2> <?= htmlspecialchars($mensaje) ?> </h2>
    <?php endif; ?>
</body>

</html>