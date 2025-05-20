<?php
    class Vagon{
        private $anioInstalacionVagon;
        private $largoVagon;
        private $anchoVagon;
        private $pesoVagonVacio;

        public function __construct($anioInstalacionVagon, $largoVagon, $anchoVagon, $pesoVagonVacio){
            $this->anioInstalacionVagon = $anioInstalacionVagon;
            $this->largoVagon = $largoVagon;
            $this->anchoVagon = $anchoVagon;
            $this->pesoVagonVacio = $pesoVagonVacio;
        }
        public function getAnioInstalacionVagon(){
            return $this->anioInstalacionVagon;
        }
        public function getLargoVagon(){
            return $this->largoVagon;
        }
        public function getAnchoVagon(){
            return $this->anchoVagon;
        }
        public function getPesoVagonVacio(){
            return $this->pesoVagonVacio;
        }

        public function setAnioInstalacionVagon($anioInstalacionVagon){
            $this->anioInstalacionVagon = $anioInstalacionVagon;
        }
        public function setLargoVagon($largoVagon){
            $this->largoVagon = $largoVagon;
        }
        public function setAnchoVagon($anchoVagon){
            $this->anchoVagon = $anchoVagon;
        }
        public function setPesoVagonVacio($pesoVagonVacio){
            $this->pesoVagonVacio = $pesoVagonVacio;
        }

        public function __toString()
        {
            return
            "\nInformación del Vagon: \n".
            " -> Año de Instalación: " . $this->getAnioInstalacionVagon() . "\n" .
            " -> Largo: " . $this->getLargoVagon() . "\n" .
            " -> Ancho: " . $this->getAnchoVagon() . "\n" .
            " -> Peso del vagon vacío: " . $this->getPesoVagonVacio() . "\n";
        }
    }
?>