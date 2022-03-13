<?php 
    require_once 'NosotrosController.php';
    if(!isset($_SESSION)){
        session_start();
    }
        
    class NavegacionController{
<<<<<<< HEAD
=======
        
>>>>>>> 9f507825dd99f8b8ad50f8f653555832b7dc52ba
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
            $ObjControl = new NosotrosController();
            $resultados = $ObjControl->listar();
            include './vista/nosotros/pagina_nosotros.php';
        }

    }
?>