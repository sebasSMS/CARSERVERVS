const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');
const expresiones = {
	cedula: /^\d{7,10}$/, // 7 a 14 numeros.
	usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	apellido: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	password: /^.{4,12}$/, // 4 a 12 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	celular: /^\d{7,14}$/ ,// 7 a 14 numeros.
    placa: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
} 
const campos = {
    cedula:false,
    nombre:false,
    apellido:false,
    celular:false,
    correo:false,
    placa:false

}  
const validarFormulario = (e) => {
    switch (e.target.name){
        case "txtCedula":
            validarCampo(expresiones.cedula, e.target, 'Cedula');
        break;
        case "txtNombre":
            validarCampo(expresiones.nombre, e.target, 'Nombre');
        break;
        case "txtApellido":
            validarCampo(expresiones.apellido, e.target, 'Apellido');
        break;
        case "txtCelular":
            validarCampo(expresiones.celular, e.target, 'Celular');
        break;
        case "txtCorreo":
            validarCampo(expresiones.correo, e.target, 'Correo');
        break;
        case "txtPlaca":
            validarCampo(expresiones.placa, e.target, 'Placa');
        break;
    }
    
}
const validarCampo = (expresiones,input,campo) => {
    if(expresiones.test(input.value)){
        document.getElementById(`grupo${campo}`).classList.remove('form-groun-incorrecto');
        document.getElementById(`grupo${campo}`).classList.add('form-groun-correcto');
        document.querySelector(`#grupo${campo} .error`).classList.remove('error-activo');
        document.querySelector(`#grupo${campo} .i`).classList.remove('fa-solid fa-circle-xmark');
        document.querySelector(`#grupo${campo} .i`).classList.add('fa-solid fa-circle-check');

        campos[campo] = true;
    }else{
        document.getElementById(`grupo${campo}`).classList.add('form-groun-incorrecto');
        document.getElementById(`grupo${campo}`).classList.remove('form-groun-correcto');
        document.querySelector(`#grupo${campo} .error`).classList.add('error-activo');
        campos[campo] = false;
    }
}
inputs.forEach((input) =>{
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
    
})
formulario.addEventListener('submit',(e) =>{
    e.preventDefault();
    if(campos.cedula  && campos.nombre && campos.apellido && campos.celular && campos.correo && campos.placa){
        alert('hola');

    }else{
        alert("error");
    }
})