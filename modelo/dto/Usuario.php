<?php

class Usuario{
    private $cedula;
    private $nombre;
    private $apellido;
    private $username;
    private $correo;
    private $contrasena;
    private $rol;

    public function setCedula($cedula){
        $this->cedula = $cedula;
    }

    public function getCedula(){
        return $this->cedula;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setApellido($apellido){
        $this->apellido = $apellido;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function setUsername($username){
        $this->username = $username;
    }

    public function getUsername(){
        return $this->username;
    } 

    public function setEmail($correo){
        $this->correo = $correo;
    }

    public function getEmail(){
        return $this->correo;
    }

    public function setContra($contrasena){
        $this->contrasena = $contrasena;
    }

    public function getContra(){
        return $this->contrasena;
    }

    public function setRol($rol){
        $this->rol = $rol;
    }
    
    public function getRol(){
        return $this->rol;
    }

}

?>