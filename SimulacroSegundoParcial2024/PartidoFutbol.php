<?php
    class PartidoFutbol extends Partido{
        private $coef_Menores;
        private $coef_Juveniles;
        private $coef_Mayores;

        public function __construct($idPartido, $fecha, $objEquipo1, $objEquipo2, $golesEquipo1, $golesEquipo2) {
            parent::__construct($idPartido, $fecha, $objEquipo1, $objEquipo2, $golesEquipo1, $golesEquipo2);
            $this->coef_Menores = 0.13;
            $this->coef_Juveniles = 0.19;
            $this->coef_Mayores = 0.27;
        }
        
        public function getCoefMenores() {
            return $this->coef_Menores;
        }
        public function getCoefJuveniles() {
            return $this->coef_Juveniles;
        }
        public function getCoefMayores() {
            return $this->coef_Mayores;
        }
        public function setCoefMenores($coef_Menores) {
            $this->coef_Menores = $coef_Menores;
        }
        public function setCoefJuveniles($coef_Juveniles) {
            $this->coef_Juveniles = $coef_Juveniles;
        }
        public function setCoefMayores($coef_Mayores) {
            $this->coef_Mayores = $coef_Mayores;
        }

        public function coefPartidoFutbol(){
            $coefBase = parent::calcularCoeficienteBase();
            $coef = 0;
            if ($this->getObjEquipo1()->getCategoria() == "Menores") {
                $coef += $this->getCoefMenores();
            } elseif ($this->getObjEquipo1()->getCategoria() == "Juveniles") {
                $coef += $this->getCoefJuveniles();
            } elseif ($this->getObjEquipo1()->getCategoria() == "Mayores") {
                $coef += $this->getCoefMayores();
            }

            if ($this->getObjEquipo2()->getCategoria() == "Menores") {
                $coef += $this->getCoefMenores();
            } elseif ($this->getObjEquipo2()->getCategoria() == "Juveniles") {
                $coef += $this->getCoefJuveniles();
            } elseif ($this->getObjEquipo2()->getCategoria() == "Mayores") {
                $coef += $this->getCoefMayores();
            }

            $coefFutbol = ($coef * $coefBase) + $coefBase;
            return $coefFutbol;
        }

        public function __toString() {
            $cadena = parent::__toString();
            $cadena .= "\n -> Coeficiente de partido de futbol: " . $this->coefPartidoFutbol() . "\n";
            return $cadena;
        }
    }
?>