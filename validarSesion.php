<?php
session_start();
$login=$_SESSION['login'];
if(!$login){
    //header('Location: index.php');
}
else{
    $idusuario= $_SESSION['idusuario'];
    $rol= $_SESSION['rol'];
    $nickname= $_SESSION['nickname'];
    $nombre= $_SESSION['nombre'];
    $apellidos= $_SESSION['apellidos'];
    $email= $_SESSION['email'];
    $password= $_SESSION['password'];
    $telefono= $_SESSION['telefono'];
    $direccion= $_SESSION['direccion'];
    $fotoperfil= $_SESSION['fotoperfil'];
}
?>