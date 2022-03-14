<?php    
    
    foreach ($resultados as $fila){
        $id_comentario=$fila['CODIGO_TESTIMONIO'];
        $comentario=$fila['comentario'];
        $calificacion=$fila['CALIFICACION'];
    }
            
          
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VETERINARIA</title>
    <style>
        form{
            margin:30px;
        }
        legend{
            margin-left:40%;
            font-size: 12px;
        }
        fieldset{
            font-size: 12px;
            margin-top:5px;
            margin-left:30%;
            width: 40%;
            
            border-radius:5px;
        }
        fieldset div{
            height:50px;
            display:flex;
            flex-direction: column;
            justify-content:space-evenly;
            margin:5px;
        }
        fieldset div:first-child {
            margin-left:30px;
        }
        #buton{
           margin-top:3%;
           margin-bottom:3%;
           margin-left: 40%;
           padding:5px;
           
        }
        textarea{
            padding: 2px;
            outline:none;
            resize:none;
        }
    </style>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
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
                    <li><a href="index.php?c=usuario&f=salir">Cerrar sesión</a></li>
                </div>
            </ul>
        </nav>
    </header>

    <form method="POST" action="index.php?c=nosotros&f=actualizar">
        <fieldset>
            <legend>Informacion del Testimonio</legend>

            <div>
                <label for="codi">Codigo del Testimonio:<?php echo $id_comentario?></label>
                <input type="hidden" name="codi" value="<?php echo $id_comentario?>">
            </div>

            <div>
                <label for="txtComentario">Comentario </label>
                <textarea name="txtComentario"><?php echo $comentario?></textarea>
            </div>

            <div>
                    <label for="txtCalificacion">Califica nuestro servicio</label>
                    <select name="txtCalificacion" id="calificacion">
                        <option value="<?php echo $calificacion?>" selected><?php echo $calificacion?></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
            </div>
        
            
            <input id="buton"  type="submit" value="EDITAR" >
        </fieldset>
    </form>
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
</body>
</html>