<?php
class Usuario{
    private $idusuario1;
    private $rol1;
    private $nickname1;
    private $nombre1;
    private $apellidos1;
    private $email1;
    private $password1;
    private $telefono1;
    private $direccion1;
    private $fotoperfil1;
    public function __construct($idusuario1, $rol1, $nickname1, $nombre1, $apellidos1, $email1, $password1, $telefono1, $direccion1, $fotoperfil1){
        $this -> idusuario1= $idusuario1;
        $this -> rol1= $rol1;
        $this -> nickname1= $nickname1;
        $this -> nombre1= $nombre1;
        $this -> apellidos1= $apellidos1;
        $this -> email1= $email1;
        $this -> password1= $password1;
        $this -> telefono1= $telefono1;
        $this -> direccion1= $direccion1;
        $this -> fotoperfil1= $fotoperfil1;
    }
    public function obtenerIdUsuario(){
        return $this -> idusuario1;
    }
    public function obtenerRol(){
        return $this -> rol1;
    }
    public function obtenerNickname(){
        return $this -> nickname1;
    }
    public function obtenerNombre(){
        return $this -> nombre1;
    }
    public function obtenerApellidos(){
        return $this -> apellidos1;
    }
    public function obtenerEmail(){
        return $this -> email1;
    }
    public function obtenerPassword(){
        return $this -> password1;
    }
    public function obtenerTelefono(){
        return $this -> telefono1;
    }
    public function obtenerDireccion(){
        return $this -> direccion1;
    }
    public function obtenerFotoPerfil(){
        return $this -> fotoperfil1;
    }
}
?>