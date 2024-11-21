<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clases 8</title>
</head>
<body>
    <h1>Ejercicio clases 8</h1>
    <?php
    require 'clases8.php';

    $dni = new DNI(12345678);
    echo "Número: " . $dni->getNumero() . "<br>";  
    echo "Letra: " . $dni->getLetra() . "<br>";    

    // Cambiar el número del DNI y recalcular la letra
    $dni->setNumero(87654321);
    echo "Nuevo número: " . $dni->getNumero() . "<br>";  // Mostrará 87654321
    echo "Nueva letra: " . $dni->getLetra() . "<br>";    // Mostrará la nueva letra correspondiente

    ?>
    
</body>
</html>