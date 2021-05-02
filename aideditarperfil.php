<?php
include("conexion.php");
include("validarSesion.php");
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
        <main class="con sec">
        <h2>¡Edite un usuario de la base de datos!</h2>
        <form class="formulario" name="formulario" method="post" action="aeditarperfil.php">
                <fieldset>
                    <legend>Información usuario personal</legend>
                    <label for="aidusuario">IDUSUARIO:</label>
                        <input type="number" placeholder="Escriba la ID del usuario" name="aidusuario" required>
                </fieldset>
                <br>
            <input type="submit" value="Submit" class="b-normal1">
            </form>
    </main>
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