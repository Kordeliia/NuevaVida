<?php
include("conexion.php");
include("validarSesion.php");

$editnickname = $_POST["editnickname"];
$editnombre=$_POST["editnombre"];
$editrol=$_POST["editrol"];
$editapellidos=$_POST["editapellidos"];
$edittelf=$_POST["edittelf"];
$editemail=$_POST["editemail"];
$editpass=$_POST["editpass"];
$editaddress=$_POST["editaddress"];
$usuariopassHash= password_hash($editpass, PASSWORD_BCRYPT);
    
$query12="UPDATE `usuarios` SET ROL='${editrol}', NICKNAME='${editnickname}', NOMBRE='${editnombre}' , APELLIDOS='${editapellidos}', TELEFONO='${edittelf}', 
EMAIL='${editemail}', PASSWORD='${editpass}', DIRECCION='${editaddress}' WHERE IDUSUARIO =$idusuario";
   
    $consultaID= mysqli_query($conexion, $query12);
    if($consultaID){
        echo "Tu cuenta ha sido correctamente modificada";
         // El usuario esta autenticado
         $_SESSION['rol'] = $editrol;
         $_SESSION['nickname'] = $editnickname;
         $_SESSION['nombre'] = $editnombre;
         $_SESSION['apellidos'] = $editapellidos;
         $_SESSION['email'] = $editemail;
         $_SESSION['password'] = $editpass;
         $_SESSION['telefono'] = $edittelf;
         $_SESSION['direccion'] = $editaddress;
         if($_SESSION['rol']=="Administrador"){
           header("location: index_aauth.php");
         }
         else{
         header("location: index_auth.php");
         }
    } else {
    echo "Error: " . $query12 . "<br>" .mysqli_error($conexion);
}

mysqli_close($conexion);
?>