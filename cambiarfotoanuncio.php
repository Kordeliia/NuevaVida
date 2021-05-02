<?php
include("conexion.php");
include("validarSesion.php");
$nombrecin=$_SESSION['nombrea'];
$query14 = "SELECT 	FOTO FROM animales WHERE NOMBRE = '$nombrecin' ";
$resultado = mysqli_query($conexion, $query14);
$ubicacion="build/img/adopciones/$nombrecin/perfil1.jpg";
$archivo =$_FILES['archivo']['tmp_name'];
if(move_uploaded_file($archivo, $ubicacion)){
    $ubicacion2="build/img/adopciones/$nombrecin/perfil1.jpg";
    $query15="UPDATE `animales` SET FOTO='${ubicacion2}' WHERE NOMBRE = '$nombrecin'";
    $consultaID=mysqli_query($conexion, $query15);
    if($consultaID){
        copy("build\img\adopciones\\$nombrecin\perfil1.jpg", "build\img\adopciones\\$nombrecin\perfil.jpg");
        echo "Tu anuncio se ha editado con éxito. ";
        echo "<br> <a href=index_auth.php> Click aqui para volver a su perfil</a></div>";
    } else {
    echo "Error: " . $query15 . "<br>" .mysqli_error($conexion);
}

mysqli_close($conexion);
}
?>