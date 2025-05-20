<?php
    class VagonPasajeros extends Vagon{
        private $cantMaxPasajeros;
        private $cantPasajeros;
        private $pesoPromedioPasajeros;

        public function __construct($anioInstalacionVagon, $largoVagon, $anchoVagon, $pesoVagonVacio, $cantMaxPasajeros, $cantPasajeros, $pesoPromedioPasajeros){
            parent::__construct($anioInstalacionVagon, $largoVagon, $anchoVagon, $pesoVagonVacio);
            $this->cantMaxPasajeros = $cantMaxPasajeros;
            $this->cantPasajeros = $cantPasajeros;
            $this->pesoPromedioPasajeros = $pesoPromedioPasajeros;
        }

        public function getCantMaxPasajeros(){
            return $this->cantMaxPasajeros;
        }
        public function getCantPasajeros(){
            return $this->cantPasajeros;
        }
        public function getPesoPromedioPasajeros(){
            return $this->pesoPromedioPasajeros;
        }

        public function setCantMaxPasajeros($cantMaxPasajeros){
            $this->cantMaxPasajeros = $cantMaxPasajeros;
        }
        public function setCantPasajeros($cantPasajeros){
            $this->cantPasajeros = $cantPasajeros;
        }
        public function setPesoPromedioPasajeros($pesoPromedioPasajeros){
            $this->pesoPromedioPasajeros = $pesoPromedioPasajeros;
        }

        public function __toString(){
            return parent::__toString() .
            "\nInformación del Vagon de Pasajeros: \n" .
            " -> Cantidad máxima de pasajeros: " . $this->getCantMaxPasajeros() . "\n" .
            " -> Cantidad de pasajeros: " . $this->getCantPasajeros() . "\n" .
            " -> Peso promedio de los pasajeros: " . $this->getPesoPromedioPasajeros() . "\n";
        }

        public function incorporarPasajeroVagon($cantPasajeros){
            $incorporacionCorrecta = false;
            $cantPasajerosVagon = $this->getCantPasajeros() + $cantPasajeros;
            if($cantPasajerosVagon <= $this->getCantMaxPasajeros()){
                $this->setCantPasajeros($cantPasajerosVagon);
                $incorporacionCorrecta = true;
            }
            return $incorporacionCorrecta;
        }

        public function calcularPesoVagon(){
            $pesoVagon = 0;
            $pesoVagon = $this->getPesoVagonVacio() + ($this->getCantPasajeros() * $this->getPesoPromedioPasajeros());
            return $pesoVagon;
        }
    }
?>