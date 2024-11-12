<?php

echo '<h2>Resultados Ejercicio Archivo 3</h2>';

/* Procesar la carga de 3 imágenes */

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Definir las variables para los archivos
    $archivos = [
        'archivo1' => $_FILES['archivo1'],
        'archivo2' => $_FILES['archivo2'],
        'archivo3' => $_FILES['archivo3'],
    ];

    // Carpeta de destino
    $directorioDestino = 'archivos/';

    // Verificar si la carpeta 'archivos' existe, si no, crearla
    if (!file_exists($directorioDestino)) {
        mkdir($directorioDestino, 0777, true);
    }

    // Arreglo para almacenar las rutas de las imágenes
    $rutasImagenes = [];

    // Validar y mover los archivos
    foreach ($archivos as $archivo) {
        // Verificar si el archivo tiene un error
        if ($archivo['error'] === UPLOAD_ERR_OK) {
            $nombreOriginal = $archivo['name'];
            $ubicacionTemporal = $archivo['tmp_name'];
            $tipoArchivo = $archivo['type'];

            // Verificar si el archivo es una imagen
            $tiposImagen = ['image/jpeg', 'image/png', 'image/gif', 'image/webp']; // Tipos de imagen permitidos
            if (in_array($tipoArchivo, $tiposImagen)) {
                // Crear una ruta única para evitar sobrescribir archivos
                $rutaDestino = $directorioDestino . uniqid() . '.' . pathinfo($nombreOriginal, PATHINFO_EXTENSION);

                // Mover el archivo a la carpeta 'archivos'
                if (move_uploaded_file($ubicacionTemporal, $rutaDestino)) {
                    // Guardar la ruta de la imagen
                    $rutasImagenes[] = $rutaDestino;

                } else {
                    echo "Error al mover el archivo: $nombreOriginal.<br>";
                }
            } else {
                echo "Solo se permiten archivos de tipo imagen (JPEG, PNG, GIF, WebP).<br>";
            }
        } else {
            echo "Error al cargar el archivo.<br>";
        }
    }

    // Verificar si las tres imágenes se cargaron correctamente
    if (count($rutasImagenes) === 3) {
        // Mostrar las imágenes en una tabla
        echo "<h3>Imágenes Subidas</h3>";
        echo "<table border='1' style='width: 100%; text-align: center;'>";
        echo "<tr>";
        
        // Mostrar cada imagen en una celda de la tabla
        foreach ($rutasImagenes as $ruta) {
            echo "<td><img src='$ruta' alt='Imagen subida' width='300'></td>";
        }

        echo "</tr>";
        echo "</table>";
    } else {
        echo "No se han cargado correctamente las tres imágenes. Intenta nuevamente.<br>";
    }
} else {
    echo "Método de solicitud no válido.";
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
<h2>Resultados Ejercicio Archivo 3</h2>



    
</body>
</html>