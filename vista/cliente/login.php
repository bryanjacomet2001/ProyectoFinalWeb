<!DOCTYPE html>
<html lang="es">
<?php
    if(!isset($_SESSION)){
        session_start();
    }
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style-servicios.css">
    <title>Veterinaria</title>
</head>
<body>
    <header>
        <div class="header-logo">
            <img src="/assets/img/Logo.png" alt="Logo">
        </div>
        <nav class="header-navbar"></nav>
    </header>
    <main>
        <section class="login">
            <h2>Inicia sesión</h2>
            <form class="login__container--form" method="POST" action="index.php?c=usuario&f=login">
                <input class="input" type="text" placeholder="Usuario" id="username" name="username">
                <input class="input" type="password" placeholder="Contraseña" id="contraseña" name="contrasena">
                
                <input type="submit" class="button" value="Iniciar Sesion">
            </form>
                <p class="login__container--register">No tienes ninguna cuenta?<a href="index.php?c=usuario&f=insertar">
                Registrate</a></p>
                
        </section>
    </main>

    <footer>

        <div class="footer-logo">
            <img src="/assets/img/Logo.png" alt="Logo">
        </div>

        <div class="about-us">
            <h3>Nosotros</h3>
            <p>wewe ipsum dolor, sit amet consectetur adipisicing elit. Doloribus, pariatur.</p>
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
    
    <script type="text/javascript" src="/assets/js/registro.js"> </script>


    <?php 
        if(isset($_SESSION['msj'])){
            $msj = $_SESSION['msj'];
            echo "<script> window.onload = function(){
                alert('$msj');
            }
            </script>";
            unset($_SESSION['msj']);
        }

        if(isset($_SESSION['msjD'])){
            $msj = $_SESSION['msjD'];
            echo "<script> window.onload = function(){
                alert('$msj');
            }
            </script>";
            unset($_SESSION['msjD']);
        }
    ?>

    </body>
</html>