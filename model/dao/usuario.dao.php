<?php

use LDAP\Result;

    class ModelUsuario{
        private $cedula;
        private $nombre;
        private $apellido;
        private $celular;
        private $correo;
        private $rol;
        private $estado;
        
        public function __construct($objDtoUsuario){
            $this-> cedula = $objDtoUsuario-> getCedula();
            $this->nombre  =  $objDtoUsuario-> getNombre() ;
            $this-> apellido =  $objDtoUsuario-> getApellido() ;
            $this-> celular =  $objDtoUsuario->  getCelular () ;
            $this-> correo  =  $objDtoUsuario-> getCorreo() ;
            $this-> rol  =  $objDtoUsuario-> getRol() ;
        }
        public function mldInsertarUsuario(){
            /* creamos la sentecia */
            $sql="CALL `splRegistroUsuario`(?,?,?,?,?,?);";
            $this -> estado = false;
            /* creamos el try catch  */
            try {
                /* llamamos a la conexion */
                $con = new Conexion();
                $stmt = $con -> conexion() -> prepare($sql);
                $stmt -> bindParam(1, $this->cedula, PDO::PARAM_INT );
                $stmt -> bindParam(2, $this->nombre, PDO::PARAM_STR );
                $stmt -> bindParam(3, $this->apellido, PDO::PARAM_STR );
                $stmt -> bindParam(4, $this->celular, PDO::PARAM_INT );
                $stmt -> bindParam(5, $this->correo, PDO::PARAM_STR );
                $stmt -> bindParam(6, $this->rol, PDO::PARAM_INT );
                $stmt -> execute();
                $this -> estado = true;
                


            } catch (PDOException $ex) {
                echo "Hay un error al insertar usuario " . $ex -> getMessage();
            }
            return $this -> estado;


        }/* fin de insertar usuario */
        public function mdlMostrarRol(){             #Funcion utilizada para visualizar a todos los tipos de rol registrados
            $sql = "CALL spListarRol()";  //Procedimiento almacenado

            try {
                $con = new Conexion();
                $stmt = $con -> conexion() -> prepare($sql);
                $stmt -> execute();
                $resulset = $stmt;
                
            } catch (PDOException $e) {
                echo "Error en el metodo consultar usuario " . $e -> getMessage();
            }
            return $resulset;
        }
        public function mdlListarUsuario(){
            $sql="CALL `splListarUsuario`( );";
            $resultset= false;
            try {
                $con = new Conexion();
                $stmt = $con -> conexion() -> prepare($sql);
                $stmt -> execute();
                $resultset = $stmt;
     
            } catch (PDOException $ex) {
                echo "Hay un error en el DAO al listar usuario " . $ex -> getMessage();
            }
            return $resultset;  
        
        }
        public function mdlModificarUsuario(){
            $sql="CALL `splModificarUsuario`(?,?,?,?,?,?);";
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
                $stmt -> bindParam(6, $this->rol,  PDO::PARAM_STR );
                $stmt -> execute();
                $this -> estado = true;
            } catch (PDOException $ex) {
                echo "Hay un error en el dao de usuario " . $ex -> getMessage();
            }
            return $this -> estado;

        }
        public function mdlEliminarUsuarios(){
            $sql="CALL `splEliminarUsuario`(?);";
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
        /* funcion para validarLaInformacion */
        public function mdlValidarInformacion(){
            $resultset = false;
            /* procedimineto almacenado */
            $sql = "CALL spValidarUsuario(?,?)";

             try {
                 $con = new Conexion();
                 $stmt = $con -> conexion() -> prepare($sql);
                 $stmt -> bindParam(1, $this->cedula, PDO::PARAM_INT );
                 $stmt -> bindParam(2, $this->correo, PDO::PARAM_STR );
                 $stmt -> execute();
                 $resultset = $stmt;

             } catch (PDOException $ex ) {
                echo " Hay un error en el modelo  mdlValidarInformacion ". $ex -> getMessage();

             }
             return $resultset;
        }
        /* FUNCION PARA MOSTRA DATOS DE UN   USUARIO EN ESPECIFICO  */

        public function mdlMostrarDatosPersonalesDeUsuario(){
            /* procedimiento al macenado  */
            $sql = "CALL spMostrarDatosUsuario(?)";

             try {
                 $con = new Conexion();
                 $stmt = $con -> conexion() -> prepare($sql);
                 $stmt -> bindParam(1, $this->cedula, PDO::PARAM_INT );
                 $stmt -> execute();
                 $resultset = $stmt;

             } catch (PDOException $ex ) {
                echo " Hay un error en el modelo  mdlMostrarDatosDeUsuario ". $ex -> getMessage();
             }
             return $resultset;

        }
        public function mdlMostrarDatosDeUsuario(){
            /* procedimiento al macenado  */
            $sql = "CALL spMostrarUsuario(?)";
             try {
                 $con = new Conexion();
                 $stmt = $con -> conexion() -> prepare($sql);
                 $stmt -> bindParam(1, $this->cedula, PDO::PARAM_INT );
                 $stmt -> execute();
                 $resultset = $stmt;

             } catch (PDOException $ex ) {
                echo " Hay un error en el modelo  mdlMostrarDatosDeUsuario ". $ex -> getMessage();
             }
             return $resultset;

        }


    }
?>