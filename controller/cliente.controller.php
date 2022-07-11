<?php
    class ControllerCliente{
        public function crtInsertarCliente($cedula,$nombre,$apellido,$celular,$correo,$placa){

            $ojbDtoCliente = new Clientes($cedula,$nombre,$apellido,$celular,$correo,$placa);
            $ojbDaoCliente = new ModelClientes($ojbDtoCliente);
            if ($ojbDaoCliente -> mldInsertarCliente()){
                echo "<script>
                Swal.fire(
                    'GOOD',
                    'Usuario insertado',
                    'success'
                  )
                ;</script>";

            }else{
                echo "cliente no insertado";
            }
            


        }
        public function ctrListarCliente(){
            $array = false; 
            try {
                $ojbDtoCliente = new Clientes(null,null,null,null,null,null);
                $ojbDaoCliente = new ModelClientes($ojbDtoCliente);
                $array =  $ojbDaoCliente -> mdlListarClientes() -> fetchALL();
            } catch (\Throwable $e) {
                echo"Error en el controlador $e";
            }
            return $array;

        }
        public function ctrModificarCliente(){
            $ojbDtoCliente = new Clientes(
                $_POST['txtMCedula'],
                $_POST['txtMNombre'],
                $_POST['txtMApellido'],
                $_POST['txtMCelular'],
                $_POST['txtMCorreo'],
                $_POST['txtMPlaca']

            );

            $ojbDaoCliente = new ModelClientes($ojbDtoCliente);
            $ojbDaoCliente -> mdlModificarClientes();
            if ($ojbDaoCliente == true) {
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
                            window.location='index.php?ruta=tableCliente';
                        }else{
                            window.location='index.php?ruta=tableCliente';
                        }
                      })
                    </script>
                    ";
            }
                
            
            else{
                echo "<script>
                    Swal.fire(
                        'GOOD',
                        'Cliente no se pudo Modificado',
                        'danger'
                      )
                    ;</script>
                    ";
            }
        }
        public function ctrEliminarCliente(){
            $ojbDtoCliente = new Clientes(
                $_GET['eliminar'],
                null,
                null,
                null,
                null,
                null


            );

            $ojbDaoCliente = new ModelClientes($ojbDtoCliente);
            ($ojbDaoCliente -> mdlEliminarClientes());
            echo"<script>
                window.location='index.php?ruta=tableCliente';
            </script>";

      
        }
        
    } /* end of class */

?>
