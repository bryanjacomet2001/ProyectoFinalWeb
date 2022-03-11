<?php 

    if(!isset($_SESSION)){
        session_start();
    }
        
    class NavegacionController{
        public function RedireccionarInicio(){
            include './vista/cliente/pagina_principal.php';
        }
    }
?>