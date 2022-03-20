<?php
 if(!isset($_SESSION)){
    session_start();
}
foreach ($resultados2 as $fila){
    $_SESSION['Id_Usuario']= $fila['id'];
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style-servicios.css">
    <title>Veterinaria</title>
</head>
<body>
    <header>
        <div class="header-logo">
            <img src="./img/Logo.png" alt="Logo">
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
    <main>
        <section class="main-title-services">
            <div class="container">
                <h1>Servicios</h1>
                <p><a href="">Inicio</a> > Servicios</p>
            </div>
        </section>
        <section>
            <div class="container main-services-container">
                <div class="service-item">
                    <img class="service-item__img" src="./img/Services.jpg" alt="">
                    <h3>Hospitalización</h3>
                    <p>weew ipsum dolor sit amet consectetur adipisicing elit. Nam laboriosam ducimus alias perferendis quas voluptates quos harum, numquam tempore quis, voluptatum hic optio facilis nobis eaque error illo tempora saepe.</p>
                </div>
                <div class="service-item">
                    <img class="service-item__img" src="./img/Services.jpg" alt="">
                    <h3>Hospitalización</h3>
                    <p>weew ipsum dolor sit amet consectetur adipisicing elit. Nam laboriosam ducimus alias perferendis quas voluptates quos harum, numquam tempore quis, voluptatum hic optio facilis nobis eaque error illo tempora saepe.</p>
                </div>
                <div class="service-item">
                    <img class="service-item__img" src="./img/Services.jpg" alt="">
                    <h3>Hospitalización</h3>
                    <p>weew ipsum dolor sit amet consectetur adipisicing elit. Nam laboriosam ducimus alias perferendis quas voluptates quos harum, numquam tempore quis, voluptatum hic optio facilis nobis eaque error illo tempora saepe.</p>
                </div>
                <div class="service-item">
                    <img class="service-item__img" src="./img/Services.jpg" alt="">
                    <h3>Hospitalización</h3>
                    <p>weew ipsum dolor sit amet consectetur adipisicing elit. Nam laboriosam ducimus alias perferendis quas voluptates quos harum, numquam tempore quis, voluptatum hic optio facilis nobis eaque error illo tempora saepe.</p>
                </div>
                <div class="service-item">
                    <img class="service-item__img" src="./img/Services.jpg" alt="">
                    <h3>Hospitalización</h3>
                    <p>wewe ipsum dolor sit amet consectetur adipisicing elit. Nam laboriosam ducimus alias perferendis quas voluptates quos harum, numquam tempore quis, voluptatum hic optio facilis nobis eaque error illo tempora saepe.</p>
                </div>
                <div class="service-item">
                    <img class="service-item__img" src="./img/Services.jpg" alt="">
                    <h3>Hospitalización</h3>
                    <p>wewe ipsum dolor sit amet consectetur adipisicing elit. Nam laboriosam ducimus alias perferendis quas voluptates quos harum, numquam tempore quis, voluptatum hic optio facilis nobis eaque error illo tempora saepe.</p>
                </div>
            </div>
        </section>
        
        <section class="container">
            <h2 class="subtitle">Especializaciones</h2>
            <div class="main-specialization-container container">
                <div class="specialization-item">
                    <img class="specialization-item__img" src="./img/Specializations.jpg" alt="">
                    <h3>Hospitalización</h3>
                    <p>wewe ipsum dolor sit amet consectetur adipisicing elit. Nam laboriosam ducimus alias perferendis quas voluptates quos harum, numquam tempore quis, voluptatum hic optio facilis nobis eaque error illo tempora saepe.</p>
                </div>
                <div class="specialization-item">
                    <img class="specialization-item__img" src="./img/Specializations.jpg" alt="">
                    <h3>Hospitalización</h3>
                    <p>wewe ipsum dolor sit amet consectetur adipisicing elit. Nam laboriosam ducimus alias perferendis quas voluptates quos harum, numquam tempore quis, voluptatum hic optio facilis nobis eaque error illo tempora saepe.</p>
                </div>
                <div class="specialization-item">
                    <img class="specialization-item__img" src="./img/Specializations.jpg" alt="">
                    <h3>Hospitalización</h3>
                    <p>wewe ipsum dolor sit amet consectetur adipisicing elit. Nam laboriosam ducimus alias perferendis quas voluptates quos harum, numquam tempore quis, voluptatum hic optio facilis nobis eaque error illo tempora saepe.</p>
                </div>
                <div class="specialization-item">
                    <img class="specialization-item__img" src="./img/Specializations.jpg" alt="">
                    <h3>Hospitalización</h3>
                    <p>wewe ipsum dolor sit amet consectetur adipisicing elit. Nam laboriosam ducimus alias perferendis quas voluptates quos harum, numquam tempore quis, voluptatum hic optio facilis nobis eaque error illo tempora saepe.</p>
                </div>
                <div class="specialization-item">
                    <img class="specialization-item__img" src="./img/Specializations.jpg" alt="">
                    <h3>Hospitalización</h3>
                    <p>wewe ipsum dolor sit amet consectetur adipisicing elit. Nam laboriosam ducimus alias perferendis quas voluptates quos harum, numquam tempore quis, voluptatum hic optio facilis nobis eaque error illo tempora saepe.</p>
                </div>
                <div class="specialization-item">
                    <img class="specialization-item__img" src="./img/Specializations.jpg" alt="">
                    <h3>Hospitalización</h3>
                    <p>wewe ipsum dolor sit amet consectetur adipisicing elit. Nam laboriosam ducimus alias perferendis quas voluptates quos harum, numquam tempore quis, voluptatum hic optio facilis nobis eaque error illo tempora saepe.</p>
                </div>
            </div>
        </section>
    </main>

    <footer>

        <div class="footer-logo">
           <img src="./img/Logo.png" alt="Logo">
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
</body>
</html>