<?php
    class ControllerUsuario{
        public function crtInsertarUsuario($cedula,$nombre,$apellido,$celular,$correo,$rol){

            $objDtoUsuario = new Usuario($cedula,$nombre,$apellido,$celular,$correo,$rol);
            $objDaoUsuario = new ModelUsuario($objDtoUsuario);
            if ($objDaoUsuario -> mldInsertarUsuario()){
                echo"
                <script>
                Swal.fire({
                    title: 'GOOD',
                    text: ' USUARIO INSERTADO',
                    icon: 'success',
                    timerProgressBar:true,
                    timer:4000,
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ok!'
                  }).then((result) => {
                    if (result.isConfirmed) {
                        window.location='index.php?ruta=tableUsuario';
                    }else{
                        window.location='index.php?ruta=tableUsuario';
                    }
                  })
                </script>
                ";

            }else{
                echo "cliente no insertado";
            }
            


        }
        
        public function ctrMostrarRol(){ 
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
        public function ctrListarUsuario(){
            $array = false; 
            try {
                $objDtoUsuario = new Usuario(null,null,null,null,null,null);
                $objDaoUsuario = new ModelUsuario($objDtoUsuario);
                $array =  $objDaoUsuario -> mdlListarUsuario() -> fetchALL();
            } catch (\Throwable $e) {
                echo"Error en el controlador $e";
            }
            return $array;

        }
        public function ctrModificarUsuario(){
            $ojbDtoUsuario = new Usuario(
                $_POST['txtMCedula'],
                $_POST['txtMNombre'],
                $_POST['txtMApellido'],
                $_POST['txtMCelular'],
                $_POST['txtMCorreo'],
                $_POST['txtMRol']
                

            );
    

            $ojbDaoUsuario = new ModelUsuario($ojbDtoUsuario);
            if ($ojbDaoUsuario -> mdlModificarUsuario()==  true){

                echo"
                    <script>
                    Swal.fire({
                        title: 'EXTIO',
                        text: 'SU USUARIO A SIDO MODIFICADO CON EXITO',
                        icon: 'success',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                      }).then((result) => {
                        if (result.isConfirmed) {
                            window.location='index.php?ruta=tableUsuario';
                        }else{
                            window.location='index.php?ruta=tableUsuario';
                        }
                      })
                    </script>
                    ";
            }else{
                echo "<script>
                    Swal.fire(
                        'GOOD',
                        'Usuario no se pudo Modificado',
                        'danger'
                      )
                    ;</script>
                    ";
            }
        }
        public function ctrEliminarUsuario(){
            $ojbDtoUsuario = new Usuario(
                $_GET['eliminar'],
                null,
                null,
                null,
                null,
                null


            );

            $ojbDaoUsuario = new ModelUsuario($ojbDtoUsuario);
            ($ojbDaoUsuario -> mdlEliminarUsuarios());
            echo"<script>
                window.location='index.php?ruta=tableUsuario';
            </script>";

      
        }
    }
?>