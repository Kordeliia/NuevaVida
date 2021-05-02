<?php
include("conexion.php");
$query5 = "SELECT * FROM animales  LIMIT 2";
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
                            <a href="index.php">Inicio</a>
                            <a href="quienessomos.html">QuienesSomos</a>
                            <a href="adoptame_nauth.php">Adóptame</a>
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
        <section class="sec con">
            <h2>NuevaVida</h2>
            <div class="contenedor-adopciones">
                <div class="icono">
                    <picture>
                        <img class="imagen_adopcion" src="build/img/perro.svg" alt="Nueva Vida amor animal">
                    </picture>
                    <div class="contenido-adopcion">
                        <p>NuevaVida ha surgido como un proyecto para la finalización del FP CESUR (DAM). Este proyecto, se basa en la creacion y desarrollo de una página web para la adopción de animales. Para desarrollar esta página web se ha dado uso de diversos materiales que se podrán conocer desde el enlace referencias. No se trata de un proyecto real, sino, que se trata de una simulación de un proyecto. La autoría de esta página web pertenece a la alumna Laura Álvarez Muñoz. </p>
                    </div>
                </div>
                <div class="icono">
                    <picture>
                        <img class="imagen_adopcion" src="build/img/perro2.svg" alt="Nueva Vida amor animal">
                    </picture>
                    <div class="contenido-adopcion">
                        <p>Lo que se desea con este proyecto es desarrollar una página donde los usuarios pudieran colgar carteles para dar en adopción a sus compañeros (aquí no fustigamos a los usuarios que por cambios en su vida deciden darle otra oportunidad a sus compañeros, conocemos el dolor que ello provoca). Con este proyecto lo que deseamos es fomentar el NO abandono de los animales. </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="con sec">
<h2>Animales disponibles para adoptar.</h2>
<div class="adopciones">
<div class="contenedor-adopciones">
<?php while($animal = mysqli_fetch_assoc($resultado)): ?>
    <div class="adopcion">
        <div class="contentadopt">
        <br>
        <picture>
            <img class="img2" src="build/img/adopciones/<?php echo $animal['NOMBRE']; ?>/perfil.jpg" alt="anuncio">
        </picture>
            <h3>NOMBRE: <?php echo $animal['NOMBRE']; ?></h3>
            <p>RAZA: <?php echo $animal['RAZA']; ?></p>
            <p><?php echo $animal['MENSAJE']; ?></p>
           <h3><a href="registro.html" class="b-normal1">Ver más datos</a></h3>
        </div>
    </div>
    <?php endwhile; ?>
</div>
</div>
</section>
        <div class="con sec si1">
            <section class="blog">
                <h3>Protectoras</h3>
                <article class="protect2">
                    <div class="imagen">
                         <picture>
                            <source srcset="build/img/blog1.webp" type="image/webp">
                            <source srcset="build/img/blog1.jpg" type="image/jpeg">
                            <img loading="lazy" src="build/img/blog1.jpg" alt="protectora1">
                        </picture>
                    </div>
                    <div class="protectorat">
                        <h4>Protectora uno.</h4>
                        <a href="entrada.html"><p>Ejemplo de página de protectora.</p></a>
                    </div>
                </article>
                <article class="protect2">
                    <div class="imagen">
                        <picture>
                            <source srcset="build/img/blog2.webp" type="image/webp">
                            <source srcset="build/img/blog2.jpg" type="image/jpeg">
                            <img loading="lazy" src="build/img/blog2.jpg" alt="protectora2">
                        </picture>
                        </div>
                    <div class="protectorat">
                        <h4>Protectora 2.</h4>
                        <a href="entrada.html"><p>Ejemplo de página de protectora.</p></a>
                    </div>
                </article>
            </section>
        </div>
        <br>
        <br>
        <footer class="pie sec">
            <p class="cp">Copyright: Laura Álvarez Muñoz - 2021 - Proyecto CESUR</p>
        </footer>
        <script src="src/js/app2.js"></script>
    </body>
    
</html>