<?php
include("conexion.php");
include("validarSesion.php");
$query11 = "SELECT * FROM usuarios WHERE IDUSUARIO = '$idusuario' ";
$resultado = mysqli_query($conexion, $query11);
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
    <main class="con sec">
                <h2>¡Regístrate en nuestra base de datos y crea tu nombre de usuario!</h2>
                <form class="formulario" name="formulario" method="post" action="editarprofile.php">
            <fieldset>
                <legend>Información usuario personal</legend>
                <label for="aidusuario">IDUSUARIO:</label>
                        <input type="number" value="<?php echo $idusuario; ?>" readonly name="editidusuario" required>
                        <br>
                <label for="nickname">Nickname:</label>
                <input type="text" value="<?php echo $nickname; ?>" name="editnickname" required>
                <br>
                <label for="nombre">Nombre:</label>
                <input type="text" value="<?php echo $nombre; ?>" name="editnombre" required>
                <br>
                <label for="apellidos">Apellidos</label>
                <input type="text" value="<?php echo $apellidos; ?>" name="editapellidos">
                <br>
                <label for="urol">Rol:</label>
                <select name="editrol" required>
                    <option value="" disabled selected><?php echo $rol; ?></option>
                    <option value="Usuario">Usuario</option>
                    <option value="Protectora">Protectora</option>
                </select>
                <br>
                <label for="email">E-mail:</label>
                <input type="email" value="<?php echo $email; ?>" name="editemail" required>
                <br>
                <label for="contraseña">Contraseña:</label>
                <input type="password" value="<?php echo $password; ?>" name="editpass"required>
                <br>
                <label for="telefono">Teléfono:</label>
                <input type="number" value="<?php echo $telefono; ?>" name="edittelf">
                <br>
                <label for="direccion">Dirección:</label>
                <textarea name="editaddress" value="<?php echo $direccion; ?>" required></textarea>
                <br>
            </fieldset>
            <br>
            <input type="submit" value="Modificar" class="b-normal1">
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