
<?php
// Datos del alumno y de la actividad
$alumno = "Paula Salazar";
$tarea = "Proyecto de saludos, bienvenido";
$escuela = "CBTIS 217";
$fecha = "9 Noviembre del 2026";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <!-- Título de la página -->
    <title>Bienvenida</title>

    <!-- Conectar la hoja de estilos CSS -->
    <link rel="stylesheet" href="estilo.css">
</head>

<body>

    <!-- Contenedor principal del codigo -->
    <div class="contenedor">

        <!-- Mensaje de bienvenida -->
        <h1>¡Bienvenido!</h1>

        <!-- Imagen del logo de la escuela -->
        <img src="images/logo.jpg" alt="Logo de la escuela" class="logo">

        <!-- Muestra el nombre del alumno -->
        <p><strong>Alumno:</strong> <?php echo $alumno; ?></p>

        <!-- Muestra el nombre de la actividad -->
        <p><strong>Actividad:</strong> <?php echo $tarea; ?></p>

        <!-- Muestra el nombre de la escuela -->
        <p><strong>Escuela:</strong> <?php echo $escuela; ?></p>

        <!-- Muestra la fecha de realización -->
        <p><strong>Fecha:</strong> <?php echo $fecha; ?></p>

        <!-- Enlace para entrar a la página de saludos -->
        <a href="Saludos.php" class="boton">Saludos</a>

    </div>

</body>
</html>
