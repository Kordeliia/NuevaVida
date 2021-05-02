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
    echo "Conexion exitosa";
}
if (isset($_POST["unickname"], $_POST["unombre"], $_POST["urol"]) and $_POST["usemail"] !="" and $_POST["uspass"]!="" and $_POST["uadress"]!="" ){
    echo "Llegan los datos";
}
$unickname = $_POST["unickname"];
$unombre=$_POST["unombre"];
$urol=$_POST["urol"];
$uapellidos=$_POST["uapellidos"];
$ustelf=$_POST["ustelf"];
$usemail=$_POST["usemail"];
$uspass=$_POST["uspass"];
$uadress=$_POST["uadress"];
$usuariopassHash= password_hash($uspass, PASSWORD_BCRYPT);
$usFP="build/img/usuarios/$unickname/perfil.jpg";

$consultaID= "SELECT `NICKNAME` FROM `usuarios` WHERE NICKNAME=`$unickname`";
$consultaID= mysqli_query($conexion, $consultaID);
if(!$consultaID){
    
$query2="INSERT INTO `usuarios` (`IDUSUARIO`, `ROL`, `NICKNAME`, `NOMBRE`, `APELLIDOS`, `TELEFONO`, `EMAIL`, `PASSWORD`, `DIRECCION`, `FOTOPERFIL`)
 VALUES (NULL, '${urol}', '${unickname}', '${unombre}', '${uapellidos}', '${ustelf}', '${usemail}', '${uspass}', '${uadress}', '${usFP}');";
   
    $consultaID=mysqli_query($conexion, $query2);
    if($consultaID){
        mkdir("build\img\usuarios\\$unickname");
        copy("build\img\default.jpg", "build\img\usuarios\\$unickname\perfil.jpg");
        echo "Tu cuenta ha sido creada";
        echo "<br> <a href=index.php> Iniciar Sesión</a></div>";
    } else {
    echo "Error: " . $query2 . "<br>" .mysqli_error($conexion);
}
}
else{
    echo "El Nickname ya existe.";
    echo "<br> <a href='../index.php> Inténtelo de nuevo</a></div>";

}
mysqli_close($conexion);
?>