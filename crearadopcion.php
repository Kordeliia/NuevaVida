<?php
include("conexion.php");
$aidusuario=$_POST["aidusuario"];
$anombre=$_POST["anombre"];
$atipoanimal=$_POST["atipoanimal"];
$araza=$_POST["araza"];
$aestado=$_POST["aestado"];
$adireccion=$_POST["aadress"];
$adireccion2= str_replace(" ", "+", $adireccion);
$afoto="build/img/adopciones/$anombre/perfil.jpg";
$amensaje=$_POST["amensaje"];
$atelf=$_POST["atelf"];
$aemail=$_POST["aemail"];
$consultaID= "SELECT `NOMBRE` FROM `animales` WHERE NOMBRE=`$anombre`";
$consultaID= mysqli_query($conexion, $consultaID);
if($consultaID){
echo "Este nombre ya existe en nuestra base de datos. Inténtelo de nuevo";
echo "<br> <a href='subiranuncio.php> Inténtelo de nuevo</a></div>";
}
if(!$consultaID){
$query3="INSERT INTO `animales` (`IDANIMAL`, `IDUSUARIO`, `NOMBRE`, `TIPOANIMAL`, `RAZA`,
 `ESTADO`,`DIRECCION`, `FOTO`, `MENSAJE`, `TELEFONO`, `EMAIL`) VALUES (NULL, '${aidusuario}', 
 '${anombre}', '${atipoanimal}', '${araza}', '${aestado}', '${adireccion2}', '${afoto}', '${amensaje}',
  '${atelf}', '${aemail}');";
    $consultaID=mysqli_query($conexion, $query3);
    if($consultaID){
        mkdir("build\img\adopciones\\$anombre");
        if($atipoanimal=="Perro"){
        copy("build\img\pdefault.jpg", "build\img\adopciones\\$anombre\perfil.jpg");
        }
        if($atipoanimal=="Gato"){
            copy("build\img\gdefault.jpg", "build\img\adopciones\\$anombre\perfil.jpg");
            }
        echo "Tu anuncio se ha subido con éxito";
        echo "<br> <a href=adoptame_auth.php> Click aqui para ver adopciones</a></div>";
    } else {
    echo "Error: " . $query3 . "<br>" .mysqli_error($conexion);
}
}
else{
    echo "El nombre de este animal ya existe.";
    echo "<br> <a href='index.html> Inténtelo de nuevo</a></div>";

}
mysqli_close($conexion);
?>