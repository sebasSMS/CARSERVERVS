<?php
    class ModelVehiculo{
        private $placa;
        private $marca;
        private $cilindraje;
        private $linea;
        private $clase;
        private $modelo;
        private $numeroDeMotor;
        private $IdClientes;
        private $estado;

        public function __construct($objDtoVehiculos) {

            $this -> placa = $objDtoVehiculos -> getPlaca();
            $this -> marca = $objDtoVehiculos -> getMarca();
            $this -> cilindraje = $objDtoVehiculos -> getCilindraje();
            $this -> linea = $objDtoVehiculos -> getLinea();
            $this -> clase = $objDtoVehiculos -> getClase();
            $this -> modelo = $objDtoVehiculos -> getModelo();
            $this -> numeroDeMotor = $objDtoVehiculos -> getNumeroDeMotor();
            $this -> IdClientes = $objDtoVehiculos -> getIdCedula();
        }
        public function mldInsertarVehiculo(){
            /* creamos la sentencia */
            $sql = "CALL splRegistroVehiculo(?,?,?,?,?,?,?,?);";
  /*------------creamos el try catch -------------*/
            try {
/*                 creamos una variable y llamamos la conexion */
                $con = new Conexion;
                $stmt = $con -> conexion() -> prepare($sql);
                $stmt -> bindParam(1, $this-> placa, PDO::PARAM_STR);                
                $stmt -> bindParam(2, $this-> marca, PDO::PARAM_STR );                
                $stmt -> bindParam(3, $this-> cilindraje, PDO::PARAM_INT );                
                $stmt -> bindParam(4, $this-> linea, PDO::PARAM_STR);                
                $stmt -> bindParam(5, $this-> clase, PDO::PARAM_STR);                
                $stmt -> bindParam(6, $this-> modelo, PDO::PARAM_INT );                
                $stmt -> bindParam(7, $this-> numeroDeMotor, PDO::PARAM_INT );
                $stmt -> bindParam(8, $this-> IdClientes, PDO::PARAM_INT );

                $stmt -> execute(); 
                $this-> estado = true;           

            } catch (PDOException $e) {
                echo("hay un  error en el dao de insertar vehiculo " .$e -> getMessage());
            }
            return $this-> estado;
            

        }
        public function mdlListarCedulaCliente(){  #Funcion utilizada para visualizar a todos los tipos de rol registrados
            $sql = "CALL spListarCedulaDeCliente()";  //Procedimiento almacenado

            try {
                $con = new Conexion();
                $stmt = $con -> conexion() -> prepare($sql);
                $stmt -> execute();
                $resulset = $stmt;
                
            } catch (PDOException $e) {
                echo "Error en el metodo al listar cedulaDeClienete " . $e -> getMessage();
            }
            return $resulset;
        }
        public function mdlListarVehiculo(){
            $sql="CALL `splListarVehiculo`();";
            $resultset= false;
            try {
                $con = new Conexion();
                $stmt = $con -> conexion() -> prepare($sql);
                $stmt -> execute();
                $resultset = $stmt;
     
            } catch (PDOException $ex) {
                echo "Hay un error en el DAO al listar Vehiculo " . $ex -> getMessage();
            }
            return $resultset;  
        
        }
        public function mdlModificarVehiculo(){
            $sql="CALL `splModificarVehiculo`(?,?,?,?,?,?,?,?);";
            $this -> estado = false;
            /* creamos el try catch  */
            try {
                /* llamamos a la conexion */
                $con = new Conexion;
                $stmt = $con -> conexion() -> prepare($sql);
                $stmt -> bindParam(1, $this-> placa, PDO::PARAM_STR);                
                $stmt -> bindParam(2, $this-> marca, PDO::PARAM_STR );                
                $stmt -> bindParam(3, $this-> cilindraje, PDO::PARAM_INT );                
                $stmt -> bindParam(4, $this-> linea, PDO::PARAM_STR);                
                $stmt -> bindParam(5, $this-> clase, PDO::PARAM_STR);                
                $stmt -> bindParam(6, $this-> modelo, PDO::PARAM_INT );                
                $stmt -> bindParam(7, $this-> numeroDeMotor, PDO::PARAM_INT );  
                $stmt -> bindParam(8, $this-> IdClientes, PDO::PARAM_INT );  
                $stmt -> execute();          
                $this -> estado = true;
               


            } catch (PDOException $ex) {
                echo "Hay un error en el dao de Vehiculo " . $ex -> getMessage();
            }
            return $this -> estado;

        }
        public function mdlEliminarVehiculos(){
            $sql="CALL `splEliminarVehiculo`(?);";
            $this -> estado = false;

            try {
                /* llamamos a la conexion  */
                $con = new Conexion();
                $stmt = $con -> conexion() -> prepare($sql);
                $stmt -> bindParam(1, $this->placa, PDO::PARAM_INT );
                $stmt -> execute();
                $this -> estado = true;
                


            } catch (PDOException $ex) {
                echo "Hay un error en el dao al eliminar el vehiculo " . $ex -> getMessage();
            }
            return $this -> estado;

        } 
        
    }
?>