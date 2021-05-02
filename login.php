<?php
include("conexion.php");
session_start();
$_SESSION['login'] = false;
$usemail=$_POST["usemail"];
$uspass=$_POST["uspass"];
$usuariopassHash= password_hash($uspass, PASSWORD_BCRYPT);

  $query = "SELECT * FROM usuarios WHERE EMAIL = '${usemail}' ";
  $resultado = mysqli_query($conexion, $query);
  if( $resultado->num_rows ) {
      $usuario = mysqli_fetch_assoc($resultado);
      //echo json_encode($usuario);
     $auth =false;
    if ($uspass == $usuario['PASSWORD'])
    {
          $auth =true;
     } 
    if($auth) {
           // El usuario esta autenticado
           $_SESSION['login'] = true;
           $_SESSION['idusuario'] = $usuario['IDUSUARIO'];
           $_SESSION['rol'] = $usuario['ROL'];
           $_SESSION['nickname'] = $usuario['NICKNAME'];
           $_SESSION['nombre'] = $usuario['NOMBRE'];
           $_SESSION['apellidos'] = $usuario['APELLIDOS'];
           $_SESSION['email'] = $usuario['EMAIL'];
           $_SESSION['password'] = $usuario['PASSWORD'];
           $_SESSION['telefono'] = $usuario['TELEFONO'];
           $_SESSION['direccion'] = $usuario['DIRECCION'];
           $_SESSION['fotoperfil'] = $usuario['FOTOPERFIL'];
           if($_SESSION['rol']=="Administrador"){
             header("location: index_aauth.php");
           }
           else{
           header("location: index_auth.php");
           }
  } else {
      $errores[] = 'El password es incorrecto';
      header("location: login.html");
  }
}
else {
  $errores[] = "El Usuario no existe";
  header("location: login.html");
}  
mysqli_close($conexion);
?>