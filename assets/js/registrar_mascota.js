var form = document.querySelector("form");
form.addEventListener('submit', Validar);

function Validar(event) {
    var resultado = true;
    var txtID_mas = document.getElementById("id_msi");
    var txtDueno = document.getElementById("nombre_duei");
    var txtMascota = document.getElementById("nombre_msi");
    var txtRaza = document.getElementById("razai");
    var radiosGenero = document.getElementsByName("genero");
    var txtEdad = document.getElementById("edad");
    var txtTelefono = document.getElementById("telf");
    

    var letra = /^[a-z ,.'-]+$/i;// letrasyespacio   ///^[A-Z]+$/i;// solo letras
    var correo = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    var telefonoreg = /^[0-9]{10}$/g; // para validar datos que deban tener 10 numeros


    limpiarMensajes();

    //validar id de la mascota

    if(txtID_mas.value === ''){
        flag = false;
        Mensaje("Debe Llenar este campo",txtID_mas);    
    }

    //  Validar Nombre  del dueño    
    if (txtDueno.value === '') {
        resultado = false;
        Mensaje("Debe Llenar este campo",txtDueno);    
    }else if(!letra.test(txtDueno.value)){
        resultado = false;
        Mensaje("Solo letras", txtDueno);
    }

    //  Validar Nombre de la mascota
    if (txtMascota.value === '') {
        resultado = false;
        Mensaje("Debe Llenar este campo",txtMascota);    
    }else if(!letra.test(txtMascota.value)){
        resultado = false;
        Mensaje("Solo letras", txtMascota);
    }
    
    //  Validar Raza
    if (txtRaza.value === '') {
        resultado = false;
        Mensaje("Debe Llenar este campo",txtRaza);    
    }else if(!letra.test(txtRaza.value)){
        resultado = false;
        Mensaje("Solo letras", txtRaza);
    }

    //Validar checkbox genero
    var sel = false;
    for (let i = 0; i < radiosGenero.length; i++) {
        if (radiosGenero[i].checked) {
            sel = true;
            let res=radiosGenero[i].value;
            
            break;
        }
    }
    if (!sel) {
        resultado = false;
        Mensaje("Debe seleccionar un genero", radiosGenero[0]);
    }

    //  Validar Edad
    if (txtEdad.value === '') {
        resultado = false;
        Mensaje("Debe Llenar este campo",txtEdad);    
    }

    // Validar Telefono
    if (txtTelefono.value === '') {
        resultado = false;
        Mensaje("Telefono es requerido", txtTelefono);
    } else if(!telefonoreg.test(txtTelefono.value)){
        resultado = false;
        Mensaje("Debe tener 10 digitos", txtTelefono);
    }

    if(!resultado){
        event.preventDefault();  // detener el evento  //stop form from submitting
    }
}

function Mensaje(cadenaMensaje, elemento) {
    elemento.focus();
    var nodoPadre = elemento.parentNode;
    var nodoMensaje = document.createElement("span");
    nodoMensaje.setAttribute("class", "mensajeError"); 
    nodoMensaje.textContent = cadenaMensaje; 
    nodoMensaje.style.color = "red";
    nodoMensaje.style.fontSize = "12px";
    nodoPadre.appendChild(nodoMensaje);
}

function limpiarMensajes() {
    var mensajes = document.querySelectorAll(".mensajeError");
    for (let i = 0; i < mensajes.length; i++) {
        mensajes[i].remove();// remueve o elimina un elemento de mi doc html
    }
}
