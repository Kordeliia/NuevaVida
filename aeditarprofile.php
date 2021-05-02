<?php
include("conexion.php");
include("validarSesion.php");

$aeditIDuser = $_POST["aeditIDuser"];
$aeditnickname = $_POST["aeditnickname"];
$aeditnombre=$_POST["aeditnombre"];
$aeditrol=$_POST["aeditrol"];
$aeditapellidos=$_POST["aeditapellidos"];
$aedittelf=$_POST["aedittelf"];
$aeditemail=$_POST["aeditemail"];
$aeditpass=$_POST["aeditpass"];
$aeditaddress=$_POST["aeditaddress"];
$ausuariopassHash= password_hash($aeditpass, PASSWORD_BCRYPT);
    
$query19="UPDATE `usuarios` SET ROL='${aeditrol}', NICKNAME='${aeditnickname}', NOMBRE='${aeditnombre}' , APELLIDOS='${aeditapellidos}', TELEFONO='${aedittelf}', 
EMAIL='${aeditemail}', PASSWORD='${aeditpass}', DIRECCION='${aeditaddress}' WHERE IDUSUARIO = $aeditIDuser";
$consultaID= mysqli_query($conexion, $query19);
    if($consultaID){
        echo "Se ha realizado de forma correcta la edicion";
         if($_SESSION['rol']=="Administrador"){
           header("location: index_aauth.php");
         }
         else{
         header("location: index_auth.php");
         }
    } else {
    echo "Error: " . $query19 . "<br>" .mysqli_error($conexion);
}
mysqli_close($conexion);
?>