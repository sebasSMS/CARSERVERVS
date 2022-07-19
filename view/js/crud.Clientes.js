const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');
const expresiones = {
    cedula: /^\d{7,10}$/, // 7 a 14 numeros.
    usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
    nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    apellido: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    password: /^.{4,12}$/, // 4 a 12 digitos.
    correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    celular: /^\d{7,14}$/,// 7 a 14 numeros.
    placa: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
}
const campos = {
    Cedula: false,
    Nombre: false,
    Apellido: false,
    Celular: false,
    Correo: false,
    Placa: false

}
const validarFormulario = (e) => {
    switch (e.target.name) {
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
const validarCampo = (expresion, input, campo) => {
    if (expresion.test(input.value)) {
        document.getElementById(`grupo${campo}`).classList.remove('form-groun-incorrecto');
        document.getElementById(`grupo${campo}`).classList.add('form-groun-correcto');
        document.querySelector(`#grupo${campo} i`).classList.add('fa-check-circle');
        document.querySelector(`#grupo${campo} i`).classList.remove('fa-times-circle');
        document.querySelector(`#grupo${campo} .error`).classList.remove('error-activo');
        campos[campo] = true;
    } else {
        document.getElementById(`grupo${campo}`).classList.add('form-groun-incorrecto');
        document.getElementById(`grupo${campo}`).classList.remove('form-groun-correcto');
        document.querySelector(`#grupo${campo} i`).classList.add('fa-times-circle');
        document.querySelector(`#grupo${campo} i`).classList.remove('fa-check-circle');
        document.querySelector(`#grupo${campo} .error`).classList.add('error-activo');
        campos[campo] = false;
    }
}
inputs.forEach((input) => {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);

})
formulario.addEventListener('submit', (e) => {
    e.preventDefault();
    if (campos.Cedula && campos.Nombre && campos.Apellido && campos.Celular && campos.Correo && campos.Placa) {
        formulario.submit();
    } else {
        Swal.fire({
            title: 'error!',
            text: 'Por favor rellene todos los campos correctamente.',
            icon: 'error',
            timer: 4000,
            timerProgressBar: true

        })
    }
})
/* capturamso los elementos de la tabla empleado con el atributo (obj) */
/* funcion para captural los datos y mostrarlos en el formulario de modificar */
function modificar(obj) {
    /* llamamos los campos del formulario modificar */
    mCedula = document.getElementById('txtMCedula');
    mNombre = document.getElementById('txtMNombre');
    mApellido = document.getElementById('txtMApellido');
    mCelular = document.getElementById('txtMCelular');
    mCorreo = document.getElementById('txtMCorreo');
    mPlaca = document.getElementById('txtMPlaca');

    /* asignamos los datos a los campos de el formulario modificar */

    mCedula.value = obj.children[0].innerHTML;
    mNombre.value = obj.children[1].innerHTML;
    mApellido.value = obj.children[2].innerHTML;
    mCelular.value = obj.children[3].innerHTML;
    mCorreo.value = obj.children[4].innerHTML;
    mPlaca.value = obj.children[5].innerHTML;
}

function eliminar(obj) {
    Swal.fire({
        title: 'Esta seguro de eliminar este Cliente?',
        text: "Eliminar cliente!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'




    }).then((result) => {

        if (result.isConfirmed) {
            Swal.fire({
                title: 'Eliminado',
                text: "Cliente eliminado!",
                icon: 'success',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Ok!',
                timerProgressBar: true,
                timer: 4000

            }).then((result) => {

                if (result.isConfirmed) {

                    window.location = "index.php?ruta=tableCliente&eliminar=" + obj.children[0].innerHTML;


                } else {
                    window.location = "index.php?ruta=tableCliente&eliminar=" + obj.children[0].innerHTML;


                }

            })


        }

    })


}
