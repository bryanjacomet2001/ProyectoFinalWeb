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
        
        <nav class="header-navbar"> </nav>
    </header>

    <main>

        <div class="contenedorForm">
            <form class="formulario_registro" method="POST" action="index.php?c=usuario&f=actualizar"> 
                
                <?php foreach($resultados as $fila){ ?>
                <h1>Formulario registro de usuario</h1> <br>

                <div class="contenido">
                <div class="label"><label for="cedula">Ingrese su cedula: </label></div>
                <div class="datos"><input type="text" placeholder="Escriba su cedula" name="cedula" value="<?php echo $fila['cedula']; ?>"></div>
                </div>

                <div class="contenido">
                <div class="label"><label for="nombre">Ingrese su nombre:</label> </div>
                <div class="datos"><input type="text" placeholder="Escriba su nombre" name="nombre" value="<?php echo $fila['nombre']; ?>"></div>
                </div>
                
                <div class="contenido">
                <div class="label"><label for="apellido">Ingrese su apellido: </label></div>
                <div class="datos"><input type="text" placeholder="Escriba su apellido" name="apellido" value="<?php echo $fila['apellido']; ?>"></div>
                </div>

                <div class="contenido">
                <div class="label"><label for="username">Ingrese su username: </label></div>
                <div class="datos"><input type="text" placeholder="Escriba su username" name="username" value="<?php echo $fila['username'];; ?>"></div>
                </div>

                <div class="contenido">
                <div class="label"><label for="contraseña">Ingrese su contraseña:</label> </div>
                <div class="datos"><input type="password" placeholder="Escriba su contraseña" name="contraseña" value="<?php echo $fila['contraseña'];; ?>" ></div>
                </div>

                <div class="contenido">
                <div class="label"><label for="correo">Ingrese su E-mail: </label></div>
                <div class="datos"><input type="email" placeholder="bj2257239@hotmail.com" name="correo" value="<?php echo $fila['correo']; ?>"></div> 
                </div> <br>

                <div class="contenido">
                <div class="label"><label for="rol">Rol: </label></div>
                <select name="rol" id="rol" >
                    <?php
                    foreach($roles as $rol){
                        $selected ="";
                        if($fila['idrol'] == $rol['idRol']){
                            $selected='selected="selected"';
                        }
                        echo  "<option ".$selected." value='".$fila['descripcion']."'>".$fila['descripcion']."</option>";
                    }
                    ?>
                </select>
                </div> <br>
                <input class="boton" type="submit" value="Actualizar">
            <?php
            }
            ?>
            </form>
        </div>
    </main>   

    <script type="text/javascript" src="/assets/js/registro.js"> </script>

</body>
</html>