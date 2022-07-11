/* capturamso los elementos de la tabla con el atributo (obj) */
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
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!',

  }).then((result) => {

    if (result.isConfirmed) {
      
      window.location = "index.php?ruta=tableCliente&eliminar=" + obj.children[0].innerHTML;

    }


  })
  

}
