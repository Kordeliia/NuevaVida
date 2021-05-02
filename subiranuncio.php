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
            <h2>¡Registre su anuncio en nuestra base de datos!</h2>
            <form class="formulario" name="formulario" method="post" action="crearadopcion.php">
                <fieldset>
                    <legend>Información usuario personal</legend>
                    <label for="nombre">Nombre:</label>
                        <input type="text"  maxlength="20" placeholder="Escriba el nombre del animal." name="anombre" required>
                        <br>
                    <label for="aidusuario">IDUSUARIO:</label>
                        <input type="number" value="<?php echo $idusuario; ?>" readonly name="aidusuario" required>
                        <br>
                    <label for="atipoanimal">Animal:</label>
                        <select name="atipoanimal" required>
                            <option value="" disabled selected>-- Seleccione --</option>
                            <option value="Gato">Gato</option>
                            <option value="Perro">Perro</option>
                        </select>
                        <br>
                    <label for="raza">Raza</label>
                        <input type="text"  maxlength="20" placeholder="Escriba la raza del animal." name="araza">
                        <br>
                        <label for="atipoanimal">Estado:</label>
                        <select name="aestado" required>
                            <option value="" disabled selected>-- Seleccione --</option>
                            <option value="En recuperacion">En recuperación</option>
                            <option value="Necesita casa de acogida">Necesita casa de acogida</option>
                            <option value="En adopción">En adopción</option>
                            <option value="FINAL FELIZ">FINAL FELIZ</option>
                            <option value="Arcoiris">Arcoiris</option>
                        </select>
                        <br>

                    <label for="direccion">Dirección:</label>
                        <textarea name="aadress"  maxlength="100" placeholder="Escriba la dirección donde se encuentre el animal. Calle, número, código postal " required></textarea>
                        <br>
                    <label for="email">E-mail:</label>
                        <input type="email" pl maxlength="50" placeholder="Escriba su e-mail." name="aemail" required>
                        <br>
                    <label for="telefono">Teléfono:</label>
                        <input type="number"  maxlength="11" placeholder="Escriba su número de teléfono." name="atelf">
                        <br>
                    <label for="mensaje">Mensaje:</label>
                        <textarea type="text"  maxlength="2000" placeholder="Mensaje o texto de adopción. Cuéntanos como es el animal." name="amensaje" required></textarea>
                        <br>
                </fieldset>
                <br>
            <input type="submit" value="Anunciar" class="b-normal1">
            </form>
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