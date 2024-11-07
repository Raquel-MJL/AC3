<?php

// Definición de la clase Cliente
class Cliente {
    // Propiedades públicas
    public $nombre;
    public $apellidos;
    public $direccion;
    public $telefono;
    public $numeroCuenta;
    public $formaPago;

    // Método constructor
    public function __construct($nombre, $apellidos, $direccion, $telefono, $numeroCuenta, $formaPago) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->numeroCuenta = $numeroCuenta;
        $this->formaPago = $formaPago;
    }
}

//EJERCICIO 2 

class Casa{
    public $tipo;
    public $numHabitaciones;
    public $metrosCuadrados;

}

//EJERCICIO 3 

class Movil {
    // Propiedades privadas
    private $marca;
    private $modelo;
    private $precio;

    // Constructor para inicializar las propiedades
    public function __construct($marca, $modelo, $precio) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->precio = $precio;
    }

    // Métodos getters para acceder a las propiedades privadas
    public function getMarca() {
        return $this->marca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function mostrarDatos() {
        echo "Marca: " . $this->getMarca() . "<br>";
        echo "Modelo: " . $this->getModelo() . "<br>";
        echo "Precio: " . $this->getPrecio() . "€<br><br>";
    }
}

//Ejercicio 4 
class Empleados {
    private $nombre;
    private $apellidos;
    private $categoria;
    private $anioAlta;
    private $sueldo;

    // Constructor para inicializar las propiedades
    public function __construct($nombre, $apellidos, $categoria, $anioAlta, $sueldo)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->categoria = $categoria;
        $this->anioAlta = $anioAlta;
        $this->sueldo = $sueldo;
    }

    // Métodos getter para acceder a las propiedades privadas
    public function getNombre() {
        return $this->nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getAñoAlta() {
        return $this->anioAlta;
    }

    public function getSueldo() {
        return $this->sueldo;
    }

    // Método para calcular la antigüedad
    public function calcularAntiguedad() {
        $anioActual = date("Y"); // Obtener el año actual
        return $anioActual - $this->anioAlta;
    }

    // Método para mostrar los datos del empleado
    public function mostrarDatos() {
        echo "Nombre: " . $this->getNombre() . " " . $this->getApellidos() . "<br>";
        echo "Categoría: " . $this->getCategoria() . "<br>";
        echo "Año de alta: " . $this->getAñoAlta() . "<br>";
        echo "Sueldo: " . $this->getSueldo() . "€<br>";
        echo "Antigüedad: " . $this->calcularAntiguedad() . " años<br><br>";
    }
}



?>