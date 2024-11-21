<?php

echo '<h2>Resultados Ejercicio Archivo 2</h2>';
/* Procesar y cargar una imagen */

if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Verificar si se ha subido un archivo sin errores
    
    if (isset($_FILES['archivo']) && $_FILES['archivo']['error'] === UPLOAD_ERR_OK) {
        // Obtener detalles del archivo
        $nombreOriginal = $_FILES['archivo']['name'];
        $tamañoArchivo = $_FILES['archivo']['size'];
        $tipoArchivo = $_FILES['archivo']['type'];
        $ubicacionTemporal = $_FILES['archivo']['tmp_name'];

        // Verificar si el archivo es una imagen
        $tiposImagen = ['image/jpeg', 'image/png', 'image/gif', 'image/webp']; // Tipos de imagen permitidos
        if (in_array($tipoArchivo, $tiposImagen)) {
            $directorioDestino = 'archivos/';            // Definir el directorio de destino


            $rutaDestino = $directorioDestino . uniqid() . '.' . pathinfo($nombreOriginal, PATHINFO_EXTENSION);


            // Mover el archivo cargado a la carpeta 'archivos'
            if (move_uploaded_file($ubicacionTemporal, $rutaDestino)) {
                echo "Imagen cargada con éxito.<br>";

                // Mostrar la imagen
                echo "<img src='" . htmlspecialchars($rutaDestino) . "' alt='Imagen cargada'><br>";
                echo "<p>Imagen cargada correctamente.</p>";
            } else {
                echo "Ha habido un problema al cargar la imagen. Vuelva a intentarlo.";
            }
        } else {
            echo "Solo se permiten archivos de tipo imagen (JPEG, PNG, GIF, WebP).<br>";
        }
    } else {
        echo "Ha habido un error en la carga del archivo. Vuelva a intentarlo.";
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


    
</body>
</html>