<?php
    class Locomotora{
        private $pesoLocomotora;
        private $valocidadMaxLocomotora;

        public function __construct($pesoLocomotora, $valocidadMaxLocomotora){
            $this->pesoLocomotora = $pesoLocomotora;
            $this->valocidadMaxLocomotora = $valocidadMaxLocomotora;
        }

        public function getPesoLocomotora(){
            return $this->pesoLocomotora;
        }
        public function getValocidadMaxLocomotora(){
            return $this->valocidadMaxLocomotora;
        }

        public function setPesoLocomotora($pesoLocomotora){
            $this->pesoLocomotora = $pesoLocomotora;
        }
        public function setValocidadMaxLocomotora($valocidadMaxLocomotora){
            $this->valocidadMaxLocomotora = $valocidadMaxLocomotora;
        }

        public function __toString(){
            return
            "\nInformación de la Locomotora: \n" .
            " -> Peso de la locomotora: " . $this->getPesoLocomotora() . "toneladas\n" .
            " -> Velocidad máxima de la locomotora: " . $this->getValocidadMaxLocomotora() . "km/h\n";
        }
    }
?>