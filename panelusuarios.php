<?php
include("conexion.php");
include("validarSesion.php");
$query6 = "SELECT * FROM usuarios";
$resultado5 = mysqli_query($conexion, $query6);

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
        <h2> Usuarios registrados</h2>
        <section class="con sec centrado">
            <div class="adopciones">
            <?php if($rol == "Administrador"): ?>
                <?php  while($user = mysqli_fetch_assoc($resultado5)):?>
                <div class="adopcion">
                    <br>
                    <img class="img2" src="<?php echo $user['FOTOPERFIL'];?>" alt="imagen de usuario">
                    <div class="contentadopt">
                        <h3>Usuario <?php echo $user['NICKNAME']; ?></h3>
                        <p>IDUSUARIO:  <?php echo $user['IDUSUARIO']; ?></p>
                        <p>NOMBRE:  <?php echo $user['NOMBRE']; ?></p>
                        <p>APELIDOS:  <?php echo $user['APELLIDOS']; ?></p>
                        <p> EMAIL:  <?php echo $user['EMAIL']; ?></p>
                        <p> TELEFONO:  <?php echo $user['TELEFONO']; ?></p>
                        <p>DIRECCIÓN:  <?php echo $user['DIRECCION']; ?></p>
                        <br>
                        <h3><button> <a href="aideditarperfil.php">Editar datos</a></button></h3>
                        <br>
                    </div>
                </div>
            </div>
            <br>
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