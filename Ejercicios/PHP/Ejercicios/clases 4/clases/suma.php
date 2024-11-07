<?php

require_once 'Aritmetica.php'; 

class Suma extends Aritmetica {

    public function sumar() {
        $this->resultado = $this->numero1 + $this->numero2;
    }
}
?>
