<?php
include("conexion.php");
$pidusuario=$_POST["pidusuario"];
$pnombre=$_POST["pnombre"];
$ptelf=$_POST["ptelf"];
$pemail=$_POST["pemail"];
$pdireccion=$_POST["pdireccion"];
$ptexto=$_POST["ptexto"];
$plink1=$_POST["plink1"];
$plink2=$_POST["plink2"];
$pdireccion2= str_replace(" ", "+", $pdireccion);
$pfoto="build/img/protectoras/$pnombre/perfil.jpg";

$q10= "SELECT `NOMBRE` FROM `protectoras` WHERE NOMBRE=`$pnombre`";
$consultaID= mysqli_query($conexion, $q10);
if($consultaID){
echo "Este nombre de protectora ya existe en nuestra base de datos. Inténtelo de nuevo";
echo "<br> <a href='subirprotectoras.php> Inténtelo de nuevo</a></div>";
}
if(!$consultaID){
$query8="INSERT INTO `protectoras` (`IDUSUARIO`, `NOMBRE`, `EMAIL`, `TELEFONO`, `DIRECCION`,
 `TEXTO`,`ENLACEDONACION`, `WHISHLIST`, `FOTO`) VALUES ('${pidusuario}', '${pnombre}', '${pemail}', '${ptelf}',
 '${pdireccion2}', '${ptexto}', '${plink1}', '${plink2}', '${pfoto}');";
    $consultaID=mysqli_query($conexion, $query8);
    if($consultaID){
        mkdir("build\img\protectoras\\$pnombre");
        copy("build\img\blog1.jpg", "build\img\protectoras\\$pnombre\perfil.jpg");
        echo "Tu anuncio se ha subido con éxito";
        echo "<br> <a href=panelprotectoras.php> Click aqui para ver la lista de protectoras</a></div>";
    } else {
    echo "Error: " . $q10 . "<br>" .mysqli_error($conexion);
}
}
else{
    echo "El nombre de esta protectora ya existe.";
    echo "<br> <a href='index_aauth.php> Inténtelo de nuevo</a></div>";

}
mysqli_close($conexion);
?>