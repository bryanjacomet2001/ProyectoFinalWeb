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
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            :root{
                --primary-color: #47cfac;
                --secondary-color: #006790;
                --terciary-color: #098a81;
            }

            html{
                font-size: 62.5%;
            }

            header{
                width: 100%;
                height: 130px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 0 20px;
                font-size: 1.8rem;
                
                background-color: var(--primary-color);
                
            }
            .header-logo img{
                width: 140px;
                margin-left: 30px;
            }
            .header-navbar{
                min-width: 500px;
                width: 800px;
            }
            .header-navbar ul{
                width: 100%;
                display: flex;
                justify-content: space-around;
            }

            ul{
                list-style: none;
                display: flex;
            }

            a{
                text-decoration: none;
                font-weight: bold;
                color: var(--secondary-color);
            }

            a:hover{
                color: var(--secondary-color);
                text-decoration: underline;
            }

            body{
                font-size: 2rem;
            }

           

            body h1{
                text-align: center;
                color:#47cfac;
                padding: 10px;
            }

            .registrar{
                border: solid black 1px;
                text-align: center;
                border-radius: 10px;
                background-color: skyblue;
                padding: 10px;
                width: 100px;
                margin-left: 650px;
            }


            table {
                border: #47cfac 1px solid;
            }
            
            td, th {
                border: #47cfac 1px solid;
            }
            
            .buscar{
                display: flex;
                justify-content: center;
            }

            .tabla{
                margin-top: 10px;
                padding: 40px;
                margin-left: 200px;
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

         <h1>Lista de mascotas</h1>

         <form class="buscar" method="post" action="index.php?c=contactenos&f=buscar">
            Id de Mascota: <input type="text" name="id_mas" > <br> <br>
            <input type="submit" name="buscar" value="Buscar"><br> <br>
        </form>


        <div class ="tabla">
            <table>
                <thead>
                    <tr>
                        <th>ID_MASCOTA</th>
                        <th>DUEÑO</th>
                        <th>NOMBRE DE LA MASCOTA</th>
                        <th>RAZA</th>
                        <th>GENERO</th>
                        <th>EDAD</th>
                        <th>TELEFONO</th>
                        <th>OPCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                     foreach ($resultados as $fila) {
                        ?>
                        <tr>
                            <td><?php echo $fila['id_ms'] ?></td>
                            <td><?php echo $fila['nombre_due'] ?></td>
                            <td><?php echo $fila['nombre_ms'] ?></td>
                            <td><?php echo $fila['raza'] ?></td>
                            <td><?php echo $fila['genero']?></td>
                            <td><?php echo $fila['edad']?></td>
                            <td><?php echo $fila['telf']?></td>
                            <td>
                                <a href="index.php?c=contactenos&f=frmact&id_ms=<?php echo $fila['id_ms'];?>">Editar</a>
                                <a href="index.php?c=contactenos&f=eliminar&id_ms=<?php echo $fila['id_ms'] ?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        
    </body>
</html>