<?php
include("conexion.php");
include("validarSesion.php");
$query5 = "SELECT * FROM animales WHERE IDUSUARIO = '$idusuario' ";
$resultado = mysqli_query($conexion, $query5);
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
    <h2>¡Edite la foto del perfil!</h2>
        <form action="acambiarfotoprofile.php" method="post" enctype="multipart/form-data">
        Cambiar la foto del perfil
        <input name="archivo" type="file" accept=".jpg, .jpeg, .png" required/>
            <input type="submit" value="Subir" value="Subir"/>
    </main>
        <footer class="pie sec">
            <p class="cp">Copyright: Laura Álvarez Muñoz - 2021 - Proyecto CESUR</p>
        </footer>
        <?php 
    mysqli_close($conexion);
    ?>
        <script src="src/js/app2.js"></script>
    </body>
</html>