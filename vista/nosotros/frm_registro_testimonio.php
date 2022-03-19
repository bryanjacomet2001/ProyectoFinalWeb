
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/estilos_frm_nosotros.css">
    <title>Veterinaria</title>
</head>
<body>
    <?php
    $id;
    $nombre;
    $apellido;
    $email;
    foreach ($resultados as $fila) {
        $id = $fila['id'];
        $nombre = $fila['nombre'];
        $apellido = $fila['apellido'];
        $email = $fila['correo'];
    }

    ?>
    <header>
        <div class="header-logo">
            <img src="./assets/img/logo.png" alt="Logo">
        </div>
        
        <nav class="header-navbar">
        <ul>
                <li><a href="index.php?c=navegacion&f=RedireccionarInicio">Inicio</a></li>
                <li><a href="index.php?c=navegacion&f=RedireccionarPaginaNosotros">Nosotros</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Galeria</a></li>
                <li><a href="#">Contactenos</a></li>
                <div class="perfil_usuario">
                    <li><a href="#"><a href="#"><?php echo $_SESSION['user']?></a></li>
                    <li><a href="index.php?c=navegacion&f=salir">Cerrar sesión</a></li>
                </div>
            </ul>
        </nav>
    </header>

    <div class="formulario">
        <h1 class="titulo">Nuevo Testimonio</h1>
        <form id="formNosotros" method="POST" action="index.php?c=nosotros&f=insertar">
            <fieldset>
                <legend>Informacion Personal</legend>
                <input  type="hidden" name="id" value="<?php echo $id?>">
                <div class="bloq_nombre">
                    <label for="nombre">Nombre: </label>
                    <input disabled type="text" name="nombre" id="nombre" value="<?php echo $nombre?>">
                </div>
            
                <div class="bloq_apellido">
                    <label for="apellido">Apellido: </label>
                    <input disabled type="text" name="apellido" id="apellido" value="<?php echo $apellido?>">
                </div>

                <div class="bloq_email">
                    <label for="email">Correo Electronico</label>
                    <input disabled type="text" name="email" id="email" value="<?php echo $email?>">
                </div>
            </fieldset>

            <fieldset>
                <legend>Informacion del Testimonio</legend>

                <div>
                    <label for="testimonio">Testimonio</label>
                    <textarea name="testimonio" id="testimonio" ></textarea>
                </div>

                <div>
                    <label for="calificacion">Califica nuestro servicio</label>
                    <select name="calificacion" id="calificacion">
                        <option value="0" selected>--Seleccione--</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>

                <div>
                     <p>Terminos y condiciones</p>
                    <p class="terminos">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut sapiente totam 
                        voluptates unde optio, earum voluptate, aperiam veniam delectus cupiditate 
                        nisi, temporibus ex ipsam omnis.
                    </p>
                    <input type="checkbox" id="terminos">
                    <label class="inlineblok" for="terminos">Acepto terminos y condiciones</label>
                </div>
            </fieldset>
            <div>
                <input class="btn" type="submit" value="enviar">
                <input class="btn" type="reset"  value="cancelar">
            </div>
           

        </form>
    </div>

    <footer>
        <div class="footer-logo">
            <img src="./assets/img/logo.png" alt="Logo">
        </div>

        <div class="about-us">
            <h3>Nosotros</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus, pariatur.</p>
        </div>
        <div class="contact-us">
            <h3>Contáctenos</h3>
            <ul>
                <li><span><img src="#" alt=""></span>(04) 2123456</li>
                <li><span><img src="#" alt=""></span>Veterinaria@gmail.com</li>
                <li><span><img src="#" alt=""></span>9 de octubre Calle 2</li>
            </ul>
        </div>
        <div class="working-hours">
            <h3>Horario de atención</h3>
            <p>00:09 AM - 16:00 PM</p>
        </div>
    </footer>
    <!--PARA ENLAZAR EL DOCUMENTO JS EXTERNO-->
    <script type="text/javascript" src="/assets/js/registroNosotros"> </script>
</body>
</html>
