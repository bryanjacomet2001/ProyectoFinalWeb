<?php
    require_once './config/conexion.php';
    require_once './modelo/dto/Usuario.php';

    class UsuarioDAO{
        private $con;

        public function __construct(){
            $this->con = Conexion::getConexion();
        }

        public function insertar($cliente){

            $cedula = $cliente->getCedula();
            $nombre = $cliente->getNombre();
            $apellido = $cliente->getApellido();
            $username = $cliente->getUsername();
            $contrasena = $cliente->getContra();
            $correo = $cliente->getEmail();
            $rol = $cliente->getRol();
            $numRol = 0;

            if($rol == "cliente"){
                $numRol = 1;
            }else if($rol == "administrador"){
                $numRol = 2;
            }else{
                $numRol = 3;
            }

            $sql = "INSERT INTO usuario (cedula,nombre,apellido,username,contraseña,correo,idRol) 
            values ('$cedula', '$nombre', '$apellido', '$username', '$contrasena', '$correo', '$numRol')";
            
            $stmt = $this->con->prepare($sql);
            $stmt->execute();

            if($stmt->rowCount() <= 0){
                return false;
            }
            return true;
        }

        public function listar(){
            
            $sql = "SELECT u.cedula, u.nombre, u.apellido, u.username,u.contraseña,u.correo, u.idRol,
             r.descripcion FROM USUARIO as u INNER JOIN ROL as r ON u.idRol = r.idRol";
            $stmt = $this->con->prepare($sql);
            $stmt->execute();

            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $resultados;
        }

        public function buscar($busq){

            if(!empty($busq)){
                $sql = "SELECT u.cedula, u.nombre, u.apellido, u.username,u.contraseña,u.correo, 
                r.descripcion FROM USUARIO as u INNER JOIN ROL as r ON u.idRol = r.idRol WHERE cedula='$busq'";
                $stmt = $this->con->prepare($sql);
                $stmt->execute();
    
                $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

            }else{

                $sql = "SELECT u.cedula, u.nombre, u.apellido, u.username,u.contraseña,u.correo, 
                r.descripcion FROM USUARIO as u INNER JOIN ROL as r ON u.idRol = r.idRol";
                $stmt = $this->con->prepare($sql);
                $stmt->execute();

                $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
            }
            return $resultados;
        }

        public function buscarxid($busq){

            if(!empty($busq)){
                $sql = "SELECT u.cedula, u.nombre, u.apellido, u.username,u.contraseña,u.correo, 
                r.descripcion FROM USUARIO as u INNER JOIN ROL as r ON u.idRol = r.idRol WHERE u.idRol='$busq'";
                $stmt = $this->con->prepare($sql);
                $stmt->execute();
    
                $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

            }

            return $resultados;
        }

        public function actualizar($cliente){

            $cedula = $cliente->getCedula();
            $nombre = $cliente->getNombre();
            $apellido = $cliente->getApellido();
            $username = $cliente->getUsername();
            $contrasena = $cliente->getContra();
            $correo = $cliente->getEmail();

            $sql = "UPDATE usuario SET cedula = '$cedula', nombre = '$nombre', apellido = '$apellido', username = '$username', contraseña= '$contrasena', correo = '$correo' WHERE cedula = '$cedula'";
            $stmt = $this->con->prepare($sql);
            $stmt->execute();
        }

        public function eliminar($busq){
            $sql ="DELETE FROM usuario WHERE cedula ='$busq'";
            $stmt = $this->con->prepare($sql);
            $stmt->execute();
        }
    }

?>