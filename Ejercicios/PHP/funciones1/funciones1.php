<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones 1</title>
    <link rel=stylesheet href=estilos.css>
</head>
<body>
    <?php

//Ejercicio 1 - Función sumar     
    $a =13;
    $b = 25;

   
    function sumar(){
        global $a;
        global $b;
        $c=30;
        $d=74;
        $resultado = $a + $b + $c + $d;
        echo "Resultado: ". $resultado."<br>";

    };

    sumar();

    //Ejercicio 2 - Sumar con parámetros con valor predeterminado

     
    function sumarA($e,$f,$g=50,$h=12){
        
        $resultado = $e + $f + $g + $h;
        echo "Resultado segunda función: ". $resultado."<br>";

    };

    sumarA(7,5,6,9); //Si se dan parámetros se sobreescriben los valores por defecto 
    sumarA(7,5);
    
    //Ejercicio 3 - Potencia 

    function potencia(){
        $j = 25;
        $resultado=$j*$j*$j*$j*$j*$j*$j*$j*$j*$j*$j*$j;
        echo "Resultado powtencia: ". number_format($resultado, 0, ',', '.')."<br>";

    };

    function powtencia(){
        $j = 25;
        echo "Resultado potencia: ". number_format(pow($j,12), 0, ',', '.');

    };
    
    potencia();
    powtencia();
    
 

    ?>
    
</body>
</html>