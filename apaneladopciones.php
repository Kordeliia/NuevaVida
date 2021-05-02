<?php
include("conexion.php");
include("validarSesion.php");
$query7 = "SELECT * FROM animales";
$resultado = mysqli_query($conexion, $query7);

?>
<!DOCTYPE html>
<html lang="es">
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
                            <a href="index_aauth.php">Inicio</a>
                            <a href="panelusuarios.php">Panel usuarios</a>
                            <a href="apaneladopciones.php">Panel adopciones</a>
                            <a href="subirprotectoras.php">Subir Protectora</a>
                            <a href="panelprotectoras.php">Panel Protectoras</a>
                        </nav>
                    </div>
                </div>
                <h1>Nueva Vida ¡te piden una segunda oportunidad!</h1>
                <p class="logregistro"><a href="logout.php">Desconexión</a></p>
            </div>
        </header>
        <h2> Anuncios registrados</h2>
        <section class="con sec centrado">
            <div class="adopciones">
            <?php if($rol == "Administrador"): ?>
                <?php while($animal = mysqli_fetch_assoc($resultado)): ?>
            <div class="adopcion">
                <div class="contentadopt">
                <br>
                <picture>
                    <img class="img2" src="<?php echo $animal['FOTO']; ?>" alt="anuncio">
                </picture>
                    <h3>NOMBRE: <?php echo $animal['NOMBRE']; ?></h3>
                    <p>RAZA: <?php echo $animal['RAZA']; ?></p>
                    <p>TELEFONO: <?php echo $animal['TELEFONO']; ?></p>
                    <p>EMAIL: <?php echo $animal['EMAIL']; ?></p>
                    <p><?php echo $animal['MENSAJE']; ?></p>
                   <h3><a href="https://www.google.com/maps/place/<?php echo $animal['DIRECCION']; ?>/" class="b-normal1" target="_blank">Ir a google Maps</a></h3>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </section>
        <br>
        <br>
        <footer class="pie sec">
            <p class="cp">Copyright: Laura Álvarez Muñoz - 2021 - Proyecto CESUR</p>
        </footer>
        <?php 
    mysqli_close($conexion);
    ?>
        <script src="src/js/app2.js"></script>
    </body>
</html>