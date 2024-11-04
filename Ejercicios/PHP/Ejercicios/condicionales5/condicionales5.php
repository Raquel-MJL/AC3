<?php
$nota1 = 9.5;
$nota2 = 5.8;
$nota3 = 7.5;
$media = ($nota1+$nota2+$nota3)/3;
$mediaRedondeada = round($media);

//Usando condicionales anidados 

if ($mediaRedondeada >= 9){
    echo "Sobresaliente";
}elseif($mediaRedondeada >=7){
    echo "Notable";
}elseif($mediaRedondeada == 6){
    echo "Bien";
}elseif($mediaRedondeada == 5){
    echo "Suficiente";
}elseif($mediaRedondeada < 5){
    echo "Suspenso";
}else {
    echo "El alumno no ha realizado los exámenes";
}

//Usando switch case 
switch (true) {
    case ($mediaRedondeada >= 9):
        echo "Sobresaliente";
        break;
    case ($mediaRedondeada >= 7):
        echo "Notable";
        break;
    case ($mediaRedondeada == 6):
        echo "Bien";
        break;
    case ($mediaRedondeada == 5):
        echo "Suficiente";
        break;
    case ($mediaRedondeada < 5):
        echo "Suspenso";
        break;
    default:
        echo "El alumno no ha realizado los exámenes";
}


?>