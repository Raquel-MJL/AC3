
<?php
echo '<h2>Resultados Ejercicio Archivo 1</h2>';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Verificar si un archivo ha sido cargado
    if (isset($_FILES['archivo']) && $_FILES['archivo']['error'] === UPLOAD_ERR_OK) {
        // Obtener información del archivo
        $nombreOriginal = $_FILES['archivo']['name'];
        $tamañoArchivo = $_FILES['archivo']['size'];
        $tipoArchivo = $_FILES['archivo']['type'];
        $ubicacionTemporal = $_FILES['archivo']['tmp_name'];

        // Verificar que el archivo no sea una imagen (usamos la extensión para eso)
        $extensionesPermitidas = ['pdf', 'doc', 'docx', 'txt', 'zip', 'rar' , 'html'];  // Puedes agregar más extensiones aquí
        $extensionArchivo = pathinfo($nombreOriginal, PATHINFO_EXTENSION);

        if (in_array(strtolower($extensionArchivo), $extensionesPermitidas)) {
            // Mostrar los datos del archivo
            echo "Nombre original: " . htmlspecialchars($nombreOriginal) . "<br>";
            echo "Tamaño en bytes: " . $tamañoArchivo . "<br>";
            echo "Tipo de archivo: " . htmlspecialchars($tipoArchivo) . "<br>";

            // Definir la carpeta de destino
            $directorioDestino = 'archivos/';
            
            // Verificar si la carpeta 'archivos' existe, si no, crearla
            if (!file_exists($directorioDestino)) {
                mkdir($directorioDestino, 0777, true);
            }

            // Crear una ruta única para evitar sobrescribir archivos
            $rutaDestino = $directorioDestino . uniqid() . '.' . $extensionArchivo;

            // Mover el archivo al directorio de destino
            if (move_uploaded_file($ubicacionTemporal, $rutaDestino)) {
                echo "El archivo se ha cargado correctamente y se ha movido a la carpeta 'archivos'.<br>";

                
            } else {
                echo "Ha habido un problema y el archivo no se ha podido cargar. Vuelva a intentarlo.<br>";
            }
        } else {
            echo "Solo se permiten archivos de tipo: PDF, DOC, DOCX, TXT, ZIP, RAR o HTML.<br>";
        }
    } else {
        echo "Ha habido un problema y el archivo no se ha podido cargar. Vuelva a intentarlo.<br>";
    }
} else {
    // Mostrar el formulario si no se ha enviado el archivo
    echo '<form action="" method="POST" enctype="multipart/form-data">
            <input type="file" name="archivo" required>
            <input type="submit" value="Subir archivo">
          </form>';
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
    <h2>Resultados Ejercicio Archivo 1</h2>
</body>
</html>