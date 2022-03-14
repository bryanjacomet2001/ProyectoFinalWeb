<?php
require_once './config/conexion.php';

class NosotrosDAO{
    private $con;

    public function __construct(){
        $this->con = Conexion::getConexion();
    }

    public function getDatos(){
        
        $user =$_SESSION['user'];
        $sql = "SELECT * FROM USUARIO WHERE username='$user' ";
        $stmt = $this->con->prepare($sql);
        $stmt->execute();
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultados;
    }
    public function insertar($comentario,$calificacion,$fecha, $id){
        $sql = "INSERT INTO TESTIMONIO (COMENTARIO, CALIFICACION, FECHA_COMENTARIO, ID_USUARIO)
        VALUES ('$comentario','$calificacion','$fecha','$id');";
        $stmt = $this->con->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() <= 0){
            return false;
        }
        return true;
    }
    public function listar() {
        $sql = "SELECT t.codigo_testimonio,t.comentario,u.nombre,t.fecha_comentario
        FROM TESTIMONIO t
        INNER JOIN usuario u ON u.id = t.ID_USUARIO
        order by t.fecha_comentario";
        $stmt = $this->con->prepare($sql);
        $stmt->execute();
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultados;
    }

    public function listarId( $id){
        $sql = "SELECT * FROM TESTIMONIO where ID_USUARIO= $id ";
        $stmt = $this->con->prepare($sql);
        $stmt->execute();
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultados; 
    }

    public function eliminar($id_comentario){
        $flag=false;
        try{
            $sql ="DELETE FROM testimonio WHERE CODIGO_TESTIMONIO =$id_comentario";
            $stmt = $this->con->prepare($sql);
            $stmt->execute();
            $flag = true;
        }catch(PDOException $e){
            $flag=false;
        }
        return $flag;
    }

    public function getTestimonio($id_comentario){
        $sql = "SELECT * FROM TESTIMONIO where CODIGO_TESTIMONIO= $id_comentario ";
        $stmt = $this->con->prepare($sql);
        $stmt->execute();
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultados; 
    }

    public function actualizar($codi,$txtComentario,$txtCalificacion,$fecha){
        $sql = "UPDATE TESTIMONIO SET comentario = '$txtComentario', CALIFICACION = '$txtCalificacion',  
        FECHA_COMENTARIO = '$fecha' WHERE CODIGO_TESTIMONIO = $codi";
        $stmt = $this->con->prepare($sql);
        $stmt->execute();
    }


}


?>