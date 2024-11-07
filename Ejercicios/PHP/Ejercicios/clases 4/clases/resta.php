<?php

require_once 'Aritmetica.php'; 

class Resta extends Aritmetica {

    public function restar() {
        $this->resultado = $this->numero1 - $this->numero2;
    }
}
?>
