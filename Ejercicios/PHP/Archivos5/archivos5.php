<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nuevoCodigo = strtoupper(substr(md5(rand()), 0, 4)); // Generar código aleatorio de 4 caracteres
    $nuevoTitulo = $_POST['titulo'];
    $nuevaDescripcion = $_POST['descripcion'];
    
    // Agregar a titulos.txt
    $archivoTitulos = 'datos/titulos.txt';
    $archivo1 = fopen($archivoTitulos, 'a');
    if ($archivo1 == false) {
        echo "Archivo erróneo o no encontrado";
    } else {
        fwrite($archivo1, $nuevoCodigo . ' - ' . $nuevoTitulo . "\n");
        fclose($archivo1);
    }

    // Agregar a descripcion.txt
    $archivoDescripciones = 'datos/descripcion.txt';
    $archivo2 = fopen($archivoDescripciones, 'a');
    if ($archivo2 == false) {
        echo "Archivo erróneo o no encontrado";
    } else {
        fwrite($archivo2, $nuevaDescripcion . "\n");
        fclose($archivo2);
    }

    // Subir la imagen
    $destino = 'imagenes/' . $nuevoCodigo . '.jpg';
    move_uploaded_file($_FILES['imagen']['tmp_name'], $destino);
    
    echo "Nuevo videojuego agregado exitosamente.";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videojuegos a la venta</title>
    <link rel="stylesheet" href="css/estilos_archivos5.css">
</head>
<body>
<h1>Videojuegos a la venta:</h1>

<?php
    $nombres = [];
    $precios = [];
    $descripciones = [];
    
    // Archivos de texto
    $archivoTitulos = 'datos/titulos.txt';
    $archivoDescripciones = 'datos/descripcion.txt';

    // Leer archivo de títulos
    $archivo1 = fopen($archivoTitulos, 'r');
    if ($archivo1 == false) {
        echo "Archivo erróneo o no encontrado";
    } else {
        while (($linea = fgets($archivo1)) !== false) {
            $partes = explode(' - ', $linea);
            if (count($partes) == 2) {
                $codigo = trim($partes[0]);
                $titulo = trim($partes[1]);
                
                // Guardar el código y título en el array
                $nombres[$codigo] = $titulo;

                // Generar precios aleatorios entre 10 y 50
                $precio = rand(10, 50);
                $precioFinal = number_format($precio + 0.99, 2);
                $precios[$codigo] = $precioFinal;
            }
        }
        fclose($archivo1);
    }

    // Leer archivo de descripciones
    $archivo2 = fopen($archivoDescripciones, 'r');
    if ($archivo2 == false) {
        echo "Archivo erróneo o no encontrado";
    } else {
        $i = 0;
        while (($linea = fgets($archivo2)) !== false) {
            $descripciones[$i] = trim($linea);
            $i++;
        }
        fclose($archivo2);
    }

    // Mostrar los videojuegos
    echo '<div class="videojuegos">';
    $contador = 0;
    foreach ($nombres as $codigo => $titulo) {
        if ($contador % 2 == 0) echo '<div class="row">';
        
        echo '<div class="videojuego">';
        echo '<img src="imagenes/' . $codigo . '.jpg" width="250" height="350">';
        echo '<h3>' . $titulo . '</h3>';
        echo '<p>Precio: €' . $precios[$codigo] . '</p>';
        echo '<p>' . $descripciones[$contador] . '</p>';
        echo '</div>';

        if ($contador % 2 == 1) echo '</div>';
        $contador++;
    }
    if ($contador % 2 != 0) echo '</div>';
    echo '</div>';
?>

</body>
</html>
