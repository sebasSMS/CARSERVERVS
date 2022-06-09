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
    } /* end of class */
?>