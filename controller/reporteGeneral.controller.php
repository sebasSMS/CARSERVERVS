<?php
     class CotrellerReporte{
        /* creamos el controlador de insertar reporte */
        public function crtInsertarReporteGeneral($datosDeServico,$puntoDeServico, $kilometraje, $tecnico, $descripcion, $placa){
            $objDtoReportegeneral = new Reporte(NULL,$datosDeServico,$puntoDeServico, $kilometraje, $tecnico, $descripcion, $placa);
            $objDaoReporteGeneral = new ModelReporteGeneral($objDtoReportegeneral);
            if ($objDaoReporteGeneral -> mldInsertarReporteGenearal() == true){
                echo"
                <script>
                Swal.fire({
                    title: 'GOOD',
                    text: ' Reporte General INSERTADO',
                    icon: 'success',
                    timerProgressBar:true,
                    timer:4000,
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ok!'
                  }).then((result) => {
                    if (result.isConfirmed) {
                        window.location='index.php?ruta=tableReporteGeneral';
                    }else{
                        window.location='index.php?ruta=tableReporteGeneral';
                    }
                  })
                </script>
                ";

            }else{
               echo( "<script>alert('no se pudo insertar el cliente')</script>");
            }
            


        }/* fin de la funcion */
        /* Creamos el controlador de punto de servico */
        
        public function ctrListarPuntoDeservico(){ 
            $lista = false;
            try {
                $objDtoReportegeneral = new Reporte(NULL,NULL,NULL,NULL,NULL,NULL,NULL);
                $objDaoReporteGeneral = new ModelReporteGeneral( $objDtoReportegeneral );
                $lista = $objDaoReporteGeneral -> mdlListarPuntoDeservico() -> fetchAll();

            } catch (PDOException $e) {
                echo "error al mostrar los Roles de usuarios" . $e -> getMessage();
            }
            return $lista;
        }/* fin de la funcion */
        /* Creamos el controlador de listar tecnico */
        public function ctrListarTecnicos(){ 
            $lista = false;
            try {
                $objDtoReportegeneral = new Reporte(NULL,NULL,NULL,NULL,NULL,NULL,NULL);
                $objDaoReporteGeneral = new ModelReporteGeneral( $objDtoReportegeneral );
                $lista = $objDaoReporteGeneral -> mdlListarTecnicos() -> fetchAll();

            } catch (PDOException $e) {
                echo "error al mostrar los Roles de usuarios" . $e -> getMessage();
            }
            return $lista;
        }
        /* Creamos el controlador de listar placa  */
        public function ctrListarPlaca(){ 
            $lista = false;
            try {
                $objDtoReporteGeneral = new Reporte(NULL,NULL,NULL,NULL,NULL,NULL,NULL);
                $objDaoReporteGeneral = new ModelReporteGeneral( $objDtoReporteGeneral );
                $lista = $objDaoReporteGeneral -> mdlListarPlaca() -> fetchAll();

            } catch (PDOException $e) {
                echo "error al mostrar los Roles de usuarios" . $e -> getMessage();
            }
            return $lista;
        }
        /* Creamos del controlador de listar Servico */
        public function ctrListarServicio(){
            $lista = false;
            try {
                $objDtoReporteGeneral = new Reporte(NULL,NULL,NULL,NULL,NULL,NULL,NULL);
                $objDaoReporteGeneral = new ModelReporteGeneral( $objDtoReporteGeneral );
                $lista = $objDaoReporteGeneral -> mdlListarServico() -> fetchAll();

            } catch (PDOException $e) {
                echo "error al mostrar los Roles de usuarios" . $e -> getMessage();
            }
            return $lista;

        }/* fin de la funcion */
        /* creamos la funcion para modificar reporte general */
        public function ctrModificarReporte(){
            $ojbDtoReporte = new Reporte(
                $_POST['txtMReporte'],
                $_POST['txtMServico'],
                $_POST['txtMPunto'],
                $_POST['txtMKilometraje'],
                $_POST['txtMTecnico'],
                $_POST['txtMDescripcion'],
                $_POST['txtMPlaca']
            );

            $ojbDaoReporte = new ModelReporteGeneral($ojbDtoReporte);
            if ($ojbDaoReporte -> mdlModificarReporte() == true ){
                echo"
                    <script>
                    Swal.fire({
                        title: 'EXTIO',
                        text: 'SU REPORTE  A SIDO MODIFICADO CON EXITO',
                        icon: 'success',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                      }).then((result) => {
                        if (result.isConfirmed) {
                            window.location='index.php?ruta=tableReporteGeneral';
                        }else{
                            window.location='index.php?ruta=tableReporteGeneral';
                        }
                      })
                    </script>
                    ";
            }else{
                echo "<script>
                    Swal.fire(
                        'error',
                        'Reporte no se pudo Modificado',
                        'danger'
                      )
                    ;</script>
                    ";
            }
        }/* fin de la funcion */
        /* CONTROLADOR PARA ELIMINAR REPORTE GENERAL */
        public function ctrEliminarReporte(){
            $objDtoReportegeneral = new Reporte(
                $_GET['ELIMINAR'],
                null,
                null,
                null,
                null,
                null,
                null


            );

            $objDaoReporteGeneral = new ModelReporteGeneral($objDtoReportegeneral);
            ($objDaoReporteGeneral -> mdlEliminarReporte());
            echo"<script>
                window.location='index.php?ruta=tableReporteGeneral';
            </script>";

      
        }/* fin de la funcion */


    }
?>