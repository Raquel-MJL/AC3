<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clases 4</title>
</head>
<body>
    <?php
    require 'clases/suma.php';
    require 'clases/resta.php';
    require 'clases/multiplicacion.php';
    require 'clases/division.php';


// Crear objeto de la clase Suma
    $suma = new Suma();
    $suma->cargarNumero1(10);
    $suma->cargarNumero2(5);
    $suma->sumar();
    echo "La suma de ". $suma->getNumero1() . " y " . $suma->getNumero2() . " es: ". $suma->obtenerResultado(). "<br>";

// Crear objeto de la clase Resta
    $resta = new Resta();
    $resta->cargarNumero1(90);
    $resta->cargarNumero2(5);
    $resta->restar();
    echo "La resta de ". $resta->getNumero1() . " y " . $resta->getNumero2() . " es: ". $resta->obtenerResultado(). "<br>";

// Crear objeto de la clase Multiplicacion
    $multiplicacion = new Multiplicacion();
    $multiplicacion->cargarNumero1(20);
    $multiplicacion->cargarNumero2(5);
    $multiplicacion->multiplicar();
    echo "La multiplicación de ". $multiplicacion->getNumero1() . " y " . $multiplicacion->getNumero2() . " es: ". $multiplicacion->obtenerResultado(). "<br>";

// Crear objeto de la clase Division
    $division = new Division();
    $division->cargarNumero1(40);
    $division->cargarNumero2(5);
    $division->dividir();
    echo "La división de ". $division->getNumero1() . " y " . $division->getNumero2() . " es: ". $division->obtenerResultado(). "<br>";
    ?>
    
</body>
</html>