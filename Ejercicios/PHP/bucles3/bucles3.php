<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucles 3</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <?php
    require 'bucles-for.php';

    //Ejercicio 1 
    /*while($i<=10){ //Imprima números del 1-10 
        echo $i." ";
        $i++;
    }
    while($i<=4){ //Que salga a la cuarta vuelta 
        echo $i." ";
        $i++;
    } */
    while($i<=10){ //Para que se salte la cuarta iteración 
        if($i==4){
            $i++;
            continue;

        }
        echo $i." ";
        $i++;
        
    }
    
    echo"<br>";

    //Ejercicio 2
    while ($x <= 200) {
        echo $x . " ";
        $x += 10; 
    }

    echo"<br>";




    //Ejercicio 3
    echo "Tabla de multiplicar del 6<br>";
    while ($y<=10){
        echo "Seis por " . $y . " es " . $seis . "<br>";
        $seis+=6;
        $y++;
    }

    //Ejercicio 4

    while ($z <= 50) {
        if ($z % 2 != 0) {
            $z++;
            continue;  
        }
    
        echo $z . " ";
        $z++;
    }

    ?>

    

</body>
</html>
