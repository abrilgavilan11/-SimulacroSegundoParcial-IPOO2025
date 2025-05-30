<?php
    class Partido{
        private $idPartido;
        private $fecha;
        private $objEquipo1;
        private $objEquipo2;
        private $golesEquipo1;
        private $golesEquipo2;
        private $coefBase;

        public function __construct($idPartido, $fecha, $objEquipo1, $objEquipo2, $golesEquipo1, $golesEquipo2) {
            $this->idPartido = $idPartido;
            $this->fecha = $fecha;
            $this->objEquipo1 = $objEquipo1;
            $this->objEquipo2 = $objEquipo2;
            $this->golesEquipo1 = $golesEquipo1;
            $this->golesEquipo2 = $golesEquipo2;
            $this->coefBase = 0.5;
        }

        public function getIdPartido() {
            return $this->idPartido;
        }
        public function getFecha() {
            return $this->fecha;
        }
        public function getObjEquipo1() {
            return $this->objEquipo1;
        }
        public function getObjEquipo2() {
            return $this->objEquipo2;
        }
        public function getGolesEquipo1() {
            return $this->golesEquipo1;
        }
        public function getGolesEquipo2() {
            return $this->golesEquipo2;
        }
        public function getCoefBase() {
            return $this->coefBase;
        }

        public function setIdPartido($idPartido) {
            $this->idPartido = $idPartido;
        }
        public function setFecha($fecha) {
            $this->fecha = $fecha;
        }
        public function setObjEquipo1($objEquipo1) {
            $this->objEquipo1 = $objEquipo1;
        }
        public function setObjEquipo2($objEquipo2) {
            $this->objEquipo2 = $objEquipo2;
        }
        public function setGolesEquipo1($golesEquipo1) {
            $this->golesEquipo1 = $golesEquipo1;
        }
        public function setGolesEquipo2($golesEquipo2) {
            $this->golesEquipo2 = $golesEquipo2;
        }
        public function setCoefBase($coefBase) {
            $this->coefBase = $coefBase;
        }

        public function calcularCoeficienteBase(){
            $goles = $this->getGolesEquipo1() + $this->getGolesEquipo2();
            $jugadores = $this->getObjEquipo1()->getCantidadJugadores() + $this->getObjEquipo2()->getCantidadJugadores();
            $coefBase = $this->getCoefBase() * $goles * $jugadores;
            return $coefBase;
        }

        public function __toString() {
            return
            "\nInformacion del Partido: \n" .
            "ID del Partido: " . $this->getIdPartido() . "\n" .
            "Fecha: " . $this->getFecha() . "\n" .
            "Equipo 1: " . $this->getObjEquipo1()->__toString()->getNombreEquipo() . " (Goles: " . $this->getGolesEquipo1() . ")\n" .
            "Equipo 2: " . $this->getObjEquipo2()->__toString()->getNombreEquipo() . " (Goles: " . $this->getGolesEquipo2() . ")\n" .
            "Coeficiente Base: " . $this->getCoefBase() . "\n";
        }
    }
?>