<!DOCTYPE html>
<html lang="es">
<?php
    if(!isset($_SESSION)){
        session_start();
    }
?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Veterinaria</title>
        <link rel="stylesheet" href="/assets/css/style.css">
        <style>

            body table{
                font-size: 1.5rem;
            }

            body h1, .seccionbuscar, .tabla, .registrar{
                margin-top: 10px ;
                margin-left: 10px;
            }
            .perfil_usuario{
                display: flex;
                border: solid 1px black;
                width: 100%;
                border-radius: 5px;
                justify-content: center;
                align-items: center;
                gap: 20px;
                width: 28%;
            }

            .perfil_usuario a{
                text-decoration: none;
            }

            .registrar a{
                text-decoration: none;
                color: #ffffff;
            }

            /*Boton registrar*/
            .registrar{
                display: inline-block; 
                border-radius: 5px;
                background-color: #0069db;
                padding: 10px;
            }

            .return{
                font-size: 20px;
            }

            table {
                border: #b2b2b2 1px solid;
                padding: 10px;
            }
            
            td, th {
                border: #b2b2b2 1px solid;
                padding: 10px;
            }
            
            .seccionbuscar{
                display: flex;
                flex-direction: row;
                gap: 0.2em;
            }
            .tabla{
                margin-top: 10px;
            }

            .btn_buscar{
                border-radius: 5px;
                background-color: #00eb00;
                color: #ffffff;
                font-size: 16px;
                padding: 5px;
                border: none;
                cursor: pointer;
            }

            /*Boton editar*/ 
            .tabla .editar {
                border-radius: 5px;
                background-color: #0069db;
                color: #ffffff;
                font-size: 16px;
                padding: 5px;
            }
            /*Boton eliminar*/
            .tabla .eliminar{
                border-radius: 5px;
                background-color: #ff1d0b;
                color: #ffffff;
                font-size: 16px;
                padding: 5px;
            }

            </style>
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
                    <div class="perfil_usuario">
                        <li><a href="#"><a href="#"><?php echo  $_SESSION['user']?></a></li>
                        <li><a href="index.php?c=usuario&f=salir">Cerrar sesion</a></li>
                    </div>
                </ul>
            </nav>
        </header>

         <h1>Lista de usuarios</h1>

         <form class="seccionbuscar" method="POST" action="index.php?c=usuario&f=buscar">
            <label for="cedula" style="font-size: 20px;">Cedula:</label> <input type="text" name="cedula" id="cedula"> <br> <br>
            <input type="submit" name="buscar" value="Buscar" class="btn_buscar"><br> <br>
        </form>

        <div class ="tabla">
            <table>
                <thead>
                    <tr>
                        <th>CEDULA</th>
                        <th>NOMBRE</th>
                        <th>APELLIDO</th>
                        <th>USERNAME</th>
                        <th>CONTRASEÑA</th>
                        <th>CORREO</th>
                        <th>ROl</th>
                        <th>OPCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($resultados as $fila) {
                        ?>
                        <tr>
                            <td><?php echo $fila['cedula'] ?></td>
                            <td><?php echo $fila['nombre'] ?></td>
                            <td><?php echo $fila['apellido'] ?></td>
                            <td><?php echo $fila['username'] ?></td>
                            <td><?php echo $fila['contraseña']?></td>
                            <td><?php echo $fila['correo']?></td>
                            <td><?php echo $fila['descripcion']?></td>
                            <td>
                                <a class="editar" href="index.php?c=usuario&f=actualizar&cedula=<?php echo $fila['idRol'];?>">Editar</a>
                                <a class="eliminar" href="index.php?c=usuario&f=eliminar&cedula=<?php echo $fila['cedula'];?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <script type="text/javascript" src="/assets/js/registro.js"> </script>
    </body>
</html>