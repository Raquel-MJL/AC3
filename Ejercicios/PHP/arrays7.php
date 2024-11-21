<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays 7</title>
</head>
<body>
    <?php
    //Ejercicio 1

    $edades=array(
        "Juan"=> 24,
        "Pere"=>78,
        "Luisa"=>15,
        "Pilar"=>30,
        "Marina"=>65,
        "Lorena"=>40,


    );

    $temperaturas=array(27,29.7,15,13,40,12,42,50,7,10,14,26);

    $estaciones=array("primavera","verano","otoño","invierno");

    //Funciones 

    $edadesCopia = $edades;
    $temperaturasCopia = $temperaturas;
    $estacionesCopia = $estaciones;

    echo var_dump($edadesCopia)."<br>";
    echo var_dump($temperaturasCopia)."<br>";
    echo var_dump($estacionesCopia)."<br>";

    echo "Elementos de cada array:<br>";
    echo sizeof($edadesCopia)."<br>";
    echo sizeof($temperaturasCopia)."<br>";
    echo sizeof($estacionesCopia)."<br>";


    echo "Claves del array 'Edades' en distintas líneas:<br>";
    $claves = array_keys($edadesCopia); //Se obtienen las claves
    echo implode("<br>", $claves); //Se combinan en un string con saltos de línea
    echo "<br><br>";
    
    
    echo "Valores del array 'Estaciones' en una misma línea separados con espacio barra espacio<br>";
    echo implode(" / ", $estacionesCopia); 
    echo "<br><br>";

    //¿Quién tiene 30 años?
    $clave1 = array_search(30, $edadesCopia);

    if ($clave1 !== false) {
        echo "La persona que tiene 30 años es: $clave1";
    } else {
        echo "Nadie tiene 30 años.";
    }
    echo "<br>";

  //¿Qué posición ocupa la temperatura 29.7? 

    $posicion = array_search(29.7, $temperaturasCopia);

    if ($posicion !== false) {
        echo "El valor 29.7 se encuentra en la posición: $posicion <br>";
    } else {
        echo "El valor 29.7 no se encuentra en el array.";
    }

    echo "La temperatura mayor es " . max($temperaturasCopia)."<br><br>";
    echo "La temperatura menor es " . min($temperaturasCopia)."<br><br>"; 

    echo "La persona que tiene más edad es ". max ($edadesCopia)."<br><br>";
    
    //Carga las estaciones en variables y muéstralas 
    foreach ($estaciones as $estacion) {
        echo $estacion . "<br>"; 
    }
    
    
    //Carga temperaturas en variables y calcula media anual redondeada y con 2 decimales. 

    $temp1 = $temperaturas[0];
    $temp2 = $temperaturas[1];
    $temp3 = $temperaturas[2];
    $temp4 = $temperaturas[3];
    $temp5 = $temperaturas[4];
    $temp6 = $temperaturas[5];
    $temp7 = $temperaturas[6];
    $temp8 = $temperaturas[7];
    $temp9 = $temperaturas[8];
    $temp10 = $temperaturas[9];
    $temp11 = $temperaturas[10];
    $temp12 = $temperaturas[11];
    $mediaTemperaturas = ($temp1 + $temp2 + $temp3 + $temp4 + $temp5 + $temp6 + $temp7 + $temp8 + $temp9 + $temp10 + $temp11 + $temp12) / 12;
    echo "La media anual de temperaturas es: " . round($mediaTemperaturas, 2) . "°C<br><br>";
    
    array_push($temperaturasCopia, 35, 21); //Inserta dos nuevos valores a los ya existentes en temperaturas 

    echo "Array con las nuevas temperaturas añadidas:<br>";
    echo implode(" ",$temperaturasCopia);
    echo "<br><br>";   
    
    array_pop($temperaturasCopia); //Elimina los dos valores nuevos añadidos 
    array_pop($temperaturasCopia);

    echo "Array con las nuevas temperaturas eliminadas:<br>";
    echo implode(" ",$temperaturasCopia);
    echo "<br><br>";  

    //Inserta array estaciones en inglés 
    $estacionesIngles = array("spring", "summer", "autumn", "winter");
    array_unshift($estacionesCopia, $estacionesIngles[0], $estacionesIngles[1], $estacionesIngles[2], $estacionesIngles[3]);
    echo "Nuevo array estaciones: <br>" . implode(" ",$estacionesCopia)."<br>";
    echo "<br><br>";

    array_splice($estacionesCopia, 0, 4); //Borra las estaciones nuevas 
    echo "Array estaciones restaurado: <br>" . implode(" ",$estacionesCopia)."<br><br>";

    echo "Temperaturas invertidas:<br>". implode(" ",array_reverse($temperaturasCopia))."<br><br>";
    
    $estacionesInvertidas = array_reverse($estaciones, true); //Invierte array preservando índices
    echo "Array con estaciones invertidas preservando los índices:<br>";
    echo implode("<br>",$estacionesInvertidas);
    echo "<br><br>";
    
    
    echo "Temperaturas ordenadas descendente:<br>"; 
    arsort($temperaturasCopia);
    echo implode(" ",$temperaturasCopia);
    echo "<br><br>";

    echo "Ordenar edades alfabéticamente ascendente:<br>";
    asort($edadesCopia);
    echo implode(" ",$edadesCopia);
    echo "<br><br>";

    echo "Ordenar estaciones ascendente:<br>";
    sort($estacionesCopia);
    echo implode(" ",$estacionesCopia);
 


    


    ?>
    
</body>
</html>