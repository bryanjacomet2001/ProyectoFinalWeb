<?php 
    require_once './modelo/dao/UsuarioDAO.php';
    require_once './modelo/dao/RolesDAO.php';
    require_once './modelo/dto/Usuario.php';

    if(!isset($_SESSION)){
        session_start();
    }

    class UsuarioController{
        private $modelo;
        private $modeloRoles;

        public function __construct() {
            $this->modelo = new UsuarioDAO();
            $this->modeloRoles = new RolesDAO();
        }
        
        public function index(){
            require_once './vista/cliente/login.php';
        }

        public function login(){    

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                
                $user = $_REQUEST['username'];
                $pass = $_REQUEST['contrasena'];
                
                $resultados = $this->modelo->listar();
                
                $modeloRoles = new RolesDAO();
                $roles = $modeloRoles->listar();

                foreach($resultados as $i){
                    if($i['username'] == $user && $i['contraseña'] == $pass){
                        $_SESSION['user'] = $i['username'];
                        if($i['idRol'] == 1){
                            $_SESSION['rol'] = "cliente";
                            $_SESSION['user'] = $i['username'];
                            require_once './vista/cliente/pagina_principal.php';
                            break;
                        }else if($i['idRol'] == 2){
                            $_SESSION['rol'] = "administrador";
                            $_SESSION['user'] = $i['username'];
                            header('Location:index.php?c=navegacion&f=RedireccionarAcciones');
                            break;
                        }
                    }else{
                        $_SESSION['msjD'] = "Credenciales incorrectas";
                        header('Location:index.php?c=usuario&f=index');
                    }
                }
            }else{
                require_once './vista/cliente/login.php';
            }
        }

        public function insertar(){

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                $cedula = $_REQUEST['cedula'];
                $nombre = $_REQUEST['nombre'];
                $apellido = $_REQUEST['apellido'];
                $username = $_REQUEST['username'];
                $contrasena = $_REQUEST['contraseña'];
                $correo = $_REQUEST['correo'];
                $rol = $_REQUEST['rol'];

                if(!empty($cedula) && !empty($nombre) && !empty($apellido) && !empty($username) && !empty($contrasena) && !empty($correo)){
                    
                    $cliente = new Usuario();

                    $cliente->setCedula($cedula);
                    $cliente->setNombre($nombre);
                    $cliente->setApellido($apellido);
                    $cliente->setUsername($username);
                    $cliente->setContra($contrasena);
                    $cliente->setEmail($correo);
                    $cliente->setRol($rol);

                    $exito = $this->modelo->insertar($cliente);
                    $msj = "Registrado correctamente";
                }

                if(!$exito){
                    $msj = "Ha ocurrido un error";
                }
                
                $_SESSION['msj'] = $msj;

                header('Location:index.php?c=usuario&f=index');

            }else{
                require_once './vista/cliente/formulario_registro.php';
            }
        }

        public function listar(){
            $resultados = $this->modelo->listar();
            require_once './vista/cliente/mostrar_clientes.php';
        }

        public function buscar(){
            $busq = $_REQUEST['cedula'];
            $resultados = $this->modelo->buscar($busq);
            require_once './vista/cliente/mostrar_clientes.php';

        }

        public function actualizar(){
            
            require_once './modelo/dao/RolesDAO.php';

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                $cedula = $_REQUEST['cedula'];
                $nombre = $_REQUEST['nombre'];
                $apellido = $_REQUEST['apellido'];
                $username = $_REQUEST['username'];
                $contrasena = $_REQUEST['contraseña'];
                $correo = $_REQUEST['correo'];

                if(!empty($cedula) && !empty($nombre) && !empty($apellido) && !empty($username) && !empty($contrasena) && !empty($correo)){
                    
                    $cliente = new Usuario();

                    $cliente->setCedula($cedula);
                    $cliente->setNombre($nombre);
                    $cliente->setApellido($apellido);
                    $cliente->setUsername($username);
                    $cliente->setContra($contrasena);
                    $cliente->setEmail($correo);

                    $this->modelo->actualizar($cliente);
                }

                header('Location:index.php?c=usuario&f=listar');

            }
            else{
                $id = $_REQUEST['id'];
                $modeloRoles = new RolesDAO();
                
                $resultados = $this->modelo->buscarxid($id);
                $roles = $modeloRoles->listar();

                require_once './vista/cliente/formulario_actualizar.php';
            }
        }

        public function eliminar(){
            $busq = $_REQUEST['cedula'];
            $this->modelo->eliminar($busq);
            header('Location:index.php?c=usuario&f=index');
        }
    }

?>