<?php
// Ejemplo de variables en PHP

// String: saludo inicial
$greeting = "Hello, World!";

// String: nombre del curso
$course = "Curso Profesional de PHP";

// Float: precio del curso
$price = 199.99;

// String (fecha): fecha de publicación del curso
$publish_date = "2023-10-01";
// Integer: cantidad de estudiantes inscritos
$students = 150;

// Boolean: indica si el curso está disponible
$is_available = true;

// Array: lista de temas del curso
$topics = ["Variables", "Funciones", "Arreglos", "POO"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Usar htmlspecialchars para evitar problemas de seguridad al mostrar variables en HTML -->
    <title><?= htmlspecialchars($course) ?></title>
</head>
<body>
<!-- Buenas prácticas
Usar htmlspecialchars() es importante para evitar problemas de seguridad cuando muestras texto en HTML.
Usar funciones como number_format() y date() ayuda a mostrar los datos de forma más clara.    -->
<!-- Explicación: Se imprime un saludo y el nombre del curso -->
    <h1><?= htmlspecialchars($greeting) ?> Bienvenido al <?= htmlspecialchars($course) ?></h1>  
    <div class="course-details">
        <h2>Detalles del Curso</h2>
        <!-- Mostrar el nombre del curso -->
        <p>Curso: <?= htmlspecialchars($course) ?></p>
        <!-- Mostrar el precio con dos decimales -->
        <p>Precio: $<?= number_format($price, 2) ?></p>
        <!-- Mostrar la fecha en formato día-mes-año -->
       <p>Estudiantes inscritos: <?= $students ?></p>
        <p>Disponible: <?= $is_available ? "Sí" : "No" ?></p>
        <p>Temas principales:</p>
        <ul>
            <?php foreach ($topics as $topic): ?>
                <li><?= htmlspecialchars($topic) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>