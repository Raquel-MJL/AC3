<?php
class Empleados2{
    private $id;
    private $nombre;
    private $apellidos;
    private $puesto;
    private $sueldo;
    private $antiguedad;


    public function __construct() {  //Constructor con func_get_args()
        $args = func_get_args(); // Obtener todos los argumentos pasados

        // Verificar si el primer argumento (id) está presente
        if (isset($args[0])) {
            $this->id = $args[0]; // Si se pasa el id, asignarlo
        } else {
            $this->id = rand(1, 1000); // Si no se pasa el id, generar uno aleatorio
        }

        // Asignar los demás valores (estos deben ser proporcionados siempre)
        $this->nombre = $args[1];
        $this->apellidos = $args[2];
        $this->puesto = $args[3];
        $this->sueldo = $args[4];
        $this->antiguedad = $args[5];
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