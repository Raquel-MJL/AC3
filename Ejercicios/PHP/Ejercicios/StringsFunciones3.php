<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings 3</title>
</head>
<body>
<?php

function pintar() {
    // Cargar la frase
    $frase = "Esto no es un palíndromo.";
    
    // Mostrar la frase original
    echo "Frase original: $frase<br>";

    // Convertir la frase a minúsculas
    $frase = strtolower($frase);
    echo "Frase en minúsculas: $frase<br>";

    // Cambiar las letras con tilde por sus equivalentes sin tilde
    $frase = strtr($frase, "áéíóú", "aeiou");
    echo "Frase sin tildes: $frase<br>";

    // Eliminar los espacios en blanco y caracteres no válidos
    // Solo son válidos los siguientes caracteres: abcdefghijklmnñopqrstuvwxyz
    $frase = preg_replace('/[^a-zñ]/', '', $frase);
    echo "Frase sin espacios ni caracteres no válidos: $frase<br>";

    // Dar la vuelta a la frase resultante
    $frase_invertida = strrev($frase);
    echo "Frase invertida: $frase_invertida<br>";

    // Comparar la frase resultante con su versión invertida
    if ($frase == $frase_invertida) {
        echo "La frase es un palíndromo.<br>";
    } else {
        echo "La frase no es un palíndromo.<br>";
    }
}

// Llamamos a la función
pintar();

echo "<br>Prueba con otra frase:<br>";

// Segunda prueba con la frase "Yo hago yoga hoy"
function pintar_con_otra_frase($otra_frase) {
    // Mostrar la frase original
    echo "Frase original: $otra_frase<br>";

    // Convertir la frase a minúsculas
    $otra_frase = strtolower($otra_frase);
    echo "Frase en minúsculas: $otra_frase<br>";

    // Cambiar las letras con tilde por sus equivalentes sin tilde
    $otra_frase = strtr($otra_frase, "áéíóú", "aeiou");
    echo "Frase sin tildes: $otra_frase<br>";

    // Eliminar los espacios en blanco y caracteres no válidos
    $otra_frase = preg_replace('/[^a-zñ]/', '', $otra_frase);
    echo "Frase sin espacios ni caracteres no válidos: $otra_frase<br>";

    // Dar la vuelta a la frase resultante
    $otra_frase_invertida = strrev($otra_frase);
    echo "Frase invertida: $otra_frase_invertida<br>";

    // Comparar la frase resultante con su versión invertida
    if ($otra_frase == $otra_frase_invertida) {
        echo "La frase es un palíndromo.<br>";
    } else {
        echo "La frase no es un palíndromo.<br>";
    }
}

// Probar con la segunda frase
pintar_con_otra_frase("Yo hago yoga hoy");


//Ejercicio2 

$frase1="Un amigo de todos es un amigo de nadie";

// Convertir la cadena en un array de caracteres
$caracteres = str_split(strtolower($frase1));

// Filtrar solo las vocales
$vocales = array_filter($caracteres, function($char) {
    return in_array($char, ['a', 'e', 'i', 'o', 'u']);
});

// Contar la cantidad de vocales
$cantidad_vocales = count($vocales);

// Mostrar el resultado en un <p>
echo "<p>La cantidad de vocales en la frase es: $cantidad_vocales</p>";


//Ejercicio3 

$resultado = "";

// Comprobamos si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenemos las frases de los campos de texto
    $frase3 = $_POST['frase1'];
    $frase2 = $_POST['frase2'];

    // Comparamos las frases y generamos el resultado
    if ($frase3 == $frase2) {
        $resultado = "Ambas frases son la misma.";
    } elseif (strlen($frase3) > strlen($frase2)) {
        $resultado = "La primera frase es mayor que la segunda.";
    } else {
        $resultado = "La segunda frase es mayor que la primera.";
    }
}



?>
<h1>Comparador de Frases</h1>

<form method="POST" action="">
    <label for="frase1">Frase 1:</label>
    <input type="text" id="frase1" name="frase1" required><br><br>

    <label for="frase2">Frase 2:</label>
    <input type="text" id="frase2" name="frase2" required><br><br>

    <label for="resultado">Resultado:</label>
    <input type="text" id="resultado" name="resultado" value="<?php echo $resultado; ?>" readonly><br><br>

    <button type="submit">Comparar</button>
</form>




    
</body>
</html>