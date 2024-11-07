<?php

require_once 'Aritmetica.php'; 

class Multiplicacion extends Aritmetica {

    
    public function multiplicar() {
        $this->resultado = $this->numero1 * $this->numero2;
    }
}
?>
