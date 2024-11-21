<?php
require 'datos-arrays4.php';
echo 'Números del array: '.implode(', ', $numeros).'<br>'; 
echo 'Números multiplicados: '.$numeros[0]*$numeros[1]*$numeros[2].'<br>';

if ($numeros[0]>$numeros[1] && $numeros[0]>$numeros[2]){
    echo 'El número mayor es: '.$numeros[0];
}else if ($numeros[1]>$numeros[0] && $numeros[1]>$numeros[2]){
    echo 'El número mayor es: '.$numeros[1];
}else if ($numeros[2]>$numeros[1] && $numeros[2]>$numeros[0]){
    echo 'El número mayor es: '.$numeros[2];
}else if ($numeros[2]==$numeros[1] && $numeros[2]>$numeros[0]){
    echo 'Hay dos números mayores del mismo valor: '. $numeros[2].' y '.$numeros[1];
}else if ($numeros[1]==$numeros[0] && $numeros[1]>$numeros[2]){
    echo 'Hay dos números mayores del mismo valor: '. $numeros[1].' y '.$numeros[0];
}else if ($numeros[2]==$numeros[0] && $numeros[2]>$numeros[1]){
    echo 'Hay dos números mayores del mismo valor: '. $numeros[2].' y '.$numeros[0];
}else if ($numeros[0]==$numeros[1] && $numeros[0]==$numeros[2]){
    echo 'Todos los números son iguales<br>';
}

//Ejercicio 3
$resultados=[];
for ($i = 0; $i < sizeof($numeros1); $i++) {
  
    $resultados[$i] = $numeros1[$i]*$numeros2[$i];
    echo 'Multiplicación de la posición ' . $i . ' : '. $resultados[$i] . '<br>';
}
echo 'Contenido de $numeros1: <br>';
foreach ($numeros1 as $valor) {
    echo $valor . '<br>';
}

echo '<br>';

echo 'Contenido de $numeros2: <br>';
foreach ($numeros2 as $valor) {
    echo $valor . '<br>';
}

echo '<br>';

echo 'Contenido de $resultados: <br>';
foreach ($resultados as $valor) {
    echo $valor . '<br>';
}

?>