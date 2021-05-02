<?php
include("conexion.php");
include("validarSesion.php");
$query5 = "SELECT * FROM animales WHERE IDUSUARIO = '$idusuario' ";
$resultado = mysqli_query($conexion, $query5);
$user = mysqli_fetch_assoc($resultado);
$fotoperfill=$_SESSION['fotoperfil'];
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
        <h2> Tu perfil</h2>
        <section class="con sec centrado">
            <div class="adopciones">
                <div class="adopcion">
                    <br>
                    <div class="contentadopt">
                    <a href="aeditfotoperfil.php"><picture>
                    <img class="img2" src="<?php echo $fotoperfil; ?>" alt="PROFILE">
                    </picture></a>
                        <h3>Usuario <?php echo $nickname; ?></h3>
                        <p>IDUSUARIO:  <?php echo $idusuario; ?></p>
                        <p>NOMBRE:  <?php echo $nombre; ?></p>
                        <p>APELIDOS:  <?php echo $apellidos; ?></p>
                        <p> EMAIL:  <?php echo $email; ?></p>
                        <p> TELEFONO:  <?php echo $telefono; ?></p>
                        <p>DIRECCIÓN:  <?php echo $direccion; ?></p>
                    </div>
                </div>
            </div>
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