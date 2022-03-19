<?php 
    require_once 'NosotrosController.php';
    if(!isset($_SESSION)){
        session_start();
    }
        
    class NavegacionController{
        public function RedireccionarInicio(){
            require_once './vista/cliente/pagina_principal.php';
        }

        public function RedireccionarAcciones(){
            require_once './vista/cliente/accionesdmin.php';
        }

        public function salir(){
            session_unset();
            session_destroy();
            require_once './vista/cliente/login.php';
        }

        public function RedireccionarPaginaNosotros(){
            $Objmodelo = new NosotrosDAO();
            $ObjControl = new NosotrosController();
            $resultados2 = $Objmodelo->getDatos();
            $resultados = $ObjControl->listar();
            include './vista/nosotros/pagina_nosotros.php';
        }

        public function RedireccionarGaleria(){
            require_once './vista/galeria/paginaGaleria.php';
        }

        public function RedireccionarPaginaContactenos(){
            require_once './vista/contactenos/pagina_contactenos.php';
        }

        public function FormularioMascota(){
            require_once './vista/contactenos/FrmRegistrar_mascota.php';
        }

        public function MostrarMascota(){
            require_once './vista/contactenos/mostrar_mascota.php';
        }

    }
?>