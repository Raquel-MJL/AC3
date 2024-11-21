<?php
// Definir la variable para el resultado
$resultado = "";

// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores del formulario
    $frase = isset($_POST['frase']) ? $_POST['frase'] : '';
    $letra = isset($_POST['letra']) ? $_POST['letra'] : '';

    // Verificar si se ha escrito la frase y la letra
    if (!empty($frase) && !empty($letra)) {
        // Contar cuántas veces aparece la letra en la frase
        $resultado = substr_count(strtolower($frase), strtolower($letra));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $texto="Volverán las oscuras golondrinas";
    // 1. La frase introducida.
    echo "La frase introducida: " . $texto . "<br>";

    // 2. El número de caracteres que tiene la frase.
    echo "Número de caracteres: " . strlen($texto) . "<br>";

    // 3. ¿Cuántas palabras hay en la frase?
    $palabras = str_word_count($texto);
    echo "Número de palabras: " . $palabras . "<br>";

    // 4. El primer carácter de la cadena.
    echo "Primer carácter: " . $texto[0] . "<br>";

    // 5. El último carácter de la cadena.
    echo "Último carácter: " . $texto[strlen($texto) - 1] . "<br>";

    // 6. Los primeros 5 caracteres.
    echo "Primeros 5 caracteres: " . substr($texto, 0, 5) . "<br>";

    // 7. La frase convertida a mayúsculas.
    echo "Frase en mayúsculas: " . strtoupper($texto) . "<br>";

    // 8. La frase convertida a minúsculas.
    echo "Frase en minúsculas: " . strtolower($texto) . "<br>";

    // 9. Todas las palabras con su primera letra en mayúsculas.
    echo "Palabras con primera letra en mayúsculas: " . ucwords($texto) . "<br>";

    // 10. La frase concatenada a un punto(.).
    echo "Frase con un punto: " . $texto . "." . "<br>";

    // 11. Reemplaza la palabra 'golondrinas' por 'gaviotas' y muestra la nueva frase.
    $nueva_frase = str_replace("golondrinas", "gaviotas", $texto);
    echo "Frase con reemplazo: " . $nueva_frase . "<br>";

    // 12. ¿En qué posición comienza la palabra 'oscuras'?
    $posicion = strpos($texto, "oscuras");
    echo "La palabra 'oscuras' comienza en la posición: " . $posicion . "<br>";


    //Cargar palabras en un array y mostrarlas en un <p> con un bucle 
    $palabras = explode(" ", $texto);

    foreach ($palabras as $palabra) {
        echo "<p>" . $palabra . "</p>";
    }

    //EJERCICIO 3
    $frase = "Esto es un ejemplo de cómo encontrar una palabra en una frase.";

    $palabra = "ejemplo";

    echo "Frase: " . $frase . "<br>";
    echo "Palabra: " . $palabra . "<br>";

    // Verificar si la palabra está incluida en la frase
    $pos = strpos($frase, $palabra);

    // Si la palabra está en la frase
    if ($pos !== false) {
        echo "La palabra '$palabra' está incluida en la frase en la posición: " . $pos;
    } else {
        echo "La palabra '$palabra' no está incluida en la frase.";
    }
    ?>
    <h2>Formulario para contar cuántas veces aparece una letra en una frase</h2>

    <form method="post" action="">
    <label for="frase">Escribe una frase:</label><br>
    <input type="text" id="frase" name="frase" value="<?php echo isset($frase) ? htmlspecialchars($frase) : ''; ?>"><br><br>

    <label for="letra">Escribe una letra:</label><br>
    <input type="text" id="letra" name="letra" value="<?php echo isset($letra) ? htmlspecialchars($letra) : ''; ?>"><br><br>

    <label for="resultado">Resultado:</label><br>
    <input type="text" id="resultado" name="resultado" value="<?php echo $resultado; ?>" readonly><br><br>

    <button type="submit">Contar</button>
</form>
</body>
</html>