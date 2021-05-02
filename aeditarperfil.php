<?php
include("conexion.php");
include("validarSesion.php");
$editiduser= $_POST['aidusuario'];
$query18 = "SELECT * FROM usuarios WHERE IDUSUARIO = '$editiduser' ";
$resultado3 = mysqli_query($conexion, $query18);
$user= mysqli_fetch_assoc($resultado3);
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
    <main class="con sec">
                <h2>Modifica como administrador los datos de un usuario</h2>
                <form class="formulario" name="formulario" method="post" action="aeditarprofile.php">
            <fieldset>
                <legend>Información usuario personal</legend>
                        <br>
                        <label for="aeditIDuser">Nickname:</label>
                <input type="text" value="<?php echo $user['IDUSUARIO']; ?>" readonly name="aeditIDuser" required>
                <br>
                <label for="aeditnickname">Nickname:</label>
                <input type="text" value="<?php echo $user['NICKNAME']; ?>" name="aeditnickname" required>
                <br>
                <label for="aeditnombre">Nombre:</label>
                <input type="text" value="<?php echo $user['NOMBRE']; ?>" name="aeditnombre" required>
                <br>
                <label for="aeditapellidos">Apellidos</label>
                <input type="text" value="<?php echo $user['APELLIDOS']; ?>" name="aeditapellidos">
                <br>
                <label for="aeditrol">Rol:</label>
                <select name="aeditrol" required>
                    <option value="<?php echo $user['ROL']; ?>" selected><?php echo $user['ROL']; ?></option>
                    <option value="Usuario">Usuario</option>
                    <option value="Protectora">Protectora</option>
                    <option value="Administrador">Administrador</option>
                </select>
                <br>
                <label for="aeditemail">E-mail:</label>
                <input type="email" value="<?php echo $user['EMAIL']; ?>" name="aeditemail" required>
                <br>
                <label for="aeditpass">Contraseña:</label>
                <input type="password" value="<?php echo $user['PASSWORD']; ?>" name="aeditpass"required>
                <br>
                <label for="aedittelf">Teléfono:</label>
                <input type="number" value="<?php echo $user['TELEFONO']; ?>" name="aedittelf">
                <br>
                <label for="aeditaddress">Dirección:</label>
                <textarea name="aeditaddress" required><?php echo $user['DIRECCION']; ?></textarea>
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