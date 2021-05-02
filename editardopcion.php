<?php
include("conexion.php");
include("validarSesion.php");
$nanimal=$_SESSION['nombrea'];
$editanombre=$_POST["editanombre"];
$editatipoanimal=$_POST["editatipoanimal"];
$editaraza=$_POST["editaraza"];
$editaestado=$_POST["editaestado"];
$editaadress=$_POST["editaadress"];
$editaadress2= str_replace(" ", "+", $editaadress);
$editamensaje=$_POST["editamensaje"];
$editatelf=$_POST["editatelf"];
$editaemail=$_POST["editaemail"];

    $query12="UPDATE `animales` SET NOMBRE='${editanombre}', TIPOANIMAL='${editatipoanimal}', RAZA='${editaraza}' , ESTADO='${editaestado}', DIRECCION='${editaadress2}', 
    MENSAJE='${editamensaje}', TELEFONO='${editatelf}', EMAIL='${editaemail}' WHERE NOMBRE = '$nanimal'";
    $consultaID=mysqli_query($conexion, $query12);
    if($consultaID){
        echo "Tu anuncio se ha editado con éxito";
        echo "<br> <a href=index_auth.php> Click aqui para volver a su perfil</a></div>";
    } else {
    echo "Error: " . $query12 . "<br>" .mysqli_error($conexion);
}

mysqli_close($conexion);
?>