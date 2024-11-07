<?php

require_once 'Aritmetica.php'; 

class Division extends Aritmetica {

    public function dividir() {
       
            $this->resultado = $this->numero1 / $this->numero2;
       
    }
}
?>
