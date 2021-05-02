<?php 
   include("conexion.php");
    // consultar
    $query9 = "SELECT * FROM protectoras";

    // obtener resultado
    $resultado = mysqli_query($conexion, $query9);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Vida</title>
    <link rel="stylesheet" href="src/css/estilo.css">
</head>
<body>
    <header class="cabecera init">
        <div class="con ccabecera">
            <div class="bar">
                <div class="tlf-responsive">
                    <img src="build/img/barras.svg" alt="icono menu responsive">
                </div>
                <div class="dcha">
                    <img class="iconodm" src="build/img/logo.png">
                    <nav class="nav">
                        <a href="index.php">Inicio</a>
                        <a href="quienessomos.html">QuienesSomos</a>
                        <a href="adoptame_nauth.html">Adóptame</a>
                        <a href="protectoras.php">Protectoras</a>
                        <a href="contacto.html">Contacto</a>
                        <a href="referencias.html">Referencias</a>
                    </nav>
                </div>
            </div>
            <h1>Nueva Vida ¡te piden una segunda oportunidad!</h1>
            <p class="logregistro"><a href="registro.html">Regístrate</a> / <a href="login.html">Loguéate</a></p>
        </div>
    </header>
    <section class="con sec centrado">
        <h2>Nuestras protectoras.</h2>
        <div class="adopciones">
        <?php while($protectora = mysqli_fetch_assoc($resultado)): ?>
            <div class="adopcion">
                <div class="contentadopt">
                <br>
                <picture>
                    <img class="img2" src="build/img/protectoras/<?php echo $protectora['NOMBRE']; ?>/perfil.jpg" alt="protectora_logo">
                </picture>
                    <h3>NOMBRE:<?php echo $protectora['NOMBRE']; ?></h3>
                    <p>EMAIL: <?php echo $protectora['EMAIL']; ?></p>
                    <p>TELEFONO: <?php echo $protectora['TELEFONO']; ?></p>
                    <p><?php echo $protectora['TEXTO']; ?></p>
                   <h3><a href="https://www.google.com/maps/place/<?php echo $protectora['DIRECCION']; ?>/" class="b-normal1" target="_blank">Ir a google Maps</a></h3>
                   <br>
                   <h3><a href="<?php echo $protectora['ENLACEDONACION']; ?>" class="b-normal1" target="_blank">Ir a link de team</a></h3>
                   <br>
                   <h3><a href="<?php echo $protectora['WHISHLIST']; ?>" class="b-normal1" target="_blank">Ir a whishlist</a></h3>
                   <br>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        </section>
    <?php 
// Cerrar la conexión
mysqli_close($conexion);
?>

    <footer class="pie sec">
        <p class="cp">Copyright: Laura Álvarez Muñoz - 2021 - Proyecto CESUR</p>
    </footer>
    <script src="src/js/app2.js"></script>
</body>
</html>