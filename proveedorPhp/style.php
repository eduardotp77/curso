<?php

    class Style{
        
        private $className;
        private $style;
        
        public function __construct($class,$style){
            $this->className = $class;
            $this->style = $style;
        }
        
        #setters
        
        public function establecerClase($clase){
            $this->className = $clase;
        }
        
        public function establecerStyle($estilo){
            $this->style = $estilo;
        }
        
        #getters
        
        public function obtenerClase(){
            return $this->className;
        }
        
        public function obtenerEstilo(){
            return $this->style;
        }
        
        public function agregarStyle(){
            
            $nombre = $this->obtenerClase();
            $estilo = $this->obtenerEstilo();
            
            return $nombre.'{'.$estilo.'}';
            
        }
        
    }

?>