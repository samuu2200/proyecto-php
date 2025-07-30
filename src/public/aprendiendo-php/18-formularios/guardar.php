<?php


$titulo = filter_input(INPUT_GET, 'titulo', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$descripcion = filter_input(INPUT_GET, 'descripcion', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$errors = [];

if ($titulo !== false && $descripcion !== false) {
    $titulo = trim(strip_tags($titulo));
    $descripcion = trim(strip_tags($descripcion));

    if ($titulo === '') {
        $errors[] = "El título no puede estar vacío";
    } elseif (!preg_match('/^[a-zA-Z\s]+$/', $titulo)) {
        $errors[] = "El título solo puede tener letras y espacios";
    }

    if ($descripcion === '') {
        $errors[] = "La descripción no puede estar vacía";
    } elseif (!preg_match('/^[a-zA-Z\s]+$/', $descripcion)) {
        $errors[] = "La descripción solo puede tener letras y espacios";
    }

    if (empty($errors)) {
        echo '<p>' . htmlspecialchars($titulo, ENT_QUOTES, 'UTF-8') . '</p>';
        echo '<p>' . htmlspecialchars($descripcion, ENT_QUOTES, 'UTF-8') . '</p>';
    } else {
        foreach ($errors as $error) {
            echo htmlspecialchars($error);
        }
    }
} 
