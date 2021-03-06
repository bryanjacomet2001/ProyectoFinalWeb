<!DOCTYPE html>
<html lang="es">

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
                    <img class="service-item__img" src="/assets/img/Services.jpg" alt="">
                    <h3>Hospitalización</h3>
                    <p>El servicio de hospitalización es el conjunto de servicios destinados al ingreso de pacientes para su diagnóstico, recuperación y/o tratamiento. La infraestructura de nuestro hospital cuenta con la separación de pacientes felinos, caninos con el fin de reducir su estrés durante este tiempo.</p>
                </div>
                <div class="service-item">
                    <img class="service-item__img" src="/assets/img/clinica.jpeg" alt="">
                    <h3>Laboratorio Clínico</h3>
                    <p>Realizamos exámenes de diagnóstico veterinario de rutina y especializados. Garantizando altos estándares de calidad, eficiencia y oportunidad.</p>
                </div>
                <div class="service-item">
                    <img class="service-item__img" src="/assets/img/cirugia.jpg" alt="">
                    <h3>Cirugías</h3>
                    <p>Es una de las principales herramientas terapéuticas dentro de la sanidad veterinaria. Nuestro equipo de especialistas destaca por su capacidad profesional así también como de su formación continua los que nos permite situarnos en la vanguardia de la cirugía veterinaria</p>
                </div>
                <div class="service-item">
                    <img class="service-item__img" src="/assets/img/consulta.jpg" alt="">
                    <h3>Consultas Medicas</h3>
                    <p>Clínica veterinaria Guayaquil cuenta con excelente especialistas con herramientas y equipos de ultima generación, podemos diagnosticar y tratar enfermedades de las mascotas con mayor precisión y rapidez. </p>
                </div>
                <div class="service-item">
                    <img class="service-item__img" src="/assets/img/vacuna.jpg" alt="">
                    <h3>Vacunación</h3>
                    <p>Para consultar nuestros servicios, puede hacerlo solicitándolos vía email:  Rabia: Se aplica a partir de las 12 semanas de edad. Revacunación Anual de Séxtuple y Rabia.</p>
                </div>
                <div class="service-item">
                    <img class="service-item__img" src="./assets/img/vacuna.jpg" alt="">
                    <h3>Vacunación</h3>
                    <p>Para consultar nuestros servicios, puede hacerlo solicitándolos vía email:  Rabia: Se aplica a partir de las 12 semanas de edad. Revacunación Anual de Séxtuple y Rabia.</p>
                </div>
                
            </div>
        </section>

        <section class="container">
            <h2 class="subtitle">Especializaciones</h2>
            <div class="main-specialization-container container">
                <div class="specialization-item">
                    <img class="specialization-item__img" src="/assets/img/consulta.jpg" alt="">
                    <h3>Neurocirugia</h3>
                    <p>Realizamos todo tipo de intervenciones quirúrgicas del sistema nervioso central y sistema nervioso periférico o estructuras adyacentes a estos. Tenemos una amplia experiencia es en cirugías oncológicas del sistema nervioso. Asi también en otras afecciones tales como hidrocefalia y su tratamiento quirúrgico (como es la implantación de una válvula de drenaje con derivación ventrículo peritoneal).</p>
                </div>
                <div class="specialization-item">
                    <img class="specialization-item__img" src="/assets/img/clinica.jpeg" alt="">
                    <h3>Neurologia</h3>
                    <p>La neurología en pequeños animales supone un gran esfuerzo para el profesional veterinario, ya que los pacientes no son capaces de trasmitir verbalmente lo que sienten o donde les molesta. Nuestra mascota puede sufrir cualquier tipo de patología neurológica, desde extrusiones discales en las que puede dejar de caminar, hasta lesiones intracraneales con peor pronóstico.</p>
                </div>
                <div class="specialization-item">
                    <img class="specialization-item__img" src="/assets/img/vacuna.jpg" alt="">
                    <h3>Dermatologia</h3>
                    <p>La dermatología veterinaria estudio veterinario que se encarga del diagnóstico y tratamiento de trastornos de la piel, las orejas, el cabello, las uñas, los cascos y la boca de los animales. Específicamente, los dermatólogos veterinarios tienen capacitación y experiencia significativas en el manejo de enfermedades alérgicas de la piel</p>
                </div>
                <div class="specialization-item">
                    <img class="specialization-item__img" src="/assets/img/Specializations.jpg" alt="">
                    <h3>Oncología</h3>
                    <p>El principal propósito de la oncología veterinaria es perseguir el bienestar de los pacientes con cáncer. Mejorando la calidad de vida, minimizando los trastornos orgánicos que produce la enfermedad, prolongando así la sobrevida del paciente.</p>
                </div>
                <div class="specialization-item">
                    <img class="specialization-item__img" src="/assets/img/cirugias.jpg" alt="">
                    <h3>Traumatología</h3>
                    <p>La traumatología es la rama de la veterinaria que se encarga del estudio del aparato locomotor, es decir, se encarga del estudio del sistema músculo-esquelético.</p>
                </div>
                <div class="specialization-item">
                    <img class="specialization-item__img" src="/assets/img/consultas.jpg" alt="">
                    <h3>Dermatologia</h3>
                    <p>La dermatología veterinaria estudio veterinario que se encarga del diagnóstico y tratamiento de trastornos de la piel, las orejas, el cabello, las uñas, los cascos y la boca de los animales. Específicamente, los dermatólogos veterinarios tienen capacitación y experiencia significativas en el manejo de enfermedades alérgicas de la piel</p>
                </div>
            </div>
        </section>
    </main>

    <footer>

        <div class="footer-logo">
            <img src="./assets/img/logo.png" alt="Logo">
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