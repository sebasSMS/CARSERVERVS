<?php
    class ModelReporteteGeneral{
        private $datosDeServico;
        private $puntoDeServico;
        private $kilometraje;
        private $tecnico;
        private $descripcion;
        private $placa;
       

        public function __construct($objDtoReportegeneral){
            $this-> datosDeServico = $objDtoReportegeneral-> getDatosDeServico();
            $this-> puntoDeServico  =  $objDtoReportegeneral-> getpuntoDeServio();
            $this-> kilometraje =  $objDtoReportegeneral-> getkilometraje();
            $this-> tecnico =  $objDtoReportegeneral->  getTecnico () ;
            $this-> descripcion  =  $objDtoReportegeneral-> getDescripcion() ;
            $this-> placa  =  $objDtoReportegeneral-> getPlaca() ;
        }

    /* CREAMOS LA FUNCION PARA INSERTAR LOS DATOS */

        public function mldInsertarReporteGenearal(){
           
            /* creamos las sentencia  */
            $sql = "CALL `spInsetarReporteGeneral`(?,?,?,?,?,?);";/* procedimiento almacenado */
            $this -> estado = false;
            /* cremaos el try  catch*/
            try {
                /* llamos la conexion */
                $con = new Conexion();
                /* preparamos la conexion */
                $stmt = $con -> conexion() -> prepare($sql);
                $stmt -> bindParam(1, $this->datosDeServico, PDO::PARAM_STR );
                $stmt -> bindParam(2, $this->puntoDeServico, PDO::PARAM_INT );
                $stmt -> bindParam(3, $this->kilometraje, PDO::PARAM_STR );
                $stmt -> bindParam(4, $this->tecnico, PDO::PARAM_INT );
                $stmt -> bindParam(5, $this->descripcion, PDO::PARAM_STR );
                $stmt -> bindParam(6, $this->placa, PDO::PARAM_STR );
                $stmt -> execute();
                $this -> estado = true;
            } catch (PDOException $ex) {
                echo "Hay un error al insertar EL REPORTE GENERAL " . $ex -> getMessage();
            }
            return $this -> estado;

        }
    /* mostramos los punto de servico de la base de datos */
        public function mdlListarPuntoDeservico(){
            $sql = "CALL `spListarPuntoDeservico`(); ";  /* procedimiento almacenado */

            try {
                $con = new Conexion();
                $stmt = $con -> conexion() -> prepare($sql);
                $stmt -> execute();
                $resulset = $stmt;
                
            } catch (PDOException $e) {
                echo "Error en el metodo dao al listar el punto de servicio " . $e -> getMessage();
            }
            return $resulset;
        }
        /* Mostramos los tecnicos */
        public function mdlListarTecnicos(){
            $sql = "CALL `spListarTecnicos`()";  /* procedimiento almacenado */

            try {
                $con = new Conexion();
                $stmt = $con -> conexion() -> prepare($sql);
                $stmt -> execute();
                $resulset = $stmt;
                
            } catch (PDOException $e) {
                echo "Error en el metodo dao al listar el punto de servicio " . $e -> getMessage();
            }
            return $resulset;
        }
        
        /* mosmtramos las placa de los clientes  */
        public function mdlListarPlaca(){
            $sql = "CALL `spListarPlaca`()";  /* procedimiento almacenado */

            try {
                $con = new Conexion();
                $stmt = $con -> conexion() -> prepare($sql);
                $stmt -> execute();
                $resulset = $stmt;
                
            } catch (PDOException $e) {
                echo "Error en el metodo dao al listar la placa " . $e -> getMessage();
            }
            return $resulset;
        }



    }
?>
<!-- ERROR ESTUPIDO -->
<!-- > -->