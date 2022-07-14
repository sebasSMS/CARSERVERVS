<?php
    class Usuario{
        private $cedula;
        private $nombre;
        private $apellido;
        private $celular;
        private $correo;
        private $rol;

        public function  __construct($cedula, $nombre, $apellido, $celular, $correo,$rol){
            $this-> cedula = $cedula;
            $this-> nombre = $nombre;
            $this-> apellido = $apellido;
            $this-> celular = $celular;
            $this-> correo = $correo;
            $this-> rol = $rol;
            

        }
        /* get */
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
        public function getRol(){
            return $this -> rol;
        }
       /*  set */
        public function setCedula($cedula){
            $this -> cedula = $cedula;
        }
        public function setNombre($nombre){
            $this -> nombre = $nombre;
        }
        public function setApellido($apellido){
            $this -> apellido = $apellido;
        }
        public function setCelular($celular){
            $this -> celular = $celular;
        }
        public function setCorreo($correo){
            $this -> correo = $correo;
        }
        public function set($rol){
            $this -> rol = $rol;
        }

    }
?>