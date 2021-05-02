<?php
include("conexion.php");
include("validarSesion.php");
$ubicacion="build/img/usuarios/$nickname/perfil1.jpg";
$archivo =$_FILES['archivo']['tmp_name'];
if(move_uploaded_file($archivo, $ubicacion)){
    $ubicacion2="build/img/usuarios/$nickname/perfil1.jpg";
    $query16="UPDATE `usuarios` SET FOTOPERFIL='${ubicacion2}' WHERE NICKNAME = '$nickname'";
    $consultaID=mysqli_query($conexion, $query16);
    if($consultaID){
        copy("build\img\usuarios\\$nickname\perfil1.jpg", "build\img\usuarios\\$nickname\perfil.jpg");
        echo "Tu perfil se ha editado con éxito. ";
        echo "<br> <a href=index_auth.php> Click aqui para volver a su perfil</a></div>";
    } else {
    echo "Error: " . $query16 . "<br>" .mysqli_error($conexion);
}

mysqli_close($conexion);
}
?>