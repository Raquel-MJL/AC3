<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen Raquel Martínez Jiménez</title>


</head>
<body>

<?php

//1. Creación de Arrays y uso con bucles

$arcoiris = array(
    "tomate" => "rojo", 
    "melocotón" => "naranja", 
    "girasol" => "amarillo", 
    "césped" => "verde", 
    "cielo" => "azul", 
    "noche" => "indigo", 
    "amatista" => "violeta"
);

asort($arcoiris);

foreach ($arcoiris as $clave => $color) {
    echo "La clave '$clave' tiene el color '$color'.<br>";
}
echo "<br>";

//2. Utilización de expresiones condicionales

$equipo_local=3;
$equipo_visitante=1;

if ($equipo_local > $equipo_visitante) {
    echo "Resultado en la quiniela: 1<br>"; 
} elseif ($equipo_local < $equipo_visitante) {
    echo "Resultado en la quiniela: 2<br>"; 
} elseif ($equipo_local == $equipo_visitante) {
    echo "Resultado en la quiniela: X<br>"; 
} else {
    echo "Error<br>"; 
}
echo "<br>";


//3. Creación y uso de una función 

function ladrar($nombre) {
    if ($nombre == "chispa")
    echo "¡Guau!<br>";  
    }

ladrar("chispa");
ladrar("Nanuk");
echo "<br>";

//4. Clases y Objetos 

include 'Alumnos.php';
$alumnoYo = new Alumno("R1689", "Raquel", "Martínez Jiménez", 29);
echo "Código: " . $alumnoYo->getCodAlumno() . "<br>";
echo "Nombre: " . $alumnoYo->getNombre() . "<br>";
echo "Apellidos: " . $alumnoYo->getApellidos() . "<br>";
echo "Edad: " . $alumnoYo->getEdad() . "<br>";
echo "<br>";

$alumnoYo->setCodAlumno("I9561");

$datosCompletos = $alumnoYo->obtenerDatos();

foreach ($datosCompletos as $propiedad => $valor) {
    echo $propiedad . " : " . $valor . "<br>";
}

echo"<br>";
?>

<!--5. Formularios y PHP-->
    <h3>Formulario nota media</h3>
    <form action="procesarAlumno.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" step="any" required><br><br>

        <label for="nota1">Nota 1:</label>
        <input type="number" id="nota1" name="nota1" step="any"  required><br><br>

        <label for="nota2">Nota 2:</label>
        <input type="number" id="nota2" name="nota2" step="any"  required><br><br>

        <label for="nota3">Nota 3:</label>
        <input type="number" id="nota3" name="nota3" step="any"  required><br><br>

        <button type="submit">Enviar</button>
      
    </form>
    <br>













    
</body>
</html>