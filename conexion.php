<?php
$servidor="localhost";
$bd="bbddnuevavida";
$user="root";
$pass="";
$conexion = mysqli_connect($servidor, $user, $pass, $bd);
if(!$conexion){
echo "Algo ha ocurrido y se ha producido un error";
die("Connection failed: " .mysqli_connect_error());
}else{
}
?>