<?php

//Ejercicio 1
$num1 = 45;
$num2 = 67;

if ($num1 > $num2){
    echo "El primer número es mayor que el segundo<br>";
}elseif($num1 == $num2){
    echo "Ambos números son iguales<br>";
}else {
    echo "El segundo número es mayor que el primero<br>";
}

//Ejercicio 2
$num3 = 456;
if (is_int($num3)) {
    if ($num3 > 0) {
        echo "El número $num3 es positivo.<br>";
    } elseif ($num3 == 0) {
        echo "El número es cero.<br>";
    } else {
        echo "El número $num3 es negativo.<br>";
    }
} else {
    echo "El valor introducido no es un número entero.<br>";
}

//Ejercicio 3
require 'azul.php';
require 'roja.php';
$pastilla = &$roja;

if ($pastilla == $roja){
    echo $roja."<br>";
}else {
    echo $azul."<br>";
}

/*PARA OBTENER EL VALOR DE LAS VARIABLES DE UN ARCHIVO DE TEXTO:  
$roja = file_get_contents('roja.txt');
$azul = file_get_contents('azul.txt');
*/

//Ejercicio 4 

$nota1 = 6.8;
$nota2 = 7.5;
$nota3 = 8.2;
$media = ($nota1+$nota2+$nota3)/3;
$mediaRedondeada = round($media,2);
if ($media >= 5){
    echo "Aprobado<br>";
    echo "Notas: " . $nota1 ."   ". $nota2 ."   ". $nota3."<br>";
    echo "Media redondeada: " . $mediaRedondeada."<br>";
}else {
    echo "Suspenso";
    echo "Notas: " . $nota1 . "   " . $nota2 . "   " .  $nota3."<br>";
    echo "Media redondeada: " . $mediaRedondeada."<br>";
}

//Ejercicio 5 
$num4 = 34;
$num5 = 34;
$num6 = 34;

if ($num4 == $num5 && $num4 == $num6){
    echo "Todos los números son iguales";
    echo "Operación: " . (($num4+$num5)*$num6);
}else {
    echo "Los números no son iguales";
}


?>