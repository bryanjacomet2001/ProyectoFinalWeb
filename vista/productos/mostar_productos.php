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
                        <li><a href="index.php?c=navegacion&f=RedireccionarAcciones">Regresar</a></li>
                    </div>
                </ul>
            </nav>
        </header>

         <h1>Lista de productos</h1>

         <form class="seccionbuscar" method="POST" action="index.php?c=productos&f=buscar">
            <label for="nombre" style="font-size: 20px;">Nombre del producto:</label> <input type="text" name="nombre" id="nombre"> <br> <br>
            <input type="submit" name="buscar" value="Buscar" class="btn_buscar"><br> <br>
        </form>

        <div class ="tabla">
            <table>
                <thead>
                    <tr>
                        <th>ID Producto</th>
                        <th>Nombre de Productos</th>
                        <th>Formulación</th>
                        <th>Indicaciones</th>
                        <th>Dosis y Administración</th>
                        <th>Presentación Comercial</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($resultados as $fila) {
                        ?>
                        <tr>
                            <td><?php echo $fila['id_producto'] ?></td>
                            <td><?php echo $fila['nombre_producto'] ?></td>
                            <td><?php echo $fila['formulacion'] ?></td>
                            <td><?php echo $fila['indicaciones'] ?></td>
                            <td><?php echo $fila['dosis_administracion'] ?></td>
                            <td><?php echo $fila['presentacion_comercial']?></td>
                            <td>
                                <a class="editar" href="index.php?c=productos&f=actualizar&id_producto=<?php echo $fila['id_producto'];?>">Editar</a>
                                <a class="eliminar" href="index.php?c=productos&f=eliminar&id_producto=<?php echo $fila['id_producto'];?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        
    </body>
</html>