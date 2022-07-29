<?php
    class Reporte{
        private $datosDeServico;
        private $puntoDeServico;
        private $kilometraje;
        private $tecnico;
        private $descripcion;
        private $placa;

        public function __construct($datosDeServico,$puntoDeServico,$kilometraje,$tecnico,$descripcion,$placa){
        
            $this-> datosDeServico = $datosDeServico;   
            $this-> puntoDeServico = $puntoDeServico; 
            $this-> kilometraje = $kilometraje; 
            $this-> tecnico = $tecnico;
            $this-> descripcion = $descripcion; 
            $this-> placa = $placa; 
        }
        /* get */   
        public function getDatosDeServico(){
            return $this-> datosDeServico;
        }
        public function getpuntoDeServio(){
            return $this-> puntoDeServico;
        }
        public function getkilometraje(){
            return $this-> kilometraje;
        }
        public function getTecnico(){
            return $this-> tecnico;

        }
        public function getDescripcion(){
            return $this-> descripcion;

        }
        public function getPlaca(){
            return $this-> placa;
        }
        /* set */
        public function setDatosDeServico($datosDeServico){
            $this->datosDeServico = $datosDeServico;
        }
        public function setpuntoDeServio($puntoDeServico){
            $this->puntoDeServico = $puntoDeServico;
        }
        public function setkilometraje($kilometraje){
            $this->Kilimetraje = $kilometraje;
        }
        public function setTecnico($tecnico){
            $this->tecnico = $tecnico;
        }
        public function setDescripcion($descripcion){
            $this->descripcion = $descripcion;
        }
        public function setPlaca($placa){
            $this->placa = $placa;
        }

    }
?>