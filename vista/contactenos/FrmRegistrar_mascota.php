<!DOCTYPE html>
<html lang="en">
<?php
    if(!isset($_SESSION)){
        session_start();
    }
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/mascotas.css">
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

    <main>
        
        <div class="Formulario">
            <form class="Registro" method="post" action="index.php?c=contactenos&f=insertar"> 
                
                <h1>Registro de Mascota</h1> <br>

                <div class="contenido">
                <div class="label"><label for="cedula">Ingrese la ID: </label></div>
                <div class="campos"><input type="text" placeholder="Escriba Id de la mascota" name="id_ms" id="id_msi"></div>
                </div>
                
                <div class="contenido">
                <div class="label"><label for="dueño">Ingrese nombre del dueño: </label></div>
                <div class="campos"><input type="text" placeholder="Escriba el nombre del dueño" name="nombre_due" id="nombre_duei"></div>
                </div>

                <div class="contenido">
                <div class="label"><label for="nombre_ms">Ingrese nombre de la mascota: </label> </div>
                <div class="campos"><input type="text" placeholder="Escriba el nombre de la mascota" name="nombre_ms" id="nombre_msi"></div>
                </div>


                <div class="contenido">
                <div class="label"><label for="raza">Ingrese raza de la mascota: </label></div>
                <div class="campos"><input type="text" placeholder="Escriba la raza" name="raza" id="razai"></div>
                </div>

                
                <div class="contenido">
                <div class="label"><label for="genero">Escoja el genero de su mascota:</label></div>
                <div class="campos"><input type="radio" name="genero" id="genero1" value="Macho" checked=true>  Macho  <input type="radio" name="genero" id="genero2" value="Hembra"> Hembra </div> 
                </div>

                <div class="contenido">
                <div class="label"><label for="Edad_ms"> Edad: </label> </div>
                <div class="campos"><input class="anio" type="number" name="edad" id="edad" min="1"> </div>
                </div>

                <div class="contenido">
                <div class="label"><label for="Telefono"> En caso de emergencia llamar al: </label> </div>
                <div class="campos"><input type="tel"  placeholder="099 999 9999" name="telf" id="telf" pattern="{0}[0-9][0-9]-[0-9][0-9][0-9]-[0-9][0-9][0-9][0-9]" > </div>
                </div>
                 <br>
                
                <input class="button" type="submit" value="Enviar">
            </form>
            
            <script type="text/javascript" src="/assets/js/registrar_mascota.js"> </script>
        </div>
    </main>    
</body>
</html>