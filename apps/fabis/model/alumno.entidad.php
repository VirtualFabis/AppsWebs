<?php
    class Alumno
    {
        private $id;
        private $Codigo;
        private $Descripcion;
        private $Precio;
        private $Stock;
        private $Foto;

        public function __GET($k){ return $this->$k; }
        public function __SET($k, $v){ return $this->$k = $v; }
    }