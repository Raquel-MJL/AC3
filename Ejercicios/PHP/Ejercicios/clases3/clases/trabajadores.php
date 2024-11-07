<?php
class Trabajador{
    private $nombre;
    private $apellidos;
    private $nhijos;
    private $sueldoBruto;

    public function __construct($nombre, $apellidos, $nhijos, $sueldoBruto)
    {
        $this->nombre=$nombre;
        $this->apellidos=$apellidos;
        $this->nhijos=$nhijos;
        $this->sueldoBruto=$sueldoBruto;
    }

    // Métodos getter y setter
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

    public function getNHijos() {
        return $this->nhijos;
    }

    public function setNHijos($nhijos) {
        $this->nhijos = $nhijos;
    }

    public function getSueldoBruto() {
        return $this->sueldoBruto;
    }

    public function setSueldoBruto($sueldoBruto) {
        $this->sueldoBruto = $sueldoBruto;
    }

    //MÉTODO CALCULAR SUELDO NETO SEGÚN Nº HIJOS 
    public function calcularSueldoNeto() {
        if ($this->nhijos >= 3) {
            $irpf = 0.06;  
        } elseif ($this->nhijos >= 1) {
            $irpf = 0.12;  
        } else {
            $irpf = 0.18;  
        }

        // Descuento por Seguridad Social
        $seguridadSocial = 0.05;  

        //Operaciones
        $descuentoIRPF = $this->sueldoBruto * $irpf;
        $descuentoSeguridadSocial = $this->sueldoBruto * $seguridadSocial;
        $sueldoNeto = $this->sueldoBruto - $descuentoIRPF - $descuentoSeguridadSocial;

        //Retorno del sueldo neto 
        return "El sueldo neto del trabajador {$this->nombre} {$this->apellidos} es: ".$sueldoNeto;
    }
    
    public function aumentarSueldoBruto() {
        $this->sueldoBruto += 70; // Aumentar 70 euros al sueldo bruto
    }
    
    public function __destruct()
    {
        echo "El trabajador{$this->nombre} {$this->apellidos} ha sido destruido<br>";
    }




}

?>