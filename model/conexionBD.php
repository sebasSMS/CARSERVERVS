<?php
    class Conexion{
        private $host;
        private $driver;
        private $usuario;
        private $clave;
        private $base;
        private $url;
        private $charSet;
        private $con;

        /* CREAMOS EL CONSTRUCTOR */
        public function __construct(){
            $this -> host = "localhost";
            $this -> driver = "mysql";
            $this -> usuario = "root";
            $this -> clave = "";
            $this -> base = "carservicevs"; 
            $this -> url = $this -> driver.":host=".
            $this -> host.";dbname=". $this -> base;
            $this -> charSet = "UTF8";
            $this -> con=NULL;
        }//Fin constructor

        public function conexion(){
            try{
                $this -> con = new PDO($this->url, $this->usuario, $this->clave);
                $this -> con -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                $this -> con -> exec('SET CHARACTER SET '.$this->charSet);

            }catch(PDOException $e){
                echo "Error al conectar".$e->getMessage();
            }
            return $this -> con;
        }//Fin conexion

        public function __destruct(){
            $this -> con = NULL;
        }//Fin destructor

    }//FIN CLASE


    /*try {
        $c = new Conexion();
        $conex = $c -> conexion();
        var_dump($conex);
        //echo "conexion exitosa";
    } catch (Exception $e) {
        echo "Error";
    }*/
?>