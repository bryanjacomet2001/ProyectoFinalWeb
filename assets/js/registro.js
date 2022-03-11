var form = document.querySelector("form");
form.addEventListener('submit', Validar);

var botonesEliminar = document.querySelectorAll(".eliminar");

for (let i = 0; i < botonesEliminar.length; i++) {
    botonesEliminar[i].addEventListener('click',ConfirmarEliminacion);
}


function Validar(e) {
    var txtCedula = document.querySelector(".formulario_registro #cedula");
    var txtNombre = document.querySelector(".formulario_registro #nombre");
    var txtApellido = document.querySelector(".formulario_registro #apellido");
    var txtUsername = document.querySelector(".formulario_registro #username");
    var txtEmail = document.querySelector(".formulario_registro #correo");
    var txtContraseña = document.querySelector(".formulario_registro #contraseña");
   

    var letra = /^[a-z ,.'-]+$/i;// letrasyespacio   ///^[A-Z]+$/i;// solo letras
    var correo = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    var cedula = /^[0-9]{10}$/g; // para validar datos que deban tener 10 numeros
    var flag = true;

    limpiarMensajes();

    //validar cedula
    if(txtCedula.value === ''){
        flag = false;
        Mensaje("Debe Llenar este campo",txtCedula);    
    }
    //  Validar Nombre      
    if (txtNombre.value === '') {
        flag = false;
        Mensaje("Debe Llenar este campo",txtNombre);    
    }else if(!letra.test(txtNombre.value)){
        flag = false;
        Mensaje("Solo letras", txtNombre);
    }
    //  Validar Apellido
    if (txtApellido.value === '') {
        flag = false;
        Mensaje("Debe Llenar este campo",txtApellido);    
    }else if(!letra.test(txtApellido.value)){
        flag = false;
        Mensaje("Solo letras", txtApellido);
    }
    //validar username
    if(txtUsername.value === ''){
        flag = false;
        Mensaje("Debe llenar este campo", txtUsername);
    }
    //Validar Contraseña
    if(txtContraseña.value ===''){
        flag = false;
        Mensaje("Debe ingresar una contraseña",txtContraseña);
    }
    //  Validar E-mail
    if (txtEmail.value === "") {
        flag = false;
        Mensaje("Email es requerido", txtEmail);
    } else if (!correo.test(txtEmail.value)) {
        flag = false;
        Mensaje("Email no es correcto", txtEmail);
    }

    if(!flag) {
        e.preventDefault();
    }
}

var formLogin = document.querySelector(".login__container--form");
formLogin.addEventListener('submit',validarLogin);


function validarLogin(e){
    var txtuser = document.querySelector(".login__container--form #username");
    var txtcontra = document.querySelector(".login__container--form #contraseña");
    var flag = true;

    if(txtuser.value == ''){
        flag = false; 
    }

    if(txtcontra.value == ''){
        flag = false;
    }

    if(!flag){
        alert("Existen campos vacios");
        e.preventDefault();
    }
}

function Mensaje(cadenaMensaje, elemento) {
    elemento.focus();
    var nodoPadre = elemento.parentNode;
    var nodoMensaje = document.createElement("p");
    nodoMensaje.setAttribute("class", "mensajeError"); 
    nodoMensaje.textContent = cadenaMensaje; 
    nodoMensaje.style.color = "red";
    nodoMensaje.style.fontStyle="italic";
    nodoMensaje.display = "block";
    nodoMensaje.style.fontWeight = "bold";
    nodoMensaje.style.fontSize = "12px";
    nodoPadre.appendChild(nodoMensaje);
}

function limpiarMensajes() {
    var mensajes = document.querySelectorAll(".mensajeError");
    for (let i = 0; i < mensajes.length; i++) {
        mensajes[i].remove();// remueve o elimina un elemento de mi doc html
    }
}

function ConfirmarEliminacion(e){
    if (!confirm('Esta seguro de eliminar el producto?')){
        e.preventDefault();
    }
}


