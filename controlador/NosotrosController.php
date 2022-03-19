<?php
require_once './modelo/dao/NosotrosDAO.php';

if(!isset($_SESSION)){
    session_start();
}

class NosotrosController{

    private $modelo;

    public function __construct() {
        $this->modelo = new NosotrosDAO();
    }

    public function iniciarFormulario(){
        $resultados = $this->modelo->getDatos();
        require_once './vista/nosotros/frm_registro_testimonio.php';
    }

    public function insertar(){
        $resultados=false;
        $comentario = $_REQUEST['testimonio'];
        $calificacion = $_REQUEST['calificacion'];
        $fecha= date('Y-m-d H:i:s');
        $id = $_REQUEST['id'];
        if(!empty($comentario) && !empty($calificacion) && !empty($fecha) && !empty($id)){
           $resultados = $this->modelo->insertar($comentario,$calificacion,$fecha, $id);
           header('Location:index.php?c=navegacion&f=RedireccionarPaginaNosotros');
        }
        else{
            header('Location:index.php?c=navegacion&f=RedireccionarPaginaNosotros');
        }
        
    }
    public function listar(){
        return $resultados = $this->modelo->listar();
    }
    
    public function listarMisTestimonios(){
        $id =$_SESSION['Id_Usuario'];
        $resultados = $this->modelo->listarId($id);
        require_once './vista/nosotros/mostrar_mis_testimonios.php';
    }

    public function eliminar(){
        $id_comentario = (int)$_REQUEST['codigo'];
        $resultados = $this->modelo->eliminar($id_comentario);
        header('Location:index.php?c=nosotros&f=listarMisTestimonios');
    }

    public function getTestimonio(){
        $id_comentario = (int)$_REQUEST['codigo'];
        $resultados = $this->modelo->getTestimonio($id_comentario);
        require_once './vista/nosotros/editar_testimonio.php';
    }
    public function actualizar(){
        $codi=$_REQUEST['codi'];
        $txtComentario = $_REQUEST['txtComentario'];
        $txtCalificacion = $_REQUEST['txtCalificacion'];
        $fecha= date('Y-m-d H:i:s');
        $this->modelo->actualizar($codi,$txtComentario,$txtCalificacion,$fecha);
        header('Location:index.php?c=nosotros&f=listarMisTestimonios');
    }

}
?>