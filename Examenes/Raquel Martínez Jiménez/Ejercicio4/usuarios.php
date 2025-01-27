<?php

class Usuarios {
   
    private $nombre;
    private $clave;

    
    public function __construct($nombre, $clave) {
        $this->nombre = $nombre;
        $this->clave = $clave;
    }

    
    public function getNombre() {
        return $this->nombre;
    }

    public function getClave() {
        return $this->clave;
    }

    
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setClave($clave) {
        $this->clave = $clave;
    }

   
    public function getDatos() {
        return "Nombre: " . $this->nombre . ", Clave: " . $this->clave;
    }
}

?>
