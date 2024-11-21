<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays 5</title>
</head>
<body>
    <?php

    //Ejercicio 1
    require 'arrays5.php';
    echo $numeros[0][2]."<br>"; 
    echo $numeros[1][1]."<br>"; 
    echo $numeros[2][0]."<br>"; 
    echo $numeros[3][2]."<br>"; 
    echo $numeros[4][0]."<br>";

    echo "<br>Usando bucle foreach:<br>";


    foreach($numeros as $subArray){
        foreach ($subArray as $numero) {
            echo $numero . "<br>";
        }

        echo "<br>";

    }

    //Ejercicio 2

    echo "Saldo del primer cliente: ". $clientes[0]["Saldo"]."<br>";
    echo "Apellidos del segundo cliente: ".$clientes[1]["Apellidos"]."<br>";
    echo "Código de cuenta del tercer cliente: ".$clientes[2]["Codcuenta"]."<br>";
   

    // Mostrar todos los datos y sus tipos de datos
    echo "<br>Mostrar todos los datos con tipos de datos:<br>";
    foreach ($clientes as $cliente) {
        foreach ($cliente as $key => $value) {
            echo "Clave: $key, Valor: $value, Tipo de dato: " . gettype($value) . "<br>";
        }
    }

    // Mostrar todo el contenido del array usando foreach
    echo "<br>Mostrar todo el contenido del array usando foreach:<br>";
    foreach ($clientes as $cliente) {
        foreach ($cliente as $key => $value) {
            echo "$key: $value<br>";
        }
        echo "<br>"; // Para separar cada cliente
    }




    //Ejercicio 3 

    //Con foreach 


    echo "Mostrar resultados del array con foreach<br>";
    foreach ($lenguajes3D as $primerNivel) {
    foreach ($primerNivel as $segundoNivel) {
        foreach ($segundoNivel as $lenguaje) {
            echo $lenguaje . "<br>";
        }
    }
}

    echo"<br>";
    
    echo "Mostrar resultados del array con for<br>";
    for ($i = 0; $i < sizeof($lenguajes3D); $i++) {
        for ($j = 0; $j < sizeof($lenguajes3D[$i]); $j++) {
            for ($k = 0; $k < sizeof($lenguajes3D[$i][$j]); $k++) {
                echo $lenguajes3D[$i][$j][$k] . "<br>";
            }
        }
    }
    
    ?>
    
</body>
</html>