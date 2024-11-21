<?php
//Ejercicio 0 
require 'datos.php';

$media1 = ($num1+$num2+$num3+$num4) / 4;
echo "Media sin considerar precedencia: " . $media1. "<br>";

$media2 = (($num1 + $num2 + $num3 + $num4) / 4);
echo "Media considerando precedencia: " . $media2. "<br>";

$op1 = $num4 * $num1 + $num2;
echo "Operación sin considerar precedencia: " . $op1 . "<br>";

$op2 = (($num4*$num1)+$num2);
echo "Operación considerando precedencia: " . $op2. "<br>";

//Ejercicio 1 
$mod1 = 30 % 2;
$mod2 = 55 % 2; 
echo "Módulo de 30 entre 2: " . $mod1 . "<br>";
echo "Módulo de 55 entre 2: " . $mod2 . "<br>";

//Ejercicio 2

echo "A > 3: " . ($A > 3 ? "Verdadero" : "Falso") . "<br>"; 
echo "A > C: " . ($A > $C ? "Verdadero" : "Falso") . "<br>";
echo "A < C: " . ($A < $C ? "Verdadero" : "Falso") . "<br>";
echo "B < C: " . ($B < $C ? "Verdadero" : "Falso") . "<br>";
echo "B != C: " . ($B != $C ? "Verdadero" : "Falso") . "<br>";
echo "A == 3: " . ($A == 3 ? "Verdadero" : "Falso") . "<br>";
echo "A * B == 15: " . ($A * $B == 15 ? "Verdadero" : "Falso") . "<br>";
echo "A * B == -30: " . ($A * $B == -30 ? "Verdadero" : "Falso") . "<br>";
echo "C / B < A: " . (($C / $B) < $A ? "Verdadero" : "Falso") . "<br>";
echo "C / B == -10: " . (($C / $B) == -10 ? "Verdadero" : "Falso") . "<br>";
echo "C / B == -4: " . (($C / $B) == -4 ? "Verdadero" : "Falso") . "<br>";
echo "A + B + C == 5: " . (($A + $B + $C) == 5 ? "Verdadero" : "Falso") . "<br>";
echo "(A+B == 8) && (A-B == 2): " . (($A + $B == 8) && ($A - $B == 2) ? "Verdadero" : "Falso") . "<br>";
echo "(A+B == 8) || (A-B == 6): " . (($A + $B == 8) || ($A - $B == 6) ? "Verdadero" : "Falso") . "<br>";
echo "A > 3 && B > 3 && C < 3: " . ($A > 3 && $B > 3 && $C < 3 ? "Verdadero" : "Falso") . "<br>";
echo "A > 3 && B >= 3 && C < -3: " . ($A > 3 && $B >= 3 && $C < -3 ? "Verdadero" : "Falso") . "<br>";
echo "Comparación B y C (B <=> C): " . ($B <=> $C) . "<br>";

//Ejercicio 3

echo "Valor: " . $valor . "<br>";
echo "Nuevo valor: " . ++$valor. "<br>";
echo "Valor decremento: " . --$valor . "<br>";
echo "Valor final: " . $valor . "<br>";

//Ejercicio 4

$verificar = ($DNI == "123456789M")? 'DNI correcto' : 'DNI incorrecto';
echo $verificar;

//Ejercicio 5 

// Comparaciones combinadas
$resultado1 = $uno > $dos; // Verdadero si $uno es mayor que $dos
$resultado2 = $uno < $dos; // Verdadero si $uno es menor que $dos
$resultado3 = $uno == $dos; // Verdadero si $uno es igual a $dos
$resultado4 = $uno !== $dos; // Verdadero si $uno no es igual a $dos
$resultado5 = $uno >= $dos; // Verdadero si $uno es mayor o igual a $dos
$resultado6 = $uno <= $dos; // Verdadero si $uno es menor o igual a $dos

// Mostrar los resultados
echo "Comparaciones entre $uno y $dos:<br>";
echo "\$uno > \$dos: " . ($resultado1 ? 'Verdadero' : 'Falso') . "<br>";
echo "\$uno < \$dos: " . ($resultado2 ? 'Verdadero' : 'Falso') . "<br>";
echo "\$uno == \$dos: " . ($resultado3 ? 'Verdadero' : 'Falso') . "<br>";
echo "\$uno !== \$dos: " . ($resultado4 ? 'Verdadero' : 'Falso') . "<br>";
echo "\$uno >= \$dos: " . ($resultado5 ? 'Verdadero' : 'Falso') . "<br>";
echo "\$uno <= \$dos: " . ($resultado6 ? 'Verdadero' : 'Falso') . "<br>";

// Cambiar los valores de las variables
$uno = 30; // Nuevo valor
$dos = 15; // Nuevo valor

// Repetir las comparaciones
$resultado1 = $uno > $dos;
$resultado2 = $uno < $dos;
$resultado3 = $uno == $dos;
$resultado4 = $uno !== $dos;
$resultado5 = $uno >= $dos;
$resultado6 = $uno <= $dos;

// Mostrar los nuevos resultados
echo "<br>Comparaciones entre $uno y $dos:<br>";
echo "\$uno > \$dos: " . ($resultado1 ? 'Verdadero' : 'Falso') . "<br>";
echo "\$uno < \$dos: " . ($resultado2 ? 'Verdadero' : 'Falso') . "<br>";
echo "\$uno == \$dos: " . ($resultado3 ? 'Verdadero' : 'Falso') . "<br>";
echo "\$uno !== \$dos: " . ($resultado4 ? 'Verdadero' : 'Falso') . "<br>";
echo "\$uno >= \$dos: " . ($resultado5 ? 'Verdadero' : 'Falso') . "<br>";
echo "\$uno <= \$dos: " . ($resultado6 ? 'Verdadero' : 'Falso') . "<br>";

$tres = $cuatro ?? $uno;

//Ejercicio 6

$dato2 = &$dato1; 

// Mostramos los valores originales
echo "Valor original de dato1: $dato1 <br>"; 
echo "Valor original de dato2: $dato2 <br>"; 

$dato1 = 20; // Cambiamos el valor de dato1

//Mostramos nuevos valores 
echo "Nuevo valor de dato1: $dato1<br>"; 
echo "Nuevo valor de dato2: $dato2<br>"; 
?>




