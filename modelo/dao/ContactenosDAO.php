<?php
require_once './config/conexion.php';

class ContactenosDAO{
    private $con;

    public function __construct(){
        $this->con = Conexion::getConexion();
    }

    public function insertar($id_ms,$nombre_due,$nombre_ms, $raza,$genero,$edad,$telf){
        $sql = "INSERT INTO mascota VALUES ('$id_ms', '$nombre_due', '$nombre_ms', '$raza', '$genero', 
        '$edad', '$telf')";
        $stmt = $this->con->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() <= 0){
            return false;
        }
        return true;
    }
    public function listar() {
        $sql = "SELECT * FROM mascota";
        $stmt = $this->con->prepare($sql);
        $stmt->execute();
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $resultados;
    }

    public function listarId($id_ms){
        $sql = "SELECT * FROM mascota where id_ms= $id_ms ";
        $stmt = $this->con->prepare($sql);
        $stmt->execute();
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultados; 
    }

    public function datact($id_ms){
        $sql = "SELECT * FROM mascota where id_ms= $id_ms ";
        $stmt = $this->con->prepare($sql);
        $stmt->execute();
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultados; 
    }

    public function eliminar($id_ms){
        $flag=false;
        try{
            $sql ="DELETE FROM mascota where id_ms= $id_ms ";
            $stmt = $this->con->prepare($sql);
            $stmt->execute();
            $flag = true;
        }catch(PDOException $e){
            $flag=false;
        }
        return $flag;
    }


    public function actualizar($id_ms,$nombre_due,$nombre_ms, $raza,$genero,$edad,$telf){
        $sql = "UPDATE mascota SET id_ms = '$id_ms', nombre_due = '$nombre_due', nombre_ms = '$nombre_ms', 
        raza = '$raza', genero = '$genero', edad = '$edad', telf = '$telf' WHERE id_ms = '$id_ms'";
        $stmt = $this->con->prepare($sql);
        $stmt->execute();
    }
    
    public function buscar($bus){

       
            $sql = "SELECT * FROM mascota WHERE id_ms='$bus'";
            $stmt = $this->con->prepare($sql);
            $stmt->execute();
            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

        
        return $resultados;
    }

}
?>