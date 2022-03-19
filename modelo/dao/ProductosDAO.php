<?php
require_once './config/conexion.php';

class ProductosDAO{
    private $con;

    public function __construct(){
        $this->con = Conexion::getConexion();
    }

    
    public function insertar($nombre,$formulacion,$indicaciones, $dosis_administracion , $presentacion){
        $sql = "INSERT INTO producto (nombre_producto, formulacion, indicaciones, dosis_administracion, presentacion_comercial)
        VALUES ('$nombre','$formulacion','$indicaciones','$dosis_administracion','$presentacion')   ";
        $stmt = $this->con->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() <= 0){
            return false;
        }
        return true;
    }
    public function listar() {
        $sql = "SELECT * FROM producto";
        $stmt = $this->con->prepare($sql);
        $stmt->execute();
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultados;
    }
    public function buscar($busq){

        if(!empty($busq)){
            $sql = "SELECT * FROM producto WHERE nombre_producto = '$busq'";
            $stmt = $this->con->prepare($sql);
            $stmt->execute();

            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

        }else{

            $sql = "SELECT * FROM producto";
            $stmt = $this->con->prepare($sql);
            $stmt->execute();

            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return $resultados;
    }

    

    public function eliminar($id_producto){
        $flag=false;
        try{
            $sql ="DELETE FROM producto WHERE id_producto =$id_producto";
            $stmt = $this->con->prepare($sql);
            $stmt->execute();
            $flag = true;
        }catch(PDOException $e){
            $flag=false;
        }
        return $flag;
    }

    public function buscarxid($busq){

        if(!empty($busq)){

            $sql = "SELECT * FROM producto where id_producto =  '$busq'";
            $stmt = $this->con->prepare($sql);
            $stmt->execute();

            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

        }

        return $resultados;
    }
    

    public function actualizar($id,$nombre,$formulacion,$indicaciones, $dosis_administracion , $presentacion){
        $sql = "UPDATE producto SET nombre_producto = '$nombre', formulacion = '$formulacion',  
        indicaciones = '$indicaciones', dosis_administracion = '$dosis_administracion', presentacion_comercial = '$presentacion' 
        WHERE id_producto = $id";
        $stmt = $this->con->prepare($sql);
        $stmt->execute();
    }


}


?>