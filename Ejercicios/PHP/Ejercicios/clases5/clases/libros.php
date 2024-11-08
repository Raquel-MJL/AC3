<?php
require_once 'clases/obrasEscritas.php';
class Libros extends ObrasEscritas{  //Clase 
    private $ISBN;
    private $titulo;
    private $autor;
    private $estilo;
    private $edicion;
    private $precio;

// Constructor
public function __construct($ISBN, $titulo, $autor, $estilo, $edicion, $precio) {
    $this->ISBN = $ISBN;
    $this->titulo = $titulo;
    $this->autor = $autor;
    $this->estilo = $estilo;
    $this->edicion = $edicion;
    $this->precio = $precio;
}

// Métodos Getter y Setter
public function getISBN() {
    return $this->ISBN;
}

public function setISBN($ISBN) {
    $this->ISBN = $ISBN;
}

public function getTitulo() {
    return $this->titulo;
}

public function setTitulo($titulo) {
    $this->titulo = $titulo;
}

public function getAutor() {
    return $this->autor;
}

public function setAutor($autor) {
    $this->autor = $autor;
}

public function getEstilo() {
    return $this->estilo;
}

public function setEstilo($estilo) {
    $this->estilo = $estilo;
}

public function getEdicion() {
    return $this->edicion;
}

public function setEdicion($edicion) {
    $this->edicion = $edicion;
}

public function getPrecio() {
    return $this->precio;
}

public function setPrecio($precio) {
    $this->precio = $precio;
}


public function incrementar5() {
    // Si el estilo es novela o poesía, incrementa el precio
    if ($this->estilo == "novela" || $this->estilo == "poesía") {
        $this->precio += $this->precio * 0.05; // Incrementa el precio en un 5%
    }
}

public function mostrarDatos() {    // Si el estilo es novela o poesía, incrementamos el precio antes de mostrar

   
        echo "ISBN: " . $this->ISBN . "<br>";
        echo "Título: " . $this->titulo . "<br>";
        echo "Autor: " . $this->autor . "<br>";
        echo "Estilo: " . $this->estilo . "<br>";
        echo "Edición: " . $this->edicion . "<br>";
        echo "Precio: $" . number_format($this->precio, 2) . "<br>";
    }
}





?>
