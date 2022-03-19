var form = document.querySelector("#formNosotros");

form.addEventListener('submit', validar);
function validar(event){
    limpiarMensajes();
    var resultado=true;

    var txtTestimonio = document.getElementById("testimonio");//testimonio
    var cmbCalificacion = document.querySelector("#calificacion");//calificacion
    var chkTerminos = document.getElementById("terminos");//terminos

    var letra = /^[a-z ,.'-]+$/i;// letrasyespacio   ///^[A-Z]+$/i;// solo letras
    var correo = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

    

    //validacion select
    if (cmbCalificacion.value === null || cmbCalificacion.value === '0') {
        resultado = false;
        mensaje("*Calificacion obligatoria", cmbCalificacion);
    }

    //validacion de un checkbox
    if(!chkTerminos.checked){
        resultado=false;
        mensaje("*Campo obligatorio", chkTerminos);
    }
    //validacion del TextoArea
    if(txtTestimonio.value ===""){
        resultado=false;
        mensaje("*Testimonio obligatorio", txtTestimonio);
    }
   


    if(!resultado){
        event.preventDefault();  // detener el evento  
    }

    function mensaje(cadenaMensaje, elemento) {
        elemento.focus();
        var nodoPadre = elemento.parentNode;
        var nodoMensaje = document.createElement("span"); 
        nodoMensaje.textContent = cadenaMensaje; 
        nodoMensaje.style.color = "red";
        nodoMensaje.setAttribute("class", "mensajeError"); 
        nodoPadre.appendChild(nodoMensaje);
    
    }
    function limpiarMensajes() {
        var mensajes = document.querySelectorAll(".mensajeError");
        for (let i = 0; i < mensajes.length; i++) {
            mensajes[i].remove();// remueve o elimina un elemento de mi doc html
        }
    
    }
}