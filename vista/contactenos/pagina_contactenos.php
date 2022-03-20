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
    <title>Veterinaria</title>
    <link rel="stylesheet" href="/assets/css/estilosSanchez.css">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
 <!--header-->
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

<!--contenedor-->
    <main>
        <section id="direccion">
            <div class="d">
                <div class="letras">
                <img src="/assets/img/direccion.png" alt="Sucursal Samborondon">
                <h2>SUCURSAL SAMBORONDON</h2>
                <p class="p">Piazza Samborondón</p>
                </div>
                
                
                <div class="letras">
                    <img src="/assets/img/direccion.png" alt="Clinica principal">
                    <h2>CLINICA PRINCIPAL</h2>
                    <p class="p">Jose Mascote#400 & P.SOLANO</p>
                    </div>
                
                
                    <div class="letras">
                        <img src="/assets//img/direccion.png" alt="Sucursal Ceibos">
                        <h2>SUCURSAL CEIBOS</h2>
                        <p class="p">Piazza Ceibos</p>
                        </div>
                    
            </div>
        </section>

        <section id="correo">
            <div class="d">
                
                <div class="letras">
                    <img src="/assets/img/correo.PNG" alt="Correo Samborondon">
                    <h2>CORREO</h2>
                    <p class="p">piazzasamborondon@gmail.com</p>
                    </div>

                <div class="letras">
                <img src="/assets/img/correo.PNG" alt="Correo principal">
                <h2>CORREO</h2>
                <p class="p">clivequil@yahoo.com</p>
                </div>

                <div class="letras">
                    <img src="/assets/img/correo.PNG" alt="Correo Ceibos">
                    <h2>CORREO</h2>
                    <p class="p">clivequil@yahoo.com</p>
                    </div>

            </div>
        </section>

        <section id="telefono">
            <div class="d">
                
                <div class="letras">
                    <img src="/assets/img/telefono.PNG" alt="Telefono Samborondon">
                    <h2>TELEFONO</h2>
                    <p class="p">(593) 42837295</p>
                </div>
            
                    
                <div class="letras">
                    <img src="/assets/img/telefono.PNG" alt="Telefono Principal">
                    <h2>TELEFONO</h2>
                    <p class="p">(593) 42292826</p>
                </div>

                
                <div class="letras">
                    <img src="/assets/img/telefono.PNG" alt="Telefono Ceibos">
                    <h2>TELEFONO</h2>
                    <p class="p">(593) 42837295</p>
                </div>
               
            </div>
        </section>

            
                <div class="d">
                    <div class="loca">
                    <img width="270" height="300" src="https://veterinariaguayaquil.com/wp-content/uploads/2021/08/1a2b6306-d6d0-460c-810a-b68133484ba7-207x300.jpg" class="attachment-medium size-medium" alt="" loading="lazy" srcset="https://veterinariaguayaquil.com/wp-content/uploads/2021/08/1a2b6306-d6d0-460c-810a-b68133484ba7-207x300.jpg 207w, https://veterinariaguayaquil.com/wp-content/uploads/2021/08/1a2b6306-d6d0-460c-810a-b68133484ba7-707x1024.jpg 707w, https://veterinariaguayaquil.com/wp-content/uploads/2021/08/1a2b6306-d6d0-460c-810a-b68133484ba7-768x1112.jpg 768w, https://veterinariaguayaquil.com/wp-content/uploads/2021/08/1a2b6306-d6d0-460c-810a-b68133484ba7-600x869.jpg 600w, https://veterinariaguayaquil.com/wp-content/uploads/2021/08/1a2b6306-d6d0-460c-810a-b68133484ba7.jpg 834w" sizes="(max-width: 207px) 100vw, 207px">
                    </div>
                    <div class="loca">
                    <img width="280" height="120" src="https://veterinariaguayaquil.com/wp-content/uploads/2021/08/image2-1-1024x576.jpeg" class="attachment-large size-large" alt="" loading="lazy" srcset="https://veterinariaguayaquil.com/wp-content/uploads/2021/08/image2-1-1024x576.jpeg 1024w, https://veterinariaguayaquil.com/wp-content/uploads/2021/08/image2-1-300x169.jpeg 300w, https://veterinariaguayaquil.com/wp-content/uploads/2021/08/image2-1-768x432.jpeg 768w, https://veterinariaguayaquil.com/wp-content/uploads/2021/08/image2-1-600x338.jpeg 600w, https://veterinariaguayaquil.com/wp-content/uploads/2021/08/image2-1.jpeg 1280w" sizes="(max-width: 1024px) 100vw, 1024px">
                </div>
                <div class="loca">
                    <img width="250" height="300" src="https://veterinariaguayaquil.com/wp-content/uploads/2021/08/image3-295x300.jpeg" class="attachment-medium size-medium" alt="" loading="lazy" srcset="https://veterinariaguayaquil.com/wp-content/uploads/2021/08/image3-295x300.jpeg 295w, https://veterinariaguayaquil.com/wp-content/uploads/2021/08/image3-1008x1024.jpeg 1008w, https://veterinariaguayaquil.com/wp-content/uploads/2021/08/image3-768x780.jpeg 768w, https://veterinariaguayaquil.com/wp-content/uploads/2021/08/image3-600x610.jpeg 600w, https://veterinariaguayaquil.com/wp-content/uploads/2021/08/image3.jpeg 1117w" sizes="(max-width: 295px) 100vw, 295px">
                </div>
                </div>
            

            
                <div class="d">
                    <div class="loca">
                    <a title="Samborondon" href="https://goo.gl/maps/5LyGZy7gUkLbaF5y5"><img width="270" height="380" src="/assets/img/Maps.PNG" alt="Mapa Samborondón"></a>
                </div>
                <div class="loca">
                    <a title="Principal" href="https://goo.gl/maps/A6XkC3TkGj5D3gqc7"><img width="280" height="380" src="/assets/img/Mapc.PNG" alt="Mapa Principal"></a>
                </div>
                <div class="loca">
                    <a title="Ceibos" href="https://goo.gl/maps/UJzqE4cdA3ezuNiE7"><img width="250" height="380" src="/assets/img/Mapce.PNG" alt="Mapa de Ceibos"></a>                
                </div>
                </div>
            
<!--Footer-->
     <footer class="footer">
        
        <div class="footer-logo">
            <img src="/assets/img/Logo.png" alt="Logo-foot">
        </div>

        <div class="about-us">
            <h3>Nosotros</h3>
            <p>Equipo medico con la mision de mejorar la salud de sus mascotas</p>
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