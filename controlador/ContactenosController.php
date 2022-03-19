<?php
require_once './modelo/dao/ContactenosDAO.php';

if(!isset($_SESSION)){
    session_start();
}

class ContactenosController{

    private $modelo;

    public function __construct() {
        $this->modelo = new ContactenosDAO();
    }

    public function insertar(){
        $resultados=false;
        $id_ms = $_REQUEST['id_ms'];
        $nombre_due = $_REQUEST['nombre_due'];
        $nombre_ms = $_REQUEST['nombre_ms'];
        $raza = $_REQUEST['raza'];
        $genero = $_REQUEST['genero'];
        $edad = $_REQUEST['edad']; 
        $telf = $_REQUEST['telf'];

        if(!empty($id_ms) && !empty($nombre_due) && !empty($nombre_ms) && !empty($raza) && !empty($genero) && !empty($edad)&& !empty($telf)){
           $resultados = $this->modelo->insertar($id_ms,$nombre_due,$nombre_ms, $raza,$genero,$edad,$telf);  
        }
        if(!$resultados){
            $_SESSION['msj'] = "Ha ocurrido un error";
        }else{
            header('Location:index.php?c=navegacion&f=RedireccionarInicio');
        }
        
    }

    public function buscar(){
        $id_ms = $_POST['id_mas'];
        $resultados = $this->modelo->listarId($id_ms);
        require_once './vista/contactenos/mostrar_mascota.php';

    }

    public function Listar(){
        $resultados = $this->modelo->listar();
        require_once './vista/contactenos/mostrar_mascota.php';
    }
    
    
    public function eli(){
        $id_ms = $_REQUEST['id_ms'];
        $resultados = $this->modelo->listarId($id_ms);
        require_once './vista/contactenos/mostrar_mascota.php';
    }

    public function eliminar(){
        $id_ms = $_REQUEST['id_ms'];
        $resultados = $this->modelo->eliminar($id_ms);
        header('Location:index.php?c=contactenos&f=listar');
    }

    public function frmact(){
        $id_ms = $_REQUEST['id_ms'];
        $resultados = $this->modelo->datact($id_ms);
        require_once './vista/contactenos/FrmEditar_mascota.php';
    }
 
    public function actualizar(){
        $id_ms = $_REQUEST['id_ms'];
        $nombre_due = $_REQUEST['nombre_due'];
        $nombre_ms = $_REQUEST['nombre_ms'];
        $raza = $_REQUEST['raza'];
        $genero = $_REQUEST['genero'];
        $edad = $_REQUEST['edad']; 
        $telf = $_REQUEST['telf'];
        $this->modelo->actualizar($id_ms,$nombre_due,$nombre_ms, $raza,$genero,$edad,$telf);
        header('Location:index.php?c=contactenos&f=listar');
    }

}
?>