<?php
    class Formacion{
        private $objLocomotora;
        private $coleccionDeVagones;
        private $maxCantVagones;

        public function __construct($objLocomotora, $maxCantVagones){
            $this->objLocomotora = $objLocomotora;
            $this->coleccionDeVagones = [];
            $this->maxCantVagones = $maxCantVagones;
        }

        public function getObjLocomotora(){
            return $this->objLocomotora;
        }
        public function getColeccionDeVagones(){
            return $this->coleccionDeVagones;
        }
        public function getMaxCantVagones(){
            return $this->maxCantVagones;
        }

        public function setObjLocomotora($objLocomotora){
            $this->objLocomotora = $objLocomotora;
        }
        public function setColeccionDeVagones($coleccionDeVagones){
            $this->coleccionDeVagones = $coleccionDeVagones;
        }
        public function setMaxCantVagones($maxCantVagones){
            $this->maxCantVagones = $maxCantVagones;
        }

        public function mostrarColeccion($coleccion) {
            $cadena = "";
            foreach ($coleccion as $elemento) {
                $cadena .= $elemento->__toString() . "\n";
                $cadena .= "\n------------------------------\n";
            }
            return $cadena;
        }

        public function __toString(){
            return
            "\nInformación de la formación:".
            "\n~ Locomotora: \n".$this->getObjLocomotora()->__toString().
            "\n~ Colección de vagones: \n".$this->mostrarColeccion($this->getColeccionDeVagones()).
            "\n~ Cantidad máxima de vagones: \n".$this->getMaxCantVagones();
        }
        
        public function incorporarPasajeroFormacion($cantPasajeros){
            $incorporacionCorrecta = false;
            $i = 0;
            $coleccionVagones = $this->getColeccionDeVagones();
            
            while(!$incorporacionCorrecta && ($i < count($coleccionVagones))){
                $vagon = $coleccionVagones[$i];
                if (is_a($vagon, 'VagonPasajeros')) {
                    if ($vagon->incorporarPasajeroVagon($cantPasajeros)) {
                        $incorporacionCorrecta = true;
                    }
                }
                $i++;
            }
            return $incorporacionCorrecta;
        }

        public function incorporarVagonFormacion($objVagon){
            $incorporacionCorrecta = false;
            $coleccionVagones = $this->getColeccionDeVagones();
            if (count($coleccionVagones) < $this->getMaxCantVagones()) {
                array_push($coleccionVagones, $objVagon);
                $this->setColeccionDeVagones($coleccionVagones);
                $incorporacionCorrecta = true;
            }
            return $incorporacionCorrecta;
        }

        public function promedioPasajeroFormacion(){
            $totalPasajeros = 0;
            $cantVagonesPasajeros = 0;
            $i = 0;
            $coleccionVagones = $this->getColeccionDeVagones();

            while ($i < count($coleccionVagones)) {
                $vagon = $coleccionVagones[$i];
                if (is_a($vagon, 'VagonPasajeros')) {
                    $totalPasajeros += $vagon->getCantPasajeros();
                    $cantVagonesPasajeros++;
                }
                $i++;
            }

            $promedio = 0;
            if ($cantVagonesPasajeros > 0) {
                $promedio = $totalPasajeros / $cantVagonesPasajeros;
            }
            return $promedio;
        }

        public function pesoFormacion(){
            $pesoTotal = 0;
            $i = 0;
            $coleccionVagones = $this->getColeccionDeVagones();

            while ($i < count($coleccionVagones)) {
                $vagon = $coleccionVagones[$i];
                $pesoTotal += $vagon->calcularPesoVagon();
                $i++;
            }
            return $pesoTotal;
        }

        public function retornarVagonSinCompletar(){
            $i = 0;
            $coleccionVagones = $this->getColeccionDeVagones();
            $vagonSinCompletar = null;
        
            while (($i < count($coleccionVagones)) && ($vagonSinCompletar === null)) {
                $vagon = $coleccionVagones[$i];
                if (is_a($vagon, 'VagonPasajeros')) {
                    if ($vagon->getCantPasajeros() < $vagon->getCantMaxPasajeros()) {
                        $vagonSinCompletar = $vagon;
                    }
                } elseif (is_a($vagon, 'VagonCarga')) {
                    if ($vagon->getPesoCarga() < $vagon->getPesoMaxCarga()) {
                        $vagonSinCompletar = $vagon;
                    }
                }
                $i++;
            }
            return $vagonSinCompletar;
        }
    }
?>