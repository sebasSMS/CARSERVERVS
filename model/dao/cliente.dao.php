<?php



    class ModelClientes{
        private $cedula;
        private $nombre;
        private $apellido;
        private $celular;
        private $correo;
        private $estado;
    
        public function __construct($objDtoCliente){
            $this-> cedula = $objDtoCliente-> getCedula();
            $this-> nombre  =  $objDtoCliente-> getNombre() ;
            $this-> apellido =  $objDtoCliente-> getApellido() ;
            $this-> celular =  $objDtoCliente->  getCelular () ;
            $this-> correo  =  $objDtoCliente-> getCorreo() ;
            
        }
        public function mldInsertarCliente(){
            /* creamos la sentecia */
            $sql="CALL `splRegistroClientes`(?,?,?,?,?);";
            $this -> estado = false;
            /* creamos el try catch  */
            try {
                /* llamamos a la conexion */
                $con = new Conexion();
                $stmt = $con -> conexion() -> prepare($sql);
                $stmt -> bindParam(1, $this->cedula, PDO::PARAM_INT );
                $stmt -> bindParam(2, $this->nombre, PDO::PARAM_STR );
                $stmt -> bindParam(3, $this->apellido, PDO::PARAM_STR );
                $stmt -> bindParam(4, $this->celular, PDO::PARAM_STR );
                $stmt -> bindParam(5, $this->correo, PDO::PARAM_STR );
                $stmt -> execute();
                $this -> estado = true;
                


            } catch (PDOException $ex) {
                echo "Hay un error en el dao al isertar  el cliente " . $ex -> getMessage();
            }
            return $this -> estado;


        }/* fin de insertar cliente */
        
        public function mdlListarClientes(){
            $sql="CALL `splListarClientes`( );";
            $resultset= false;
            try {
                $con = new Conexion();
                $stmt = $con -> conexion() -> prepare($sql);
                $stmt -> execute();
                $resultset = $stmt;
     
            } catch (PDOException $ex) {
                echo "Hay un error en el dao al al listar cliente " . $ex -> getMessage();
            }
            return $resultset;  
        
        }
        public function mdlModificarClientes(){
            $sql="CALL `splModificarClientes`(?,?,?,?,?);";
            $this -> estado = false;
            /* creamos el try catch  */
            try {
                /* llamamos a la conexion */
                $con = new Conexion();
                $stmt = $con -> conexion() -> prepare($sql);
                $stmt -> bindParam(1, $this->cedula, PDO::PARAM_INT );
                $stmt -> bindParam(2, $this->nombre, PDO::PARAM_STR );
                $stmt -> bindParam(3, $this->apellido, PDO::PARAM_STR );
                $stmt -> bindParam(4, $this->celular, PDO::PARAM_STR );
                $stmt -> bindParam(5, $this->correo, PDO::PARAM_STR );
                $stmt -> execute();
                $this -> estado = true;
                


            } catch (PDOException $ex) {
                echo "Hay un error en el dao al modificar Cliente " . $ex -> getMessage();
            }
            return $this -> estado;

        }
        public function mdlEliminarClientes(){
            $sql="CALL `splEliminarCliente`(?);";
            $this -> estado = false;

            try {
                /* llamamos a la conexion  */
                $con = new Conexion();
                $stmt = $con -> conexion() -> prepare($sql);
                $stmt -> bindParam(1, $this->cedula, PDO::PARAM_INT );
                $stmt -> execute();
                $this -> estado = true;
                


            } catch (PDOException $ex) {
                echo "Hay un error en el dao al eliminar el cliente " . $ex -> getMessage();
            }
            return $this -> estado;

        } 


    }
    /* end of class */
?>