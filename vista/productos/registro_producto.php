<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style-registro.css">
    <title>Veterinaria - Registro de productos</title>
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
            <li><a href="index.php?c=navegacion&f=RedireccionarAcciones">Regresar</a></li>

        </ul>
        </nav>
    </header>

    <main>
        <div class="contenedorForm">
            <form class="formulario_registro" action="index.php?c=productos&f=insertar" method="POST" > 
                
                <h1>Formulario registrar productos</h1> <br>

                <div class="contenido">
                <div class="label"><label for="nombre">Ingrese el nombre del producto: </label></div>
                <div class="datos"><input type="text" placeholder="Nombre del producto" name="nombre" id="nombre"></div>
                </div>

                <div class="contenido">
                <div class="label"><label for="formulacion">Ingrese la formulación:</label> </div>
                <div class="datos"><input type="text" placeholder="Escriba la formulacion" name="formulacion" id="formulacion"></div>
                </div>
                
                <div class="contenido">
                <div class="label"><label for="indicaciones">Ingrese las indicaciones: </label></div>
                <div class="datos"><input type="text" placeholder="Escriba las indicaciones" name="indicaciones" id="indicaciones"></div>
                </div>

                <div class="contenido">
                <div class="label"><label for="dosis_administracion">Ingrese la dosis y administracion: </label></div>
                <div class="datos"><input type="text" placeholder="Escriba la dosis y administracion" name="dosis_administracion" id="dosis_administracion"></div>
                </div>


                <div class="contenido">
                <div class="label"><label for="presentacion">Ingrese la presentación comercial: </label></div>
                <div class="datos"><input type="text" placeholder="Ingrese la presentación comercial" name="presentacion" id="presentacion"></div> 
                </div> <br>

                
                <input class="boton" type="submit" value="Registrar">
            </form>
        </div>
    </main>

    

</body>
</html>