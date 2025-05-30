<?php
    class Equipo{
        private $nombreEquipo;
        private $nombreCapitan;
        private $cantidadJugadores;
        private $objCategoria;

        public function __construct($nombreEquipo, $nombreCapitan, $cantidadJugadores, $objCategoria) {
            $this->nombreEquipo = $nombreEquipo;
            $this->nombreCapitan = $nombreCapitan;
            $this->cantidadJugadores = $cantidadJugadores;
            $this->objCategoria = $objCategoria;
        }

        public function getNombreEquipo() {
            return $this->nombreEquipo;
        }
        public function getNombreCapitan() {
            return $this->nombreCapitan;
        }
        public function getCantidadJugadores() {
            return $this->cantidadJugadores;
        }
        public function getObjCategoria() {
            return $this->objCategoria;
        }
        public function setNombreEquipo($nombreEquipo) {
            $this->nombreEquipo = $nombreEquipo;
        }
        public function setNombreCapitan($nombreCapitan) {
            $this->nombreCapitan = $nombreCapitan;
        }
        public function setCantidadJugadores($cantidadJugadores) {
            $this->cantidadJugadores = $cantidadJugadores;
        }
        public function setObjCategoria($objCategoria) {
            $this->objCategoria = $objCategoria;
        }

        public function __toString(){
            return
            "\nInformacion del Equipo: \n" .
            "Nombre del Equipo: " . $this->getNombreEquipo() . "\n" .
            "Nombre del Capitan: " . $this->getNombreCapitan() . "\n" .
            "Cantidad de Jugadores: " . $this->getCantidadJugadores() . "\n" .
            "Categoria: " . $this->getObjCategoria()->getDescripcion() . "\n";
        }
    }
?>