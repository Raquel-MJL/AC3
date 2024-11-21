<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clases 3</title>
    <link rel=stylesheet href="estilos.css">
</head>
<body>
    <?php

    //EJERCICIO 1
    require 'clases/cuentas.php';
    $cliente = new Cuentas(52366,"ES56655153168453","Raquel","Martínez",5500.62);
    
    //Mostrar datos con foreach
    echo "Datos actuales del cliente:<br>";
    foreach ($cliente->obtenerDatos() as $key => $value) {
        echo "{$key}: {$value}<br>";
    }

    // Operación 1: Sacar 1.000,00 euros de la cuenta
    $cliente->sacarDinero(1000.00);

    // Confirmar que el saldo ha cambiado
    echo "<br>Nuevo saldo después de la retirada de dinero: " . $cliente->consultarSaldo() . " euros.<br>";

    // Operación 2: Ingresar 500,00 euros en la cuenta
    $cliente->ingresarDinero(500.00);

    // Mostrar el nuevo saldo
    echo "<br>Nuevo saldo después del ingreso de dinero: " . $cliente->consultarSaldo() . " euros.<br>";
    
    //Ejercicio 2
    require 'clases/circulos.php';

    $circulo1 = new Circulos(5);
    $circulo2 = new Circulos(10);
    $circulo3 = new Circulos(15);

    echo "El valor del radio de un círculo es: ". $circulo2->getRadio()."<br>";

    // Cambiar el radio de circulo1 para que sea igual al de circulo2
    $circulo1->setRadio($circulo2->getRadio());
    echo "El radio del círculo 1 ha cambiado y ahora es: ".$circulo1->getRadio()."<br>";
    
    // Calcular y mostrar el diámetro, circunferencia y área para circulo1
    echo "Círculo 1 (Radio = " . $circulo1->getRadio() . "):<br>";
    $circulo1->calcularDiametro();
    $circulo1->calcularCircunferencia();
    $circulo1->calcularArea();
    echo "<br>";

    // Calcular y mostrar el diámetro, circunferencia y área para circulo2
    echo "Círculo 2 (Radio = " . $circulo2->getRadio() . "):<br>";
    $circulo2->calcularDiametro();
    $circulo2->calcularCircunferencia();
    $circulo2->calcularArea();
    echo "<br>";

    // Calcular y mostrar el diámetro, circunferencia y área para circulo3
    echo "Círculo 3 (Radio = " . $circulo3->getRadio() . "):<br>";
    $circulo3->calcularDiametro();
    $circulo3->calcularCircunferencia();
    $circulo3->calcularArea();
    
    //EJERCICIO 3 

    require 'clases/trabajadores.php';
    $empleado1=new Trabajador("Irene","Martínez Jiménez",5,1600);
    $empleado2=new Trabajador("Raquel","Martínez Jiménez",2,2400);
    $empleado3=new Trabajador("Rosa","Caballero Lunar",4,4000);

    
    echo $empleado1->calcularSueldoNeto()."<br>";
    echo $empleado2->calcularSueldoNeto()."<br>";
    echo $empleado3->calcularSueldoNeto()."<br>";

    $empleado1->aumentarSueldoBruto();
    $empleado2->aumentarSueldoBruto();
    $empleado3->aumentarSueldoBruto();

    echo "<br>Después de aumentar el sueldo bruto en 70 euros:<br>";
    echo $empleado1->calcularSueldoNeto() . "<br>";
    echo $empleado2->calcularSueldoNeto() . "<br>";
    echo $empleado3->calcularSueldoNeto() . "<br>";
    
    ?>
    
</body>
</html>