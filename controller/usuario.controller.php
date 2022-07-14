<?php
    class ControllerUsuario{
        public function crtInsertarUsuario($cedula,$nombre,$apellido,$celular,$correo,$rol){

            $objDtoUsuario = new Usuario($cedula,$nombre,$apellido,$celular,$correo,$rol);
            $objDaoUsuario = new ModelUsuario($objDtoUsuario);
            if ($objDaoUsuario -> mldInsertarUsuario()){
                echo"
                <script>
                Swal.fire({
                    title: 'good',
                    text: ' Usuario insertado',
                    icon: 'success',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ok!'
                  }).then((result) => {
                    if (result.isConfirmed) {
                        window.location='index.php?ruta=cliente';
                    }else{
                        window.location='index.php?ruta=cliente';
                    }
                  })
                </script>
                ";

            }else{
                echo "cliente no insertado";
            }
            


        }
        
        public function ctrMostrarRol(){ #Controlador de mostrar usuario
            $lista = false;
            try {
                $objDtoUsuario = new Usuario(NULL,NULL,NULL,NULL,NULL,NULL);
                $objDaoUsuario = new ModelUsuario( $objDtoUsuario );
                $lista = $objDaoUsuario -> mdlMostrarRol() -> fetchAll();

            } catch (PDOException $e) {
                echo "error al mostrar los Roles de usuarios" . $e -> getMessage();
            }
            return $lista;
        }
    }
?>