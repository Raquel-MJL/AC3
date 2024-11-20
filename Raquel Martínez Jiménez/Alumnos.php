<?php
class Alumno {
    private $cod_alumno;
    private $nombre;
    private $apellidos;
    private $edad;

    public function __construct($cod_alumno, $nombre, $apellidos, $edad) {
        $this->cod_alumno = $cod_alumno;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
    }

    public function __destruct() {
        echo "El objeto con código {$this->cod_alumno} se ha destruido.<br>";
    }

    public function getCodAlumno() {
        return $this->cod_alumno;
    }

    public function setCodAlumno($cod_alumno) {
        $this->cod_alumno = $cod_alumno;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }

    public function obtenerDatos() {
        return get_object_vars($this);
    }
}


?>
