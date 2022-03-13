<?php 

    if(!isset($_SESSION)){
        session_start();
    }
        
    class NavegacionController{

        public function RedireccionarInicio(){
            include './vista/cliente/pagina_principal.php';
        }

        public function RedireccionarPaginaNosotros(){
            include './vista/nosotros/pagina_nosotros.php';
        }

    }
?>