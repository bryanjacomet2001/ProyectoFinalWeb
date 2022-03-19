<?php 
    require_once './modelo/dao/ProductosDAO.php';
    
    

    if(!isset($_SESSION)){
        session_start();
    }

    class ProductosController{
        private $modelo;
        

        public function __construct() {
            $this->modelo = new ProductosDAO();
            
        }
        
        public function index(){
            require_once './vista/cliente/login.php';
        }


        public function insertar(){

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                $nombre = $_REQUEST['nombre'];
                $formulacion = $_REQUEST['formulacion'];
                $indicaciones = $_REQUEST['indicaciones'];
                $dosis_administracion = $_REQUEST['dosis_administracion'];
                $presentacion = $_REQUEST['presentacion'];
                

                if(!empty($nombre) && !empty($formulacion) && !empty($indicaciones) && !empty($dosis_administracion) && !empty($presentacion)){
                    

                    $exito = $this->modelo->insertar($nombre,$formulacion,$indicaciones, $dosis_administracion , $presentacion);
                    $msj = "Registrado correctamente";
                }

                if(!$exito){
                    $msj = "Ha ocurrido un error";
                }
                
                $_SESSION['msj'] = $msj;
                header('Location:index.php?c=navegacion&f=RedireccionarAcciones');

            }else{
                require_once './vista/productos/registro_producto.php';
            }
        }
        

        public function listar(){
            $resultados = $this->modelo->listar();
            require_once './vista/productos/mostar_productos.php';
        }

        

        public function buscar(){
            $busq = $_REQUEST['nombre'];
            $resultados = $this->modelo->buscar($busq);
            require_once './vista/productos/mostar_productos.php';

        }

        public function actualizar(){
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                $id_producto=$_REQUEST['id_producto'];
                $nombre = $_REQUEST['nombre'];
                $formulacion = $_REQUEST['formulacion'];
                $indicaciones = $_REQUEST['indicaciones'];
                $dosis_administracion = $_REQUEST['dosis_administracion'];
                $presentacion = $_REQUEST['presentacion'];

                $this->modelo->actualizar($id_producto, $nombre,$formulacion,$indicaciones, $dosis_administracion , $presentacion);
                header('Location:index.php?c=productos&f=listar');  

            }else{
                $id = $_REQUEST['id_producto'];
                $resultados = $this->modelo->buscarxid($id);
                require_once './vista/productos/editar_producto.php';
            }
                      
        }

        public function eliminar(){
            $busq = $_REQUEST['id_producto'];
            $this->modelo->eliminar($busq);
            header('Location:index.php?c=productos&f=listar');
        }
    }

?>