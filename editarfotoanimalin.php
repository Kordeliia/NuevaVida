<?php
include("conexion.php");
include("validarSesion.php");
$nombrecin=$_SESSION['nombrea'];
$query14 = "SELECT 	FOTO FROM animales WHERE NOMBRE = '$nombrecin' ";
$resultado = mysqli_query($conexion, $query14);
?>
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
                            <a href="index_auth.php">Inicio</a>
                            <a href="subiranuncio.php">Subir anuncio</a>
                            <a href="adoptame_auth.php">Adóptame</a>
                            <a href="protectoras.php">Protectoras</a>
                            <a href="contacto.php">Contacto</a>
                        </nav>
                    </div>
                </div>
                <h1>Nueva Vida ¡te piden una segunda oportunidad!</h1>
                <p class="logregistro"><a href="logout.php">Desconexión</a></p>
            </div>
        </header>

    <main class="con sec">
    <h2>¡Edite la foto del anuncio!</h2>
        <form action="cambiarfotoanuncio.php" method="post" enctype="multipart/form-data">
        Cambiar foto del anuncio:
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