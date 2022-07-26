<?php
    class vehiculos{
        private $placa;
        private $marca;
        private $cilindraje;
        private $linea;
        private $clase;
        private $modelo;
        private $numeroDeMotor;
        private $idCedula;

        public function __construct($placa,$marca,$cilindraje,$linea,$clase,$modelo,$numeroDeMotor, $idCedula){
            $this -> placa = $placa;
            $this -> marca = $marca; 
            $this -> cilindraje = $cilindraje; 
            $this -> linea = $linea; 
            $this -> clase = $clase; 
            $this -> modelo = $modelo; 
            $this -> numeroDeMotor = $numeroDeMotor; 
            $this-> idCedula = $idCedula;

            
        }
    /*     metodo set */

        public function setPlaca($placa){
            $this->placa = $placa;
        }
        public function setMarca($marca){
            $this->marca = $marca;
        }
        public function setCilindraje($cilindraje){
            $this->cilindraje = $cilindraje;
        }
        public function setLinea($linea){
            $this->linea = $linea;
        }
        public function setClase($clase){
            $this->clase = $clase;
        }
        public function setModelo($modelo){
            $this->modelo = $modelo;
        }
        public function setNumeroDeMotor($numeroDeMotor){
            $this->numeroDeMotor = $numeroDeMotor;
        }
        public function setIdCedula($idCedula){
            $this->idCedula = $idCedula;
        }


   /*      metodo get */
        public function getPlaca(){
            return $this->placa;
        }
        public function getMarca(){
            return $this->marca;
        }
        public function getCilindraje(){
            return $this->cilindraje;
        }
        public function getLinea(){
            return $this->linea;
        }
        public function getClase(){
            return $this->clase;
        }
        public function getModelo(){
            return $this->modelo;
        }
        public function getNumeroDeMotor(){
            return $this->numeroDeMotor;
        }
        public function getIdCedula(){
            return $this->idCedula;
        }


    }/* fin de la clase */
?>