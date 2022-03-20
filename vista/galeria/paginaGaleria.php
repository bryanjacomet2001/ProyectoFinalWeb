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
    <link rel="stylesheet" href="/assets/css/estilos.css">

    <title>Veterinaria</title>
</head>

<body>
    <header>
        <div class="header-logo">
            <img src="/assets/img/Logo.png" alt="Logo">
        </div>
        <nav class="header-navbar">
            <ul>
                <li><a href="index.php?c=navegacion&f=RedireccionarInicio">Inicio</a></li>
                <li><a href="index.php?c=navegacion&f=RedireccionarPaginaNosotros">Nosotros</a></li>
                <li><a href="index.php?c=navegacion&f=RedireccionarServicios">Servicios</a></li>
                <li><a href="index.php?c=navegacion&f=RedireccionarGaleria">Galeria</a></li>
                <li><a href="index.php?c=navegacion&f=RedireccionarPaginaContactenos">Contactenos</a></li>
                <div class="perfil_usuario">
                    <li><a href="#"><a href="#"><?php echo $_SESSION['user']?></a></li>
                    <li><a href="index.php?c=navegacion&f=salir">Cerrar sesión</a></li>
                </div>
            </ul>
        </nav>
    </header>

    <!-- Imagenes Galeria -->
    <h2 class="titulo">Galeria de nuestra Veterinaria</h2>

    <section class="imagenes">
        <div class="img img-1" onclick="myFunction();">
            <a class="link">Veterinaria Guayaquil</a>
        </div>
        <div class="img img-2">
            <a class="link" href="">Consultas Medicas</a>
        </div>
        <div class="img img-3">
            <a class="link" href="">Consultas Medicas</a>
        </div>
        <div class="img img-4">
            <a class="link" href="">Cirugías</a>
        </div>
    </section>

    <!-- Expandir img -->
    <div class="contenedor">
        <!-- Cierre -->
        <span onclick="this.parentElement.style.display='none'" class="cerrarimg">&times;</span>

        <!-- Imagen -->
        <img class="expandirimg" style="width: 100%" src="#" alt="expandir">

        <!-- Texto-->
        <div class="imgtext"></div>
    </div>


    <footer>
        <div class="footer-logo">
            <img src="/assets/img/Logo.png" alt="Logo">
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

    <script>
        const img;

        function myFunction() {
            let imgs = ['../img/clinica.jpeg', '../img/cirugias.jpg', '../img/operacion.jpg', '../img/consulta.png'];

            // Get the expanded image
            var expandImg = document.getElementsByClassName("expandirimg");
            // Get the image text
            var imgText = document.getElementsByClassName("imgtext");
            // Use the same src in the expanded image as the image being clicked on from the grid
            expandImg.src = imgs[1];
            // Use the value of the alt attribute of the clickable image as text inside the expanded image
            imgText.innerHTML = imgs.alt;
            // Show the container element (hidden with CSS)
            expandImg.parentElement.style.display = "block";
        }
    </script>
</body>

</html>