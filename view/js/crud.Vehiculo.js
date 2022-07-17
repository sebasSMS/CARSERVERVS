const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');
const expresiones = {
    placa: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
    marca: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // 7 a 14 numeros.
    cilindraje: /^[a-zA-Z0-9\_\-]{1,5}$/, // Letras, numeros, guion y guion_bajo
    linea: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    clase: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    modelo: /^\d{2,5}$/,//2a 4nuemro
    nueroDeMotor: /^[a-zA-Z0-9]{4,30}$/, // Letras, numeros, guion y guion_bajo

}
const campos = {
    placa:false,
    marca:false,
    cilindraje:false,
    linea:false,
    clase:false,
    modelo:false,
    nueroDeMotor:false
}
const validarFormulario = (e) => {
    switch (e.target.name){
        case "txtPlaca":
            validarCampo(expresiones.placa, e.target, 'Placa');
        break;
        case "txtMarca":
            validarCampo(expresiones.marca, e.target, 'Marca');
        break;
        case "txtCilindraje":
            validarCampo(expresiones.cilindraje, e.target, 'Cilindraje');
        break;
        case "txtLinea":
            validarCampo(expresiones.linea, e.target, 'Linea');
        break;
        case "txtClase":
            validarCampo(expresiones.clase, e.target, 'Clase');
        break;
        case "txtModelo":
            validarCampo(expresiones.modelo, e.target, 'Modelo');
        break;
        case "txtNumeroDeMotor":
            validarCampo(expresiones.nueroDeMotor, e.target, 'Numero');
        break;
    }
    
}
const validarCampo = (expresiones,input,campo) => {
    if(expresiones.test(input.value)){
        document.getElementById(`grupo${campo}`).classList.remove('form-groun-incorrecto');
        document.getElementById(`grupo${campo}`).classList.add('form-groun-correcto');
        document.querySelector(`#grupo${campo} i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo${campo} i`).classList.remove('fa-times-circle');
        document.querySelector(`#grupo${campo} .error`).classList.remove('error-activo');
        campos[campo] = true;
    }else{
        document.getElementById(`grupo${campo}`).classList.add('form-groun-incorrecto');
        document.getElementById(`grupo${campo}`).classList.remove('form-groun-correcto');
        document.querySelector(`#grupo${campo} i`).classList.add('fa-times-circle');
		document.querySelector(`#grupo${campo} i`).classList.remove('fa-check-circle');
        document.querySelector(`#grupo${campo} .error`).classList.add('error-activo');
        campos[campo] = false;
    }

}
inputs.forEach((input) =>{
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
    
})
function modificar(obj) {
    /* llamamos los campos del formulario modificar */
    mPlaca = document.getElementById('txtMPlaca');
    mMarca= document.getElementById('txtMMarca');
    mCilindraje = document.getElementById('txtMCilindraje');
    mLinea = document.getElementById('txtMLinea');
    mClase = document.getElementById('txtMClase');
    mModelo = document.getElementById('txtMModelo');
    mMotor = document.getElementById('txtMNumeroDeMotor');
  
    /* asignamos los datos a los campos de el formulario modificar */
  
    mPlaca.value = obj.children[0].innerHTML;
    mMarca.value = obj.children[1].innerHTML;
    mCilindraje.value = obj.children[2].innerHTML;
    mLinea.value = obj.children[3].innerHTML;
    mClase.value = obj.children[4].innerHTML;
    mModelo.value = obj.children[5].innerHTML;
    mMotor.value = obj.children[6].innerHTML;
}

