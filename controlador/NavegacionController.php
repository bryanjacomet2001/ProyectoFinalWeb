<?php 

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
            include './vista/nosotros/pagina_nosotros.php';
        }

    }
?>