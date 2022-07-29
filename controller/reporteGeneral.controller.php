<?php
     class CotrellerReporte{
        /* creamos el controlador de insertar reporte */
        public function crtInsertarReporteGeneral($datosDeServico,$puntoDeServico, $kilometraje, $tecnico, $descripcion, $placa){

            $objDtoReporteGeneral = new Reporte($datosDeServico,$puntoDeServico, $kilometraje, $tecnico, $descripcion, $placa);
            $objDaoReporteGeneral = new ModelReporteteGeneral($objDtoReporteGeneral);
            if ($objDaoReporteGeneral -> mldInsertarReporteGenearal()){
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
                echo "cliente no insertado";
            }
            


        }
        /* Creamos el controlador de punto de servico */
        
        public function ctrListarPuntoDeservico(){ 
            $lista = false;
            try {
                $objDtoReporteGeneral = new Reporte(NULL,NULL,NULL,NULL,NULL,NULL);
                $objDaoReporteGeneral = new ModelReporteteGeneral( $objDtoReporteGeneral );
                $lista = $objDaoReporteGeneral -> mdlListarPuntoDeservico() -> fetchAll();

            } catch (PDOException $e) {
                echo "error al mostrar los Roles de usuarios" . $e -> getMessage();
            }
            return $lista;
        }
        /* Creamos el controlador de listar tecnico */
        public function ctrListarTecnicos(){ 
            $lista = false;
            try {
                $objDtoReporteGeneral = new Reporte(NULL,NULL,NULL,NULL,NULL,NULL);
                $objDaoReporteGeneral = new ModelReporteteGeneral( $objDtoReporteGeneral );
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
                $objDtoReporteGeneral = new Reporte(NULL,NULL,NULL,NULL,NULL,NULL);
                $objDaoReporteGeneral = new ModelReporteteGeneral( $objDtoReporteGeneral );
                $lista = $objDaoReporteGeneral -> mdlListarPlaca() -> fetchAll();

            } catch (PDOException $e) {
                echo "error al mostrar los Roles de usuarios" . $e -> getMessage();
            }
            return $lista;
        }

    }
?>