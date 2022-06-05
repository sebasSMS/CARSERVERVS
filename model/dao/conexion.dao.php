<?php
    class ModelConexion{

        private $user;
        private $pass;

        public function __construct($user, $pass){
            $this -> user = $user;
            $this -> pass = $pass;
        }//END CONSTRUCT

        public function getLogin(){
            
            $resultSet = false;

            $sql = "SELECT  `USUARIO`, `CONTRASEÑA` FROM `iniciondesecion` WHERE 
            USUARIO = ? AND CONTRASEÑA = ?";
             

            try {
                $con = new Conexion();
                $stmt = $con -> conectar() -> prepare($sql);
                $stmt -> bindParam(1, $this -> user, PDO::PARAM_STR);
                $stmt -> bindParam(2, $this -> pass, PDO::PARAM_STR);
               

                $stmt -> execute();
                $resultSet = $stmt;                
                
            } catch (PDOException $e) {
                echo "Error en el metodo buscar password " . $e->getMessage();
                
            }
            return $resultSet;
        }
    }
?>