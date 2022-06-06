function validar(e){
    e.preventDefault();

    let cedula = document.getElementById('txtCedula');
    let nombre = document.getElementById('txtNombre');
    let apellido = document.getElementById('txtApellido');
    let correo = document.getElementById('txtCorreo');
    let celular = document.getElementById('txtCelular');
    let placa = document.getElementById('txtPlaca');
    let formulario = document.getElementById('formulario');

    let estado = true;

    if (cedula.value == ""){
        cedula.style.borderColor ="red";
        estado = false;
    }
    if (nombre.value == ""){
        nombre.style.borderColor ="red";
        estado = false;
    }
    if (apellido.value == ""){
        apellido.style.borderColor ="red";
        estado = false;
    }
    if (correo.value == ""){
        correo.style.borderColor ="red";
        estado = false;
    }
    if (celular.value == ""){
        celular.style.borderColor ="red";
        estado = false;
    }
    if (placa.value == ""){
        placa.style.borderColor ="red";
        estado = false;
    }

    if ( estado == true ) {
        formulario.submit();
    }
}