<?php 
class Conexion{
    
    public static function getConexion(){
        $host = 'localhost';
        $user = 'root';
        $clave = '12345';
        $bd = 'proyectoweb';
        $dsn = 'mysql:host=localhost;dbname='.$bd; 
        $conexion = null; 
        try{
            $conexion = new PDO($dsn,$user,$clave); 
        }catch(Exception $e){
                die("error " . $e->getMessage());
        }
        
        return $conexion;
    }
    
    
    
}
