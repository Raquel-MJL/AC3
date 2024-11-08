<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clases 5</title>
</head>
<body>
    <h1>Ejercicio Clases 5</h1>

    <?php
    require 'clases/libros.php';


    $libro1=new Libros(2563,"El temor de un hombre sabio","P.Rottfuss","Fantasía","Alfaguara",40);
    $libro2=new Libros(6965,"Las sombras de Isilya","R.Martins","novela","Salamandra",70);

    $libro1->mostrarDatos();
    echo "<br>";
    $libro2->mostrarDatos();
    echo "<br>";
    $libro2->incrementar5();
    echo "Datos del libro con el incremento : ". $libro2->mostrarDatos();


    ?>
    
</body>
</html>