<?php
    class ControllerVehiculo{
/*        ---------- funcion para insertar vehiculo------- */
        public function crtInsertarVehiculo($placa,$marca,$cilindraje,$linea,$clase,$modelo,$numeroDeMotor,$idCedula){

            $objDtoVehiculos = new Vehiculos($placa,$marca,$cilindraje,$linea,$clase,$modelo,$numeroDeMotor,$idCedula);
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
                        window.location='index.php?ruta=tableVehiculos';
                    }else{
                        window.location='index.php?ruta=tableVehiculos';
                    }
                  })
                </script>
                ";

            }else{
                echo "cliente no insertado";
            }
            


        }
        public function ctrListarCedulaDeClientes(){ 
            $lista = false;
            try {
                $objDtoVehiculo = new Vehiculos(null,null,null,null,null,null,null,null);
                $objDaoVehiculo = new ModelVehiculo( $objDtoVehiculo );
                $lista = $objDaoVehiculo -> mdlListarCedulaCliente() -> fetchAll();

            } catch (PDOException $e) {
                echo "error al mostrar al cedula del cliente" . $e -> getMessage();
            }
            return $lista;
        }

        public function ctrListarVehiculo(){
            $array = false; 
            try {
                $objDtoVehiculo = new Vehiculos(null,null,null,null,null,null,null,null);
                $objDaoVehiculo = new ModelVehiculo($objDtoVehiculo);
                $array =  $objDaoVehiculo -> mdlListarVehiculo() -> fetchALL();
            } catch (\Throwable $e) {
                echo"Error en el controlador de lsitar vehiculo $e";
            }
            return $array;

        }

        public function ctrModificarVehiculo(){
            $ojbDtoVehiculo = new Vehiculos(
                $_POST['txtMPlaca'],
                $_POST['txtMMarca'],
                $_POST['txtMCilindraje'],
                $_POST['txtMLinea'],
                $_POST['txtMClase'],
                $_POST['txtMModelo'],
                $_POST['txtMNumeroDeMotor'],
                $_POST['txtMIdCliente']
                
            );
    

            $ojbDaoVehiculo = new ModelVehiculo($ojbDtoVehiculo);
            if ($ojbDaoVehiculo -> mdlModificarVehiculo()==  true){

                echo"
                    <script>
                    Swal.fire({
                        title: 'EXTIO',
                        text: 'SU VEHICULO A SIDO MODIFICADO CON EXITO',
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