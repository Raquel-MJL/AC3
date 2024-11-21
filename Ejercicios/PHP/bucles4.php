<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucles 4</title>
</head>
<body>
    <?php
    require 'datos-bucles4.php';
    for ($i = 1; $i <= 60; $i++) {
        echo $i;
    
        // Verificar si el número es múltiplo de 3 y de 8
        if ($i % 3 == 0 && $i % 8 == 0) {
            echo " - Múltiplo de 3 y 8";
        }
        // Verificar si el número es múltiplo de 3
        elseif ($i % 3 == 0) {
            echo " - Múltiplo de 3";
        }
        // Verificar si el número es múltiplo de 8
        elseif ($i % 8 == 0) {
            echo " - Múltiplo de 8";
        }
    
        // Si el número es múltiplo de 5, agregar una línea horizontal 
        if ($i % 5 == 0) {
            echo "<hr>";  
        }
    
        // Saltar a la siguiente línea
        echo "<br>";
    }
    ?>
    
</body>
</html>