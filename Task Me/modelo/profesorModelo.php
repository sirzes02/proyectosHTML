<?php
    class profesorModelo{
        private $nombre;
        private $descripcion;
        private $investigacion;
        private $correo;
        
        public function __construct($nombre, $descripcion, $investigacion, $correo){
            $this->nombre = $nombre;
            $this->descripcion = $descripcion;
            $this->investigacion = $investigacion;
            $this->correo = $correo;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function getDescripcion(){
            return $this->descripcion;
        }

        public function getInvestigacion(){
            return $this->investigacion;
        }

        public function getCorreo(){
            return $this->correo;
        }
        
    }
?>