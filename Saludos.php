
<?php
$salu2 = [
    "japones" => "こんにちは！ようこそ！ (hola, bienvenido en japones)",
    "espanol" => "Hola! Bienvenudo!",
    "espana" => "Ostia, buenas! Bienvenido!",
    "ingles" => "Hello my frien! Welcome!",
    "coreano" => "안녕하세요! 환영합니다! (lo mismo que lo anterior pero en coreano)"
];

$mensaje = "";

if (isset($_POST["idioma"])) {

    $idioma = $_POST["idioma"];

    if (isset($salu2[$idioma])) {
        $mensaje = $salu2[$idioma];
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Saludos del mundo</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>

    <div class="contenedor">

        <h1>¡Saludos del mundo!</h1>

        <p>Selecciona un idioma para conocer su saludo.</p>

        <form method="POST">

            <select name="idioma" required>

                <option value="">Selecciona un idioma</option>

                <option value="japones">Japonés </option>

                <option value="espanol">Español </option>

                <option value="espana">Español de España </option>

                <option value="ingles">Inglés </option>

                <option value="coreano">Coreano </option>

            </select>

            <br><br>

            <button type="submit">Mostrar saludo</button>

        </form>

        <?php if ($mensaje != "") { ?>

            <h2 class="mensaje">
                <?php echo $mensaje; ?>
            </h2>

        <?php } ?>

        <br><br>

        <a href="inicio.php" class="boton">Regresar al inicio</a>

    </div>

</body>
</html>
