<?php
    class PartidoBasquet extends Partido{
        private $cantInfracciones;
        private $coef_penalidad;

        public function __construct($idPartido, $fecha, $objEquipo1, $objEquipo2, $golesEquipo1, $golesEquipo2, $cantInfracciones) {
            parent::__construct($idPartido, $fecha, $objEquipo1, $objEquipo2, $golesEquipo1, $golesEquipo2);
            $this->cantInfracciones = $cantInfracciones;
            $this->coef_penalidad = 0.75;
        }
        public function getCantInfracciones() {
            return $this->cantInfracciones;
        }
        public function getCoefPenalidad() {
            return $this->coef_penalidad;
        }

        public function setCantInfracciones($cantInfracciones) {
            $this->cantInfracciones = $cantInfracciones;
        }
        public function setCoefPenalidad($coef_penalidad) {
            $this->coef_penalidad = $coef_penalidad;
        }

        public function coefPartidoBasquet(){
            $coefBase = parent::calcularCoeficienteBase();
            $coef = $this->getCantInfracciones() * $this->getCoefPenalidad();
            $coefBasquet = $coefBase - $coef;
            return $coefBasquet;
        }

        public function __toString() {
            $cadena = parent::__toString();
            $cadena .= "\n -> Coeficiente de partido de basquet: " . $this->coefPartidoBasquet() . "\n";
            return $cadena;
        }
    }
?>