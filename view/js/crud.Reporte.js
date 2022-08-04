function modificar(obj) {
    /* llamamos los campos del formulario modificar */

    midReporte = document.getElementById('txtMReporte');
    mPlaca = document.getElementById('txtMPlaca');
    mServico = document.getElementById('txtMServico');
    mPunto = document.getElementById('txtMPunto');
    mKilometraje = document.getElementById('txtMKilometraje');
    mTecnico = document.getElementById('txtMTecnico');
    mDescrpcion = document.getElementById('txtMDescripcion');

    /* asignamos los datos a los campos de el formulario modificar */

    midReporte.value = obj.children[0].innerHTML;
    mServico.value = obj.children[1].innerHTML;
    mPunto.value = obj.children[2].innerHTML;
    mKilometraje.value = obj.children[3].innerHTML;
    mTecnico.value = obj.children[4].innerHTML;
    mDescrpcion.value = obj.children[5].innerHTML;
    mPlaca.value = obj.children[6].innerHTML;
}
function eliminar(obj) {
    Swal.fire({
        title: 'Esta seguro de eliminar este Cliente?',
        text: "Eliminar Reporte!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'




    }).then((result) => {

        if (result.isConfirmed) {
            Swal.fire({
                title: 'Eliminado',
                text: "Eliminar Reporte!",
                icon: 'success',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Ok!',
                timerProgressBar: true,
                timer: 4000
            }).then((result) => {

                if (result.isConfirmed) {

                    window.location = "index.php?ruta=tableReporteGeneral&ELIMINAR=" + obj.children[0].innerHTML;

                } else {
                    window.location = "index.php?ruta=tableReporteGeneral&ELIMINAR=" + obj.children[0].innerHTML;


                }

            })


        }

    })


}

