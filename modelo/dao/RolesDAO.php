<?php
require_once 'config/Conexion.php';

class RolesDAO {
     private $con;

    public function __construct() {
        $this->con = Conexion::getConexion();
    }
     public function listar() {
        $sql = "select * from rol";
        $stmt = $this->con->prepare($sql);
        $stmt->execute();
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultados;
    }
}

?>