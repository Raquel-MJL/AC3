<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


// Usando la función array()
$lenguajes1 = array("Java", "PHP", "JavaScript", "C++", "Python", "Cobol", "Visual Basic");

// Asignando valores a cada índice
$lenguajes2 = array();
$lenguajes2[0] = "Java";
$lenguajes2[1] = "PHP";
$lenguajes2[2] = "JavaScript";
$lenguajes2[3] = "C++";
$lenguajes2[4] = "Python";
$lenguajes2[5] = "Cobol";
$lenguajes2[6] = "Visual Basic";

// Asignando valores sin usar índice (el índice se asigna automáticamente)
$lenguajes3[] = "Java";
$lenguajes3[] = "PHP";
$lenguajes3[] = "JavaScript";
$lenguajes3[] = "C++";
$lenguajes3[] = "Python";
$lenguajes3[] = "Cobol";
$lenguajes3[] = "Visual Basic";

// Incluyendo los valores entre corchetes (sintaxis corta)
$lenguajes4 = ["Java", "PHP", "JavaScript", "C++", "Python", "Cobol", "Visual Basic"];

//De cualquier forma usando variables en vez de datos lierales. 
require 'datos-arrays0.php';
$lenguajes4 = [
    $lenguaje1,
    $lenguaje2,
    $lenguaje3,
    $lenguaje4,
    $lenguaje5,
    $lenguaje6,
    $lenguaje7
];

echo $lenguajes4[0]."<br>"; //Mostrar el contenido sin usar bucles 
echo $lenguajes4[1]."<br>";
echo $lenguajes4[2]."<br>";
echo $lenguajes4[3]."<br>";
echo $lenguajes4[4]."<br>";
echo $lenguajes4[5]."<br>";
echo $lenguajes4[6]."<br>";


    ?>
</body>
</html>