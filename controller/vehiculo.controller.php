<?php
    class ControllerVehiculo{
/*        ---------- funcion para insertar vehiculo------- */
        public function crtInsertarVehiculo($placa,$marca,$cilindraje,$linea,$clase,$modelo,$numeroDeMotor){

            $objDtoVehiculos = new Vehiculos($placa,$marca,$cilindraje,$linea,$clase,$modelo,$numeroDeMotor);
            $objDaoVehiculo = new ModelVehiculo($objDtoVehiculos);
            if ($objDaoVehiculo -> mldInsertarVehiculo()){

                echo"
                <script>
                Swal.fire({
                    title: 'good',
                    text: ' Vehiculo insertado',
                    icon: 'success',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ok!'
                  }).then((result) => {
                    if (result.isConfirmed) {
                        window.location='index.php?ruta=vehiculos';
                    }else{
                        window.location='index.php?ruta=vehiculos';
                    }
                  })
                </script>
                ";

            }else{
                echo "cliente no insertado";
            }
            


        }
        public function ctrListarVehiculo(){
            $array = false; 
            try {
                $objDtoVehiculo = new Vehiculos(null,null,null,null,null,null,null);
                $objDaoVehiculo = new ModelVehiculo($objDtoVehiculo);
                $array =  $objDaoVehiculo -> mdlListarVehiculo() -> fetchALL();
            } catch (\Throwable $e) {
                echo"Error en el controlador de lsitar vehiculo $e";
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
        public function ctrModificarVehiculo(){
            $ojbDtoVehiculo = new Vehiculos(
                $_POST['txtMPlaca'],
                $_POST['txtMMarca'],
                $_POST['txtMCilindraje'],
                $_POST['txtMLinea'],
                $_POST['txtMClase'],
                $_POST['txtMModelo'],
                $_POST['txtMNumeroDeMotor']
            );
    

            $ojbDaoVehiculo = new ModelVehiculo($ojbDtoVehiculo);
            if ($ojbDaoVehiculo -> mdlModificarVehiculo()==  true){

                echo"
                    <script>
                    Swal.fire({
                        title: 'EXTIO',
                        text: 'SU Vehiculo A SIDO MODIFICADO CON EXITO',
                        icon: 'success',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                      }).then((result) => {
                        if (result.isConfirmed) {
                            window.location='index.php?ruta=tableVehiculos';
                        }else{
                            window.location='index.php?ruta=tableVehiculos';
                        }
                      })
                    </script>
                    ";
            }
            else{
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
        public function ctrEliminarVehiculo(){
            $ojbDtoVehiculo = new Vehiculos(
                $_GET['eliminar'],
                null,
                null,
                null,
                null,
                null,
                null


            );

            $ojbDaoVehiculo = new ModelVehiculo($ojbDtoVehiculo);
            ($ojbDaoVehiculo -> mdlEliminarVehiculos());
            echo"<script>
                window.location='index.php?ruta=tableVehiculos';
            </script>";

      
        }


    }

?>