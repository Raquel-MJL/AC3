<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Clases 1</title>
</head>
<body>
    <h1 >Ejercicio Clases 1</h1>
    <?php
    require 'clases1.php';

    //EJERCICIO 1
 
    // Crear un objeto de la clase Cliente
    $cliente1 = new Cliente("Juan", "Pérez", "Calle Falsa 123", "555-1234", "ES1234567890123456789012", "Tarjeta");

    // Mostrar los datos del cliente individualmente
    echo "Nombre: " . $cliente1->nombre . "<br>";
    echo "Apellidos: " . $cliente1->apellidos . "<br>";
    echo "Dirección: " . $cliente1->direccion . "<br>";
    echo "Teléfono: " . $cliente1->telefono . "<br>";
    echo "Número de Cuenta: " . $cliente1->numeroCuenta . "<br>";
    echo "Forma de Pago: " . $cliente1->formaPago . "<br>";

    // Mostrar los datos del cliente utilizando un bucle foreach
    $clienteData = [
        'Nombre' => $cliente1->nombre,
        'Apellidos' => $cliente1->apellidos
    ];

    
    echo "<br>";
    //EJERCICIO 2
    $casa1 = new Casa();  //Sin función constructora, hay que crear los objetos a mano 
    $casa1->tipo = "Chalet adosado";
    $casa1->numHabitaciones = 4;
    $casa1->metrosCuadrados = 125;
    
    $casa2 = new Casa();
    $casa2->tipo = "Piso";
    $casa2->numHabitaciones = 2;
    $casa2->metrosCuadrados = 65;
    
    $casa3 = new Casa();
    $casa3->tipo = "Casa independiente";
    $casa3->numHabitaciones = 6;
    $casa3->metrosCuadrados = 150;

    echo "Primera casa: <br>";
    echo "Tipo: " . $casa1->tipo . "<br>";
    echo "Número de habitaciones: " . $casa1->numHabitaciones . "<br>";
    echo "Metros cuadrados: " . $casa1->metrosCuadrados . "<br><br>";
    
    echo "Segunda casa: <br>";
    echo "Tipo: " . $casa2->tipo . "<br>";
    echo "Número de habitaciones: " . $casa2->numHabitaciones . "<br>";
    echo "Metros cuadrados: " . $casa2->metrosCuadrados . "<br><br>";
    
    echo "Tercera casa: <br>";
    echo "Tipo: " . $casa3->tipo . "<br>";
    echo "Número de habitaciones: " . $casa3->numHabitaciones . "<br>";
    echo "Metros cuadrados: " . $casa3->metrosCuadrados . "<br>";

    echo "<br>";

    //Ejercicio 3 
    $movil1 = new Movil("Samsung", "Galaxy S23", 999);
    $movil2 = new Movil("Iphone", "14 Pro Max", 1799);
    $movil3 = new Movil("Motorola", "Pro Play", 780);

    echo "<b>Datos del primer móvil:</b><br>";
    $movil1->mostrarDatos();
    
    echo "<b>Datos del segundo móvil:</b><br>";
    $movil2->mostrarDatos();
    
    echo "<b>Datos del tercer móvil:</b><br>";
    $movil3->mostrarDatos();
    
    
    
    //Ejercicio 4 
    
    // Crear los objetos de la clase Empleados
    $empleado1 = new Empleados("Raquel", "Martínez Jiménez", "Junior", 2020, 1600);
    $empleado2 = new Empleados("Jose Antonio", "Gea Falcon", "Senior", 2018, 3500);

    // Almacenar los objetos en un array
    $empleados = array($empleado1, $empleado2);

    // Usar foreach para recorrer el array y mostrar los datos
    foreach ($empleados as $empleado) {
        echo "<b>Datos del empleado:</b><br>";
        $empleado->mostrarDatos(); // Esto incluye la antigüedad
    };

    ?>

    
    
</body>
</html>