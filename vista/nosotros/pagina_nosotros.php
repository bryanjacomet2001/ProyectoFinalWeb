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
    <title>Veterinaria</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/estilosNosotros.css">
    
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

    <div class="contenedor-principal">

        <div class="contenedor__bloque">
            <div class="bloque__introduccion">
                <h2 class="introduccion__titulo">CLÍNICA VETERINARIA GUAYAQUIL</h2>
                <p>
                    Clínica Veterinaria Guayaquil en 1968. Sergio Bravo, Egresando de medicina veterinaria pudo cristalizar su sueño poniendo lo que es hoy en día clínica veterinaria Guayaquil, desde ahí dedicado a las mascotas en el transcurso se le presentó cristalizar otro de sus sueños poder enseñar en nuestra universidad en la cual tuvo la posibilidad de dictar la cátedra de parasitologia, el cual idealizo sus sueños dedicarse a las mascotas.
                </p>
            </div>
        </div>

        <div class="contenedor__fundador">

            <div class="contenedor__bloqueDescripcion">
                <h3>FUNDADOR DE LA CLINICA VETERINARIA GUAYAQUIL</h3>
                <span>Dr. Sergio Bravo</span>
                <p>Transcurrió su vida entre sus dos pasiones y en la cual se inició en Esmeraldas y 9 de octubre. Ya egresado y con su 
                    clínica fundada en Esmeraldas y nueve de octubre conoció a quien sería su esposa y con quien compartiría la pasión por la veterinaria, la Dra. Patricia Bravo, quien junto a el siguió la Clínica Veterinaria Guayaquil luego de ella enamorarse de la profesión y convertirse en una profesional.
                    Tuvieron dos hijos quienes crecieron para convertirse en doctores veterinarios y compartir su pasión con ellos, su hija Priscila se convirtió en la primera 
                    laboratorista de Guayaquil y juntos conformaron un laboratorio especializado para poder ejercer la profesión con todas las de ley y darle el cuidado óptimo merecido por las mascotas.
                    Somos un equipo de Médicos Veterinarios y personal capacitado para la atención
                    integral de las mascotas, con el fin de restablecer, mejorar y resguardar la salud, 
                    así como prevenir y evitar las enfermedades que puedan adquirir. A través de una atención 
                    de calidad y un alto compromiso, así como honradez en nuestro servicio. Con los recursos adecuados 
                    para garantizar el bienestar animal y la satisfacción de nuestros clientes. Creemos firmemente que es importante avanzar. Cada día queremos atender mejor a nuestros pacientes. Todo el staff se encarga de 
                    tecnificarse y buscar nuevas máquinas e optimizaciones para seguir siempre adelante.
                </p>
            </div>
        
            <div class="contenedor__bloqueImagen">
                <figure>
                    <img class="bloqueImagen__foto" src="./assets/img/Dr.SergioBravo.PNG" alt="Foto Dr.Sergio Bravo"/>
                    <figcaption>Dr. Sergio Bravo</figcaption>
                </figure>    
            </div>

        </div>
       
        
        <div class="contenedor__bloqInformativo">
            <div>
                <section class="bloqInformativo__redes">
                    <h4 class="titulo">Síguenos en nuestra redes</h4>
                    <a class="icono" href="#"><img src="./assets/img/icons8_Facebook.ico" alt="facebook"></a>
                    <a class="icono" href="#"><img src="./assets/img/icons8_Instagram.ico" alt="Instagram"></a>
                
                </section>

                <section class="bloqInformativo__mision">
                    <h4 class="titulo">Nuestra Mision</h4>
                    <p>Ofrecer y realizar servicios veterinarios de gran calidad y alto 
                        nivel técnico y científico, dirigidos a nuestros clientes y a sus mascotas
                        para satisfacer con excelencia sus necesidades.
                    </p>
                </section>
            </div>
        </div>

    </div>
    
    <section class="agregar-testimonios">
        <h2>Agrega tus testimonios</h2>
        <div>
            <p>Envianos tu testimonio una vez al mes,!siempre lo leemos!</p>
            <div class="boton-testimonios">
                <a href="index.php?c=nosotros&f=iniciarFormulario">Agregar</a>
            </div>
            <div class="boton-testimonios comentario">
                <a href="index.php?c=nosotros&f=listarMisTestimonios"> Mis Testimonios</a>
            </div>
        </div>
    </section>
    
    <div class="content-testimonios">
        
        <?php 
            
            foreach ($resultados as $fila){
            ?>
            <div class="testimonios">
                <img src="./assets/img/quote_32.png" alt="quote">
                <div>
                    <p><?php echo $fila['comentario'] ?></p>
                </div>
                <h3><?php echo $fila['nombre'] ?></h3>
                <h5><?php echo $fila['fecha_comentario'] ?></h5>
            </div>
        <?php }?>
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
