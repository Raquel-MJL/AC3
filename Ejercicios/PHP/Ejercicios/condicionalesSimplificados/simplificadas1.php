<?php
require 'datosSimplificados.php';

//Ejercicio 1 

if($num1==$num2):
    echo "Ambos números son iguales<br>";
endif;

//Ejercicio 2 


if($pass1 == $pass2):
    echo "Contraseña confirmada<br>";
else:
        echo "Las contraseñas no coinciden<br>";
    
endif;

//Ejercicio 3 



if($temp1<0):
    echo "¡Hace un frío que pela!<br>";
    elseif($temp1 >=0 && $temp1 <=14):
        echo "Qué biruji!<br>";
    elseif($temp1 >14 && $temp1 <= 25):
        echo "Qué tiempo más rico!<br>";
    elseif($temp1 >25):
        echo "Ojú, qué calóh<br>";
    endif;

//Ejercicio 4 



switch ($dia):
    case 1:
        echo "Lunes<br>";
        break;
    case 2:
        echo "Martes<br>";
        break;
    case 3:
        echo "Miércoles<br>";
        break;
    case 4:
        echo "Jueves<br>";
        break;
    case 5:
        echo "Viernes<br>";
        break;
    case 6:
        echo "Sábado<br>";
        break;
    case 7:
        echo "Domingo<br>";
        break;
    default:
        echo "Valor no válido<br>";
        break;
    endswitch;


 
//Ejercicio 5

if ($dia >= 1 && $dia <= 5):
    echo "Entre Semana <br>";
elseif ($dia == 6 || $dia == 7):
    echo "Fin de semana<br>";
else: 
    echo "Valor no válido";
endif;


?>