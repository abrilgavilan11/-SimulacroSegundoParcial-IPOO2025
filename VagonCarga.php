<?php
    class VagonCarga extends Vagon{
        private $pesoMaxCarga;
        private $pesoCarga;
        private $indiceCarga;

        public function __construct($anioInstalacionVagon, $largoVagon, $anchoVagon, $pesoVagonVacio, $pesoMaxCarga, $pesoCarga){
            parent::__construct($anioInstalacionVagon, $largoVagon, $anchoVagon, $pesoVagonVacio);
            $this->pesoMaxCarga = $pesoMaxCarga;
            $this->pesoCarga = $pesoCarga;
            $this->indiceCarga = 0.2;
        }

        public function getPesoMaxCarga(){
            return $this->pesoMaxCarga;
        }
        public function getPesoCarga(){
            return $this->pesoCarga;
        }
        public function getIndiceCarga(){
            return $this->indiceCarga;
        }

        public function setPesoMaxCarga($pesoMaxCarga){
            $this->pesoMaxCarga = $pesoMaxCarga;
        }
        public function setPesoCarga($pesoCarga){
            $this->pesoCarga = $pesoCarga;
        }
        public function setIndiceCarga($indiceCarga){
            $this->indiceCarga = $indiceCarga;
        }

        public function __toString(){
            return parent::__toString() .
            "\nInformación del Vagon de Carga: \n" .
            " -> Peso máximo de carga: " . $this->getPesoMaxCarga() . "\n" .
            " -> Peso de la carga: " . $this->getPesoCarga() . "\n" .
            " -> Indice de carga: " . $this->getIndiceCarga() . "\n";
        }

        public function incorporarCargaVagon($cantCarga){
            $incorporacionCorrecta = false;
            $cantCargaVagon = $this->getPesoCarga() + $cantCarga;

            if($cantCargaVagon <= $this->getPesoMaxCarga()){
                $this->setPesoCarga($cantCargaVagon);
                $this->calcularPesoVagon();
                $incorporacionCorrecta = true;
            }
            return $incorporacionCorrecta;
        }

        public function calcularPesoVagon(){
            $pesoBase = parent::calcularPesoVagon();
            $pesoFinal = 0;
            $pesoVagon = $this->getPesoCarga() + ($this->getPesoCarga() * $this->getIndiceCarga());
            $pesoFinal = $pesoBase + $pesoVagon;
            return $pesoFinal   ;
        }
    }
?>