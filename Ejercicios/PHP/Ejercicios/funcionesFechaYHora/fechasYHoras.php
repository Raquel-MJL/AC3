<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Fecha y hora del sistema</p><br>
    <?php 
    $fecha1=date("d/m/Y");
    echo "Fecha actual: " . $fecha1."<br>"; 
    echo "Fecha con segundos: ". $fecha1 .' → '. time() ."<br>";?> 
    
    
    
    <p>Saludo según hora: </p>
    <?php
    require 'funciones.php';
    saludo();
    ?>

    <p>Ejercicio 3 Objeto Fecha y Hora: </p>

    <?php
    // Crear un objeto DateTime con la fecha y hora actual
    $fecha_hora = new DateTime();
    
    // Mostrar la fecha actual con el año en 2 dígitos
    echo "<p>Fecha actual (año 2 dígitos): " . $fecha_hora->format("d-m-y") . "</p>";
    
    // Mostrar el día de la semana actual en número (0 = domingo, 6 = sábado)
    echo "<p>Día de la semana (número): " . $fecha_hora->format("w") . "</p>";
    
    // Mostrar el día de la semana actual como texto (ejemplo: "lunes", "martes")
    echo "<p>Día de la semana (texto): " . $fecha_hora->format("l") . "</p>";
    
    // Mostrar el mes actual en número (01 a 12)
    echo "<p>Mes actual (número): " . $fecha_hora->format("m") . "</p>";
    
    // Mostrar el mes actual como texto (ejemplo: "enero", "febrero")
    echo "<p>Mes actual (texto): " . $fecha_hora->format("F") . "</p>";
    
    // Mostrar el año actual con 4 dígitos
    echo "<p>Año actual: " . $fecha_hora->format("Y") . "</p>";
    
    // Mostrar sólo la hora actual (formato 24 horas)
    echo "<p>Hora actual: " . $fecha_hora->format("H:i") . "</p>";
    
    // Mostrar la fecha y hora actual con el año en 4 dígitos y la hora con segundos
    echo "<p>Fecha y hora actual (año 4 dígitos, hora con segundos): " . $fecha_hora->format("d-m-Y H:i:s") . "</p>";
    ?>
    
    ?>


    
</body>
</html>