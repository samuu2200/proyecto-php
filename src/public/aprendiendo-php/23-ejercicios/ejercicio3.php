<?php
/* 
1. Hacer una interfaz de usuario con 2 inputs y 4 botones, uno para sumar,restar,dividir y multiplicar
*/

function operacion(?int $num1, ?int $num2, ?string $operador): string|float|int
{
    if ($num1 === null || $num2 === null) {
        return '⚠️ Ambos números son requeridos.';
    }

    return match ($operador) {
        'suma' => $num1 + $num2,
        'resta' => $num1 - $num2,
        'multiplica' => $num1 * $num2,
        'divide' => $num2 === 0
            ? '❌ No se puede dividir entre cero.'
            : $num1 / $num2,
        default => '❌ Operación no válida.'
    };
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $num1 = filter_input(INPUT_GET, 'num1', FILTER_VALIDATE_FLOAT) ?? null;
    $num2 = filter_input(INPUT_GET, 'num2', FILTER_VALIDATE_FLOAT) ?? null;
    $operador = filter_input(INPUT_GET, 'operador', FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?? null;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfaz de calculadora</title>
</head>

<body>
    <main>
        <form action="" method="GET">
            <input type="number" name="num1" value="<?= htmlspecialchars($num1 ?? '') ?>">
            <input type="number" name="num2" value="<?= htmlspecialchars($num2 ?? '') ?>">
            <?php
            $operadores = [
                'suma' => 'Suma',
                'resta' => 'Resta',
                'multiplica' => 'Multiplica',
                'divide' => 'Divide'
            ];
            ?>
            <select name="operador" id="">
            <?php foreach ($operadores as $valor => $texto) : ?>
                <option value="<?= $valor ?>" <?= $operador === $valor ? 'selected' : '' ?>>
                    <?= $texto ?>
                </option>
            <?php endforeach; ?>
            </select>
            <button type="submit">Calcular</button>
        </form>
    </main>
</body>

</html>