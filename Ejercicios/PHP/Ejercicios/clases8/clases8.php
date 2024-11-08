<?php
class DNI {
    private $numero;
    private $letra; 

    // Constructor para inicializar el número y calcular la letra
    public function __construct($numero) {
        $this->setNumero($numero); // Se establece el número a través del setter
    }

    // Método para calcular la letra correspondiente al número del DNI
    private function calcularLetra() {
        $letras = ["T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z","S","Q","V","H","L","C","K","E"]; 
        $resto = $this->numero % 23; 
        return $letras[$resto];
    }

    // Métodos getter y setter
    public function getNumero() {
        return $this->numero;
    }

    public function getLetra() {
        return $this->letra;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
        // Recalcular la letra cada vez que se cambia el número
        $this->letra = $this->calcularLetra();
    }

    public function setLetra($letra) {
        $this->letra = $letra;
    }
}
?>
