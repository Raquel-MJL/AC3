<?php
class Empleados1{
    private $id;
    private $nombre;
    private $apellidos;
    private $puesto;
    private $sueldo;
    private $antiguedad;


    // Constructor con valor predeterminado para el id
    public function __construct($id = null, $nombre, $apellidos, $puesto, $sueldo, $antiguedad) {
        // Si no se pasa un id, generar uno aleatorio
        $this->id = $id ?? rand(0001, 1000); // Genera un ID aleatorio entre 1 y 1000
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->puesto = $puesto;
        $this->sueldo = $sueldo;
        $this->antiguedad = $antiguedad;
    }

    // Getter
    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getPuesto() {
        return $this->puesto;
    }

    public function getSueldo() {
        return $this->sueldo;
    }

    public function getAntiguedad() {
        return $this->antiguedad;
    }

    // Setter
    public function setId($id) {
        $this->id = $id;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function setPuesto($puesto) {
        $this->puesto = $puesto;
    }

    public function setSueldo($sueldo) {
        $this->sueldo = $sueldo;
    }

    public function setAntiguedad($antiguedad) {
        $this->antiguedad = $antiguedad;
    }

    // Método para mostrar los datos del empleado usando un bucle 
    public function datos() {
        // Definir un array con los datos a mostrar
        $datos = [
            "ID" => $this->getID() ."<br>",
            "Nombre" => $this->getNombre() . " " . $this->getApellidos(),
            "Puesto" => $this->getPuesto(),
            "Sueldo" => $this->getSueldo(),
            "Antiguedad" => $this->getAntiguedad() . "€",
        ];
    
        // Recorrer el array y mostrar los datos
        foreach ($datos as $clave => $valor) {
            echo $clave . ": " . $valor . "<br>";
        }
    
        echo "<br>";
    }



}



?>