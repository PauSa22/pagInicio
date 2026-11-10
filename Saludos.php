
<?php
// Arreglo que guarda los saludos de cada idioma
$salu2 = [
    "japones" => "こんにちは！ようこそ！ (hola, bienvenido en japones)",
    "espanol" => "Qué onda, bro! Bienvenudo!",
    "espana" => "Ostia, buenas, tio! Bienvenido!",
    "ingles" => "Hello my frien! Welcome!",
    "coreano" => "안녕하세요! 환영합니다! (añaseo, lo mismo que lo anterior pero en coreano)"
];

// Variable donde se guarda el saludo seleccionado
$mensaje = "";

// Comprueba si el usuario seleccionó un idioma
if (isset($_POST["idioma"])) {

    // Guarda el idioma seleccionado en una variable
    $idioma = $_POST["idioma"];

    // Comprueba que el idioma exista en el arreglo
    if (isset($salu2[$idioma])) {

        // Obtiene el saludo correspondiente al idioma
        $mensaje = $salu2[$idioma];
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <!-- Título de la página -->
    <title>Saludos del mundo</title>

    <!-- Conectar la hoja de estilos -->
    <link rel="stylesheet" href="estilo.css">
</head>

<body>

    <!-- Contenedor principal de la página -->
    <div class="contenedor">

        <!-- Título principal -->
        <h1>Saludos de partes del mundo!</h1>

        <p>Selecciona un idioma para conocer su saludo.</p>

        <!-- Formulario para seleccionar el idioma -->
        <form method="POST">

            <select name="idioma" required>

                <!-- Opciones de idiomas -->
                <option value="">Selecciona un idioma</option>
                <option value="japones">Japonés</option>
                <option value="espanol">Español</option>
                <option value="espana">Español de España</option>
                <option value="ingles">Inglés</option>
                <option value="coreano">Coreano</option>

            </select>

            <br><br>

            <!-- Botón para mostrar el saludo -->
            <button type="submit">Mostrar saludo</button>

        </form>

        <!-- Comprueba si existe un saludo para mostrar -->
        <?php if ($mensaje != "") { ?>

            <!-- Muestra el saludo seleccionado -->
            <h2 class="mensaje">
                <?php echo $mensaje; ?>
            </h2>

        <?php } ?>

        <br><br>

        <!-- Enlace para regresar a la página de inicio -->
        <a href="inicio.php" class="boton">Regresar al inicio</a>

    </div>

</body>
</html>
