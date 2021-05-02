<?php
include("conexion.php");
include("validarSesion.php");
$nombrea=$_SESSION['nombrea'];
$query5= "SELECT * FROM animales WHERE NOMBRE = '$nombrea'";
$resultado = mysqli_query($conexion, $query5);
$animal = mysqli_fetch_assoc($resultado)
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
            <form class="formulario" name="formulario" method="post" action="editardopcion.php">
                <fieldset>
                    <legend>Información usuario personal</legend>
                    <label for="nombre">Nombre:</label>
                        <input type="text"  maxlength="20" value="<?php echo $animal['NOMBRE']; ?>" name="editanombre" required>
                        <br>
                    <label for="editatipoanimal">Animal:</label>
                        <select name="editatipoanimal" required>
                            <option value="<?php echo $animal['TIPOANIMAL']; ?>" disabled selected> <?php echo $animal['TIPOANIMAL']; ?></option>
                            <option value="Gato">Gato</option>
                            <option value="Perro">Perro</option>
                        </select>
                        <br>
                    <label for="esditaraza">Raza</label>
                        <input type="text"  maxlength="20" value="<?php echo $animal['RAZA']; ?>" name="editaraza">
                        <br>
                        <label for="editaestado">Estado:</label>
                        <select name="editaestado" required>
                            <option value="<?php echo $animal['ESTADO']; ?>" disabled selected><?php echo $animal['ESTADO']; ?></option>
                            <option value="En recuperacion">En recuperación</option>
                            <option value="Necesita casa de acogida">Necesita casa de acogida</option>
                            <option value="En adopción">En adopción</option>
                            <option value="FINAL FELIZ">FINAL FELIZ</option>
                            <option value="Arcoiris">Arcoiris</option>
                        </select>
                        <br>

                    <label for="editaadress">Dirección:</label>
                        <textarea name="editaadress"  maxlength="100" value="<?php echo $animal['DIRECCION']; ?>" required></textarea>
                        <br>
                    <label for="editaemail">E-mail:</label>
                        <input type="email" pl maxlength="50" value="<?php echo $animal['EMAIL']; ?>" name="editaemail" required>
                        <br>
                    <label for="editatelf">Teléfono:</label>
                        <input type="number"  maxlength="11" value="<?php echo $animal['TELEFONO']; ?>" name="editatelf">
                        <br>
                    <label for="editamensaje">Mensaje:</label>
                        <textarea type="text"  maxlength="2000" value="<?php echo $animal['MENSAJE']; ?>" name="editamensaje" required></textarea>
                        <br>
                </fieldset>
                <br>
            <input type="submit" value="Editar" class="b-normal1">
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