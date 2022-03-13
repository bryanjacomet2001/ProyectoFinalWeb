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


}


?>