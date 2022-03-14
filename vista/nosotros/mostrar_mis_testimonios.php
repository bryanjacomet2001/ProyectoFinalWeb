<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veterinaria</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/estilosNosotros.css">
    <style>
        .tabla{
            margin : 20px;

        }
        table{
            width:100%;
            text-align:center;
            border-collapse:collapse;
        }
        th, td{
           padding:10px;
        }
        thead{
            background-color:#098a81;
            border-bottom:2px solid ;
            color:#fff;
        }
        tr:nth-child(even){
            background-color:#ddd;

        }
        .procesos a{
           margin-left:5px;
        }
    </style>
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

    <div class ="tabla">
            <table>
                <thead>
                    <tr>
                        <th>CODIGO</th>
                        <th>COMENTARIO</th>
                        <th>CALIFICACION</th>
                        <th>FECHA</th>
                        <th>ID_USUARIO</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($resultados as $fila){
                    ?>
                        <tr>
                            <td><?php echo $fila['CODIGO_TESTIMONIO'] ?></td>
                            <td><?php echo $fila['comentario'] ?></td>
                            <td><?php echo $fila['CALIFICACION'] ?></td>
                            <td><?php echo $fila['FECHA_COMENTARIO'] ?></td>
                            <td><?php echo $fila['ID_USUARIO']?></td>
                            <td class="procesos">
                                <a class="btn" href="index.php?c=nosotros&f=eliminar&codigo=<?php echo $fila['CODIGO_TESTIMONIO']?>">
                                    <img src="./assets/img/cancel_16.png" alt="eliminar">
                                </a>                              
                                <a class="btn" href="index.php?c=nosotros&f=getTestimonio&codigo=<?php echo $fila['CODIGO_TESTIMONIO']?>">
                                    <img src="./assets/img/update_16.png" alt="editar">
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                    
                </tbody>
            </table>
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
</body>
</html>