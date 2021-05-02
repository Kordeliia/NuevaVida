<?php 
   include("conexion.php");
   include("validarSesion.php");
    // consultar
    $query4 = "SELECT * FROM animales";

    // obtener resultado
    $rconsulta = mysqli_query($conexion, $query4);
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
    <section class="con sec centrado">
        <h2>Animales disponibles para adoptar.</h2>
        <div class="adopciones">
        <?php while($animal = mysqli_fetch_assoc($rconsulta)): ?>
            <div class="adopcion">
                <div class="contentadopt">
                <br>
                <picture>
                    <img class="img2" src="<?php echo $animal['FOTO']; ?>" alt="Adopcion">
                </picture>
                    <h3>NOMBRE: <?php echo $animal['NOMBRE']; ?></h3>
                    <p>RAZA: <?php echo $animal['RAZA']; ?></p>
                    <p>TELEFONO: <?php echo $animal['TELEFONO']; ?></p>
                    <p>EMAIL: <?php echo $animal['EMAIL']; ?></p>
                    <p><?php echo $animal['MENSAJE']; ?></p>
                    <br>
                   <h3><button><a href="https://www.google.com/maps/place/<?php echo $animal['DIRECCION']; ?>/" target="_blank">Ir a google Maps</a></button></h3>
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