<?php

class Aritmetica {
    protected $numero1;
    protected $numero2;
    protected $resultado;

    // Método para cargar el valor de numero1
    public function cargarNumero1($numero) {
        $this->numero1 = $numero;
    }

    // Método para cargar el valor de numero2
    public function cargarNumero2($numero) {
        $this->numero2 = $numero;
    }

    // Método getter para obtener el valor de numero1
    public function getNumero1() {
        return $this->numero1;
    }

    // Método getter para obtener el valor de numero2
    public function getNumero2() {
        return $this->numero2;
    }

    // Método para obtener el contenido de resultado
    public function obtenerResultado() {
        return $this->resultado;
    }
}
?>
