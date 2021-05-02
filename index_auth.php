<?php
include("conexion.php");
include("validarSesion.php");
$query5 = "SELECT * FROM animales WHERE IDUSUARIO = '$idusuario' ";
$resultado = mysqli_query($conexion, $query5);
$q17="SELECT * FROM usuarios WHERE IDUSUARIO = '$idusuario' ";
$resultado2=mysqlI_query($conexion, $q17);
$user=mysqli_fetch_assoc($resultado2);
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
        <h2> Tu perfil</h2>
        <section class="con sec centrado">
            <div class="adopciones">
                <div class="adopcion">
                    <br>
                    <a href="editarfotoperfil.php"><picture>
                    <img class="img2" src="<?php echo $user['FOTOPERFIL']; ?>" alt="PROFILE">
                </picture></a>
                    <div class="contentadopt">
                        <h3>Usuario <?php echo $nickname; ?></h3>
                        <p>IDUSUARIO:  <?php echo $idusuario; ?></p>
                        <p>NOMBRE:  <?php echo $nombre; ?></p>
                        <p>APELIDOS:  <?php echo $apellidos; ?></p>
                        <p> EMAIL:  <?php echo $email; ?></p>
                        <p> TELEFONO:  <?php echo $telefono; ?></p>
                        <p>DIRECCIÓN:  <?php echo $direccion; ?></p>
                        <br>
                        <h3><button> <a href="editarperfil.php">Editar datos</a></button></h3>
                        <br>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <br>
        <h2>Tus anuncios: </h2>
        <section class="con sec centrado">
          <div class="adopciones">
              <?php while($animal = mysqli_fetch_assoc($resultado)): ?>
                <?php $_SESSION['nombrea']=$animal['NOMBRE']; ?>
            <div class="adopcion"><div class="contentadopt">
            <br>
            <a href="editarfotoanimalin.php"><picture>
                    <img class="img2" src="<?php echo $animal['FOTO']; ?>" alt="anuncio">
                </picture></a>
                    <h3>NOMBRE: <?php echo $animal['NOMBRE']; ?></h3>
                    <p>RAZA: <?php echo $animal['RAZA']; ?></p>
                    <p>DIRECCION: <?php echo $animal['DIRECCION']; ?></p>
                    <p>TELEFONO: <?php echo $animal['TELEFONO']; ?></p>
                    <p>EMAIL: <?php echo $animal['EMAIL']; ?></p>
                    <p><?php echo $animal['MENSAJE']; ?></p>
                    <br>
                   <h3><button><a href="https://www.google.com/maps/place/<?php echo $animal['DIRECCION']; ?>/">Ir a google Maps</a></button></h3>
                   
                   <br>
                   <h3><button><a href="editaranunciopropio.php">Editar anuncio</a></button></h3>
                   <br>
                </div>
            </div>
                   <?php endwhile; ?>
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