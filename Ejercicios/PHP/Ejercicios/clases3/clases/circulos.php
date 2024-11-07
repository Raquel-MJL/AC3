<?php
// Circulos.php

class Circulos {
    // Definir constante PI
    const PI = 3.14159;

    // Propiedad privada para el radio
    private $radio;

    // Constructor
    public function __construct($radio) {
        $this->radio = $radio;
        echo "Se ha creado un círculo con radio: {$this->radio}.<br>";
    }

    // Destructor
    public function __destruct() {
        echo "El círculo con radio {$this->radio} ha sido destruido.<br>";
    }

    // Método para calcular el diámetro
    public function calcularDiametro() {
        $diametro = 2 * $this->radio;
        echo "El diámetro de un círculo de radio {$this->radio} es {$diametro}.<br>";
    }

    // Método para calcular la circunferencia
    public function calcularCircunferencia() {
        $circunferencia = 2 * self::PI * $this->radio;
        echo "La circunferencia de un círculo de radio {$this->radio} es {$circunferencia}.<br>";
    }

    // Método para calcular el área
    public function calcularArea() {
        $area = self::PI * pow($this->radio, 2);
        echo "El área de un círculo de radio {$this->radio} es {$area}.<br>";
    }

    // Getter para el radio
    public function getRadio() {
        return $this->radio;
    }

    // Setter para el radio
    public function setRadio($radio) {
        if ($radio > 0) {
            $this->radio = $radio;
            echo "El radio del círculo ha sido actualizado a: {$this->radio}.<br>";
        } else {
            echo "El radio debe ser mayor que 0.<br>";
        }
    }
}
?>

