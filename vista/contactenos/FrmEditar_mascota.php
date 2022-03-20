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
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <div class="perfil_usuario">
                    <li><a href="#"><a href="#"><?php echo $_SESSION['user']?></a></li>
                    <li><a href="index.php?c=navegacion&f=salir">Cerrar sesión</a></li>
                </div>
            </ul>
            </ul>
        </nav>
    </header>

    <main>

        <div class="Formulario">
        <form class="Registro" method="post" action="index.php?c=contactenos&f=actualizar">
                
                <h1>Registro de Mascota</h1> <br>
                <?php foreach($resultados as $fila){ ?>
                <div class="contenido">
                <div class="label"><label for="id_ms">Ingrese la ID: </label></div>
                <div class="campos"><input type="text" placeholder="Escriba Id de la mascota" name="id_ms" id="id_ms" value="<?php echo $fila['id_ms']; ?>"></div>
                </div>
                
                <div class="contenido">
                <div class="label"><label for="dueño">Ingrese nombre del dueño: </label></div>
                <div class="campos"><input type="text" placeholder="Escriba el nombre del dueño" name="nombre_due" id="nombre_due" value="<?php echo $fila['nombre_due']; ?>"></div>
                </div>

                <div class="contenido">
                <div class="label"><label for="nombre_ms">Ingrese nombre de la mascota: </label> </div>
                <div class="campos"><input type="text" placeholder="Escriba el nombre de la mascota" name="nombre_ms" id="nombre_ms" value="<?php echo $fila['nombre_ms']; ?>"></div>
                </div>


                <div class="contenido">
                <div class="label"><label for="raza">Ingrese raza de la mascota: </label></div>
                <div class="campos"><input type="text" placeholder="Escriba la raza" name="raza" id="raza" value="<?php echo $fila['raza']; ?>"></div>
                </div>

                
                <div class="contenido">
                <div class="label"><label for="genero">Escoja el genero de su mascota:</label></div>
                <div class="campos"><input type="radio" name="genero" id="genero" value="Macho" checked=true >  Macho  <input type="radio" name="genero" id="genero" value="Hembra"> Hembra </div> 
                </div>

                <div class="contenido">
                <div class="label"><label for="Edad_ms"> Edad: </label> </div>
                <div class="campos"><input type="number" name="edad" id="edad" min="1" value="<?php echo $fila['edad']; ?>"> </div>
                </div>

                <div class="contenido">
                <div class="label"><label for="Telefono"> En caso de emergencia llamar al: </label> </div>
                <div class="campos"><input type="tel"  placeholder="099 999 9999" name="telf" id="telf" pattern="{0}[0-9][0-9]-[0-9][0-9][0-9]-[0-9][0-9][0-9][0-9]" value="<?php echo $fila['telf']; ?>"> </div>
                </div>
                 <br>
                
                <input class="button" type="submit" value="Actualizar">
                
            </form>
        <?php
            } ?>
            <div class="regresar">
                
            <a href="index.php?c=contactenos&f=listar">Regresar</a>
        </div>
            
        </div>
    </main>    
</body>
</html>