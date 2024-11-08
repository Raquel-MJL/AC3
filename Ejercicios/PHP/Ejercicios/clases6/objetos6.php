<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clases6</title>
</head>
<body>
    <h1>Ejercicio Clases6</h1>
    <?php
    require 'clases/empleados1.php';
    require 'clases/empleados2.php';

    $empleado1=new Empleados1(895,"Raquel","Martínez Jiménez","Trainee",1500,1);
    $empleado2=new Empleados1(null,"Helena","Rodríguez Almería","Senior",3500,7);
    
    $empleado1->datos();
    echo "<br>";
    $empleado2->datos();
    echo "<br>";


    $empleado3=new Empleados2(256,"Juanjo","Carrés Alvoy","Middle",2500,4);
    $empleado4=new Empleados2(null,"Mikaela","Flitzy Mattel","QA",4500,12);

    $empleado3->datos();
    echo "<br>";
    $empleado4->datos();
    echo "<br>";




    ?>

    
</body>
</html>