<?php

class Cuentas {
    private $codcliente;
    private $numeroCuenta;
    private $nombre;
    private $apellidos;
    private $saldo;

    // Constructor con parámetros
    public function __construct($codcliente, $numeroCuenta, $nombre, $apellidos, $saldo) {
        $this->codcliente = $codcliente;
        $this->numeroCuenta = $numeroCuenta;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->saldo = $saldo;
    }

    // Destructor
    public function __destruct() {
        echo "La cuenta de {$this->nombre} {$this->apellidos} ha sido destruida.<br>";
    }

    // Método para ingresar dinero
    public function ingresarDinero($cantidad) {
        if ($cantidad > 0) {
            $this->saldo += $cantidad;
            echo "Se han ingresado {$cantidad} euros en la cuenta de {$this->nombre} {$this->apellidos}.<br>";
        } else {
            echo "La cantidad debe ser positiva para ingresar dinero.<br>";
        }
    }

    // Método para sacar dinero
    public function sacarDinero($cantidad) {
        if ($cantidad <= 0) {
            echo "La cantidad a retirar debe ser positiva.<br>";
            return;
        }

        if ($cantidad > $this->saldo) {
            echo "No hay suficiente saldo en la cuenta de {$this->nombre} {$this->apellidos}.<br>";
        } else {
            $this->saldo -= $cantidad;
            echo "Se han retirado {$cantidad} euros de la cuenta de {$this->nombre} {$this->apellidos}.<br>";
        }
    }

    // Método para consultar el saldo
    public function consultarSaldo() {
        return $this->saldo;
    }

    // Métodos para obtener los datos del cliente
    public function obtenerDatos() {
        return [
            'codcliente' => $this->codcliente,
            'numeroCuenta' => $this->numeroCuenta,
            'nombre' => $this->nombre,
            'apellidos' => $this->apellidos,
            'saldo' => $this->saldo
        ];
    }
}

?>