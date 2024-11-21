<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones 5</title>
</head>
<body>
    <h1>Ejercicio Funciones 5</h1>
    <?php

    //Ejercicio 1 - Función flecha para incrementar un número como parámetro 
    $numero = 5;
    $incrementar = fn($numero) => ++$numero;
    echo "Función incrementar: ". $incrementar($numero)."<br>"; 

    //Ejercicio 2 - Función anónima que inserte en un texto un nombre como parámetro. 

    $saludo=function($name){
        $texto="Hola $name ,¿Cómo estás?<br>";
        echo $texto;
    };
    
    $saludo("Raquel");
    
    //Ejercicio 3 - Fn anónima sin parámetros y muestre cualquier mensaje por pantalla, ejecutada desde otra fn. 

    function ejecutarFuncion($funcion){
        $funcion();
    };
    
    $mostrarMensaje=function(){
        echo "Cualquier mensaje";
    };

    ejecutarFuncion($mostrarMensaje);
    
    ?>

    
    
</body>
</html>