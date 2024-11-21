<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays 3</title>
</head>
<body>
    <?php

    //Ejercicio 1 

    //Con la función array 
    $meses=array(
        "Enero" => 31,
        "Febrero" => 28,
        "Marzo" => 31,
        "Abril" => 30,
        "Mayo" => 31,
        "Junio" => 30,
        "Julio" => 31,
        "Agosto" => 31,
        "Septiembre" => 30,
        "Octubre" => 31,
        "Noviembre" => 30,
        "Diciembre" =>31,
    );
    
    foreach ($meses as $mes => $dias){
        echo $mes." tiene ".$dias." días<br>";
    }

    //Entre corchetes 
    $meses = array();
    $meses["Enero"] = 31;
    $meses["Febrero"] = 28;
    $meses["Marzo"] = 31;
    $meses["Abril"] = 30;
    $meses["Mayo"] = 31;
    $meses["Junio"] = 30;
    $meses["Julio"] = 31;
    $meses["Agosto"] = 31;
    $meses["Septiembre"] = 30;
    $meses["Octubre"] = 31;
    $meses["Noviembre"] = 30;
    $meses["Diciembre"] = 31;

    foreach ($meses as $mes => $dias) {
        echo $mes . " tiene " . $dias . " días<br>";
    }

    

    

    //Ejercicio 2

    $cliente=array(
        "Cod_cliente"=> 25633,
        "Numero_cuenta"=> "ES2565896523654856",
        "Nombre"=> "Raquel",
        "Apellido1"=>"Martínez",
        "Apellido2"=> "Jiménez",
        "Dirección" => "Ocaña 28",
        "Localidad" => "Ocaña",
        "Saldo" => 5214.00,
        "Fecha_apertura_cuenta" => "12/05/2017",

    );

    foreach($cliente as $tipo => $dato){
        echo $tipo . " ". $dato . "<br>";
    }


    //Ejercicio 3 

    $claves=array(
        "Jose123" => 52145862,
        "Raquel95"=> "R99sxds",
        "Miguel" => 4215,
        "Rossy8989"=> "clntik23$",
    );

    // Obtener el primer par clave-valor
    reset($claves); // Mueve el puntero al primer elemento
    $primer_clave = key($claves); // Obtiene la clave del primer elemento
    $primer_valor = current($claves); // Obtiene el valor del primer elemento
    
    // Obtener el último par clave-valor
    end($claves); // Mueve el puntero al último elemento
    $ultimo_clave = key($claves); // Obtiene la clave del último elemento
    $ultimo_valor = current($claves); // Obtiene el valor del último elemento

    // Mostrar los resultados
    echo "Primer par: Clave = " . $primer_clave . ", Valor = " . $primer_valor . "<br>";
    echo "Último par: Clave = " . $ultimo_clave . ", Valor = " . $ultimo_valor . "<br>";
?>






    
    
    
    
    
</body>
</html>