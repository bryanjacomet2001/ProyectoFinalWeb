<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style_acciones_admin.css">
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
            <div class="perfil_usuario">
                <li><a href="#"><a href="#"><?php echo $_SESSION['user']?></a></li>
                <li><a href="index.php?c=navegacion&f=salir">Cerrar Sesión</a></li>
            </div>
        </ul>
        </nav>
    </header>

    <main>
        <?php if($_SESSION['rol'] == "administrador"){ ?>
            <div class="acciones_admin">
       
                <div class="contenedorForm">
                    <form class="mostrar_empleado" action="index.php?c=usuario&f=listarEmpleado" method="POST" > 
                        <img src="/assets/img/busqueda.png" alt="mostrar">
                        <input class="mostrar_empleados" class="boton" type="submit" value="Mostrar Empleados">
                    </form>
                </div>

                <div class="contenedorForm">
                    <form class="mostrar_cliente" action="index.php?c=usuario&f=listarCliente" method="POST" > 
                        <img src="/assets/img/busqueda.png" alt="mostrar">
                        <input class="mostrar_clientes" class="boton" type="submit" value="Mostrar clientes">
                    </form>
                </div>
            </div>
        <?php 
        }
        else{?>
                <div class="acciones_admin">
                <div class="contenedorForm">
                    <form class="mostrar_mascotas" action="index.php?c=contactenos&f=listar" method="POST" > 
                        <img src="/assets/img/busqueda.png" alt="mostrar">
                        <input class="registrar_empleados" class="boton" type="submit" value="Mostrar mascotas">
                    </form>
                </div>

                <div class="contenedorForm">
                    <form class="mostrar_empleado" action="index.php?c=&f=" method="POST" > 
                        <img src="/assets/img/busqueda.png" alt="mostrar">
                        <input class="mostrar_empleados" class="boton" type="submit" value="Mostrar productos">
                    </form>
                </div>

                <div class="contenedorForm">
                    <form class="mostrar_cliente" action="index.php?c=usuario&f=listarCliente" method="POST" > 
                        <img src="/assets/img/busqueda.png" alt="mostrar">
                        <input class="mostrar_clientes" class="boton" type="submit" value="Mostrar clientes">
                    </form>
                </div>
            </div>

        <?php 
        }
        ?>
    </main>
</body>
</html>