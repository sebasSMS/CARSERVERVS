<?php
    //session_start();
    class ConexionController{
        public function ctrLogin($user, $pass){

            $objModConexion = new ModelConexion($user, $pass);
            $rest = $objModConexion -> getLogin() -> fetch();
            if(gettype($rest) != "boolean"){ // YES FIND

                $_SESSION["login"] = true;
                echo "<script>alert('YA HA INGRESADO');</script>";
            }else{
                echo "<script>
                Swal.fire(
                    'Error?',
                    'The password wrong?',
                    'error'
                  )
                ;</script>";
            }
        }
    }

?>