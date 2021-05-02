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
        <?php if($rol == "Administrador"): ?>
            <main class="con sec">
                <h2>Sube una nueva protectora a nuestro repertorio de protectoras</h2>
                <form class="formulario" name="formulario" method="post" action="crearprotectora.php">
            <fieldset>
                <legend>Información protectora</legend>
                <label for="nombre">IDUSUARIO cuenta protectora:</label>
                <input type="number" placeholder="Escriba el idusuario de la protectora." name="pidusuario" required>
                <br>
                <label for="nombre">Nombre protectora:</label>
                <input type="text" placeholder="Escriba el nombre de la protectora." name="pnombre" required>
                <br>
                <label for="email">E-mail:</label>
                <input type="email" placeholder="Escriba el e-mail de la protectora." name="pemail" required>
                <br>
                <label for="telefono">Teléfono:</label>
                <input type="number" placeholder="Escriba el teléfono de la protectora." name="ptelf">
                <br>
                <label for="direccion">Dirección:</label>
                <textarea name="pdireccion" placeholder="Escriba la dirección de la protectora" required></textarea>
                <br>
                <label for="direccion">Mensaje protectora:</label>
                <textarea name="ptexto" placeholder="Escriba el objetivos, las metas, los valores de la protectora." required></textarea>
                <br>
                <label for="direccion">Link teams o donaciones:</label>
                <textarea name="plink1" placeholder="Escriba el link de teams de la protectora." required></textarea>
                <br>
                <label for="direccion">Link wishlist amazon protectora:</label>
                <textarea name="plink2" placeholder="Escriba el link de la whishlist de Amazon de la protectora." required></textarea>
                <br>
            </fieldset>
            <br>
            <input type="submit" value="Registrar protectora" class="b-normal1">
        </form>
    </main>
            <?php endif; ?>
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