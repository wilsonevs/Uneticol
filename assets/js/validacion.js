
// Validar Formulario
function validater(){
  
    let nombre=document.getElementById("nombre").value;
    let email=document.getElementById('email').value;
    let numero=document.getElementById('numero').value;
    let dirrecion=document.getElementById('dirrecion').value;
    let ciudad=document.getElementById('ciudad').value;
    let servicio=document.getElementById('servicio').value;
    let mensaje=document.getElementById('mensaje').value;
    let validar=document.getElementById('terminos').checked;

    if (nombre === "") {
        Swal.fire('¡Por favor! Ingresar tu Nombre.');
        return false;
    } else if (email === "") {
        Swal.fire('¡Por favor! Ingresar tu Correo.');
        return false;
    } else if (numero === "") {
        Swal.fire('¡Por favor! Ingresar tu Número Telefonico.');
        return false;
    } else if (isNaN(numero)) {
        Swal.fire('¡Por favor! Ingresar tu Número Telefonico.');
        return false;
    }else if (numero.length < 7) {
        Swal.fire('Número debe contener entre 7 o 10 Digitos');
        return false;
    } else if (numero.length > 10) {
        Swal.fire('Número debe contener entre 7 o 10 Digitos');
        return false; 
    }else if (dirrecion === "") {
        Swal.fire('¡Por favor! Ingresar tu Dirreción del Servicio.');
        return false;
    }else if(ciudad === "") {
        Swal.fire('¡Por favor! Ingresar la Ciudad.');
        return false;
    }else if(servicio === "") {
        Swal.fire('¡Por favor! Ingresar el Servicio que deseas adquirir.');
        return false; 
    }else if(mensaje === "") {
        Swal.fire('¡Por favor! Ingresar una breve descripción');
        return false;
    }else if(validar === false){    
      Swal.fire('¡Por favor! Autorizar tratamiento de datos');
        return false;
    }    
}





// validador de Usuario y contraseña
function validater_user(){
    let user=document.getElementById('user_user').value;
    let pass=document.getElementById('user_password').value;

    if ((user == null || user.length == 0 || /^\s+$/.test(user))) {
        Swal.fire("¡Por favor! Ingresar el usuario.");
        return false;
    }else if((pass == null || pass.length == 0 || /^\s+$/.test(pass))){
        Swal.fire("¡Por favor! Ingresar una contraseña.");
        return false;
    }
    
    // if( user ==="admin" &&  pass ==="2020"){
    //   header
    // }else{
    //   Swal.fire("Ingresa usuario o contraseña correctamente.");
    //     return false
    // }
    
    // if(user ==="admon" && pass ==="linauneticol2020"){
    // }else{
    //   Swal.fire("Ingresa usuario o contraseña correctamente.");
    //   return false
    // }
}



  //Permite deslizar entre secciones

  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();

      document.querySelector(this.getAttribute('href')).scrollIntoView({
        behavior: 'smooth'
      });
    });
  });


//   Cookies


/* ésto comprueba la localStorage si ya tiene la variable guardada */

function compruebaAceptaCookies() {
  if(localStorage.aceptaCookies == 'true'){
    cajacookies.style.display = 'none';
  }
}

/* aquí guardamos la variable de que se ha
aceptado el uso de cookies así no mostraremos
el mensaje de nuevo */
function aceptarCookies() {
  localStorage.aceptaCookies = 'true';
  cajacookies.style.display = 'none';
}

/* ésto se ejecuta cuando la web está cargada */
$(document).ready(function () {
  compruebaAceptaCookies();
});
