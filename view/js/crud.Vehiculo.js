
function modificar(obj) {
    /* llamamos los campos del formulario modificar */
    mPlaca = document.getElementById('txtMPlaca');
    mMarca = document.getElementById('txtMMarca');
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





function eliminar(obj) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!',

    }).then((result) => {

        if (result.isConfirmed) {
            Swal.fire({
                title: 'Are you sure?',
                text: "usuario eliminado!",
                icon: 'success',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Ok!'

            }).then((result) => {

                if (result.isConfirmed) {

                    window.location = "index.php?ruta=tableVehiculos&eliminar=" + obj.children[0].innerHTML

                } else {
                    window.location = "index.php?ruta=tableVehiculos&eliminar=" + obj.children[0].innerHTML

                }

            })


        }

    })


}

