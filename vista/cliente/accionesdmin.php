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
        <div class="contenedorForm">
            <form class="registro_empleado" action="index.php?c=usuario&f=" method="POST" > 
                <img src="/assets/img/registro.png" alt="mostrar">
                <input class="registrar_empleados" class="boton" type="submit" value="Registrar empleados">
            </form>
        </div>

        <div class="contenedorForm">
            <form class="mostrar_empleado" action="index.php?c=&f=" method="POST" > 
                <img src="/assets/img/busqueda.png" alt="mostrar">
                <input class="mostrar_empleados" class="boton" type="submit" value="Mostrar Empleados">
            </form>
        </div>

        <div class="contenedorForm">
            <form class="mostrar_cliente" action="index.php?c=usuario&f=listar" method="POST" > 
                <img src="/assets/img/busqueda.png" alt="mostrar">
                <input class="mostrar_clientes" class="boton" type="submit" value="Mostrar clientes">
            </form>
        </div>
    </main>
</body>
</html>