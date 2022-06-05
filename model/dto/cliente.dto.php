<?php
    class Clientes{

        private $cedula;
        private $nombre;
        private $apellido;
        private $correo;
        private $celula;
        private $placa;

        public function __construct($cedula, $nombre, $apellido, $correo, $celula, $placa) {
            $this-> cedula = $cedula;
            $this-> nombre = $nombre;
            $this-> apellido = $apellido;
            $this-> correo = $correo;
            $this-> celula = $celula;
            $this-> placa = $placa;

        }
        public function getCedula(){
            return $this -> cedula;
        }
        public function getNombre(){
            return $this -> nombre;
        }
        public function getApellido(){
            return $this -> apellido;
        }
        public function getCorreo(){
            return $this -> correo;
        }
        public function getCelula(){
            return $this -> celula;
        }
        public function getPlaca(){
            return $this -> placa;
        }
        public function setcedula($cedula){
            $this -> cedula = $cedula;
        }
        public function setnombre($nombre){
            $this -> nombre = $nombre;
        }
        public function setapellido($apellido){
            $this -> ellido = $apellido;
        }
        public function setcorreo($correo){
            $this -> correo = $correo;
        }
        public function setcelula($celula){
            $this -> celula = $celula;
        }
        public function setplaca($placa){
            $this->  placa = $placa;
        }


    }
?>