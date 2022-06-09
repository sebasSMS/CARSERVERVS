<?php
    class Clientes{

        private $cedula;
        private $nombre;
        private $apellido;
        private $celular;
        private $correo;
        private $placa;

        public function __construct($cedula, $nombre, $apellido, $celular, $correo, $placa) {
            $this-> cedula = $cedula;
            $this-> nombre = $nombre;
            $this-> apellido = $apellido;
            $this-> celular = $celular;
            $this-> correo = $correo;
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
        public function getCelular(){
            return $this -> celular;
        }
        public function getCorreo(){
            return $this -> correo;
        }
        public function getPlaca(){
            return $this -> placa;
        }
      /*   set */
        public function setCedula($cedula){
            $this -> cedula = $cedula;
        }
        public function setNombre($nombre){
            $this -> nombre = $nombre;
        }
        public function setApellido($apellido){
            $this -> ellido = $apellido;
        }
        public function setCelular($celular){
            $this -> celular = $celular;
        }
        public function setCorreo($correo){
            $this -> correo = $correo;
        }
        
        public function setPlaca($placa){
            $this->  placa = $placa;
        }


    }
?>