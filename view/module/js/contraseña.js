//validacion de usuario y contraseña
let usua = document.getElementById("usuario");
let con = document.getElementById("contraseña");
let login = document.getElementById("boton") ;
let ven = document.getElementById("cambiar") ;


login.addEventListener ("click", function() {
    if(usua.value == ""){
        Swal.fire(
            'Usurio',
            'El campo usuario esta vacio',
            'error'
          )
          
          return;
    }else if  (con.value == ""){
        Swal.fire(
            '   contraseña',
            'El campo contraseña esta vacio',
            'error'
          )
        return;
    }else if (usua.value == "sebax" && con.value == 345 ){
        window. open('menu.html')
    }else{
        alert("usuario no existe");
    }
   
})





//funcion para poder ocultar y mostras la contraseña
function myFunction() {
    var x = document.getElementById("Contraseña")
    var y = document.getElementById("ver")
    var z = document.getElementById("noVer")
    if (x.type == 'password'){
        x.type = "text";
        y.style.display = "block";
        z.style.display = "none";

    }else{
        x.type = "password";
        y.style.display = "none";
        z.style.display = "block";
    }
    
}




