<?php
    class Categoria{
        private $idCategoria;
        private $descripcion;

        public function __construct($idCategoria, $descripcion) {
            $this->idCategoria = $idCategoria;
            $this->descripcion = $descripcion;
        }

        public function getIdCategoria() {
            return $this->idCategoria;
        }
        public function getDescripcion() {
            return $this->descripcion;
        }

        public function setIdCategoria($idCategoria) {
            $this->idCategoria = $idCategoria;
        }
        public function setDescripcion($descripcion) {
            $this->descripcion = $descripcion;
        }

        public function __toString(){
            return
            "\nInformacion de la Categoria: \n" .
            "ID de Categoria: " . $this->getIdCategoria() . "\n" .
            "Descripcion: " . $this->getDescripcion() . "\n";
        }
        
    }
?>