<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style-registro.css">
    <title>Veterinaria</title>
</head>
<body>
    <header>
        <div class="header-logo">
            <img src="/assets/img/logo.png" alt="Logo">
        </div>
        
        <nav class="header-navbar"> 
        <ul>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li><a href="index.php?c=usuario&f=salir">Regresar</a></li>

        </ul>
        </nav>
    </header>

    <main>
        <div class="contenedorForm">
            <form class="formulario_registro" action="index.php?c=usuario&f=insertar" method="POST" > 
                
                <h1>Formulario registro de usuario</h1> <br>

                <div class="contenido">
                <div class="label"><label for="cedula">Ingrese su cedula: </label></div>
                <div class="datos"><input type="text" placeholder="Escriba su cedula" name="cedula" id="cedula"></div>
                </div>

                <div class="contenido">
                <div class="label"><label for="nombre">Ingrese su nombre:</label> </div>
                <div class="datos"><input type="text" placeholder="Escriba su nombre" name="nombre" id="nombre"></div>
                </div>
                
                <div class="contenido">
                <div class="label"><label for="apellido">Ingrese su apellido: </label></div>
                <div class="datos"><input type="text" placeholder="Escriba su apellido" name="apellido" id="apellido"></div>
                </div>

                <div class="contenido">
                <div class="label"><label for="username">Ingrese su username: </label></div>
                <div class="datos"><input type="text" placeholder="Escriba su username" name="username" id="username"></div>
                </div>

                <div class="contenido">
                <div class="label"><label for="contraseña">Ingrese su contraseña:</label> </div>
                <div class="datos"><input type="password" placeholder="Escriba su contraseña" name="contraseña" id="contraseña"></div>
                </div>

                <div class="contenido">
                <div class="label"><label for="correo">Ingrese su E-mail: </label></div>
                <div class="datos"><input type="email" placeholder="bj2257239@hotmail.com" name="correo" id="correo"></div> 
                </div> <br>

                <div class="contenido">
                <div class="label"><label for="rol">Rol: </label></div>
                <select name="rol" id="rol">
                    <option value="cliente">cliente</option>
                    <option value="administrador">administrador</option>
                </select>
                </div> <br>

                
                <input class="boton" type="submit" value="Registrar">
            </form>
        </div>
    </main>

    <script type="text/javascript" src="/assets/js/registro.js"> </script>

</body>
</html>