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
                $array =  $ojbDaoCliente -> mdllistarClientes() -> fetchALL();
            } catch (\Throwable $th) {
                echo"Error en el controlador";
            }
            return $array;

        }
    } /* end of class */
?>