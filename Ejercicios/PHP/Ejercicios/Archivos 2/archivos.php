<?php

//EJERCICIO 1 
    // Abre el archivo para sobrescribir (si no existe, lo creará)
    $archivo = fopen("texto.txt", "w");

    if ($archivo) {
        // Escribe las tres primeras líneas en el archivo
        fwrite($archivo, "Primera línea de texto<br>");
        fwrite($archivo, "Segunda línea de texto<br>");
        fwrite($archivo, "Tercera línea de texto<br>");

        // Cierra el archivo
        fclose($archivo);

        // Abre el archivo nuevamente para agregar más texto al final
        $archivo = fopen("texto.txt", "a");

        if ($archivo) {
            // Añade una nueva línea al final
            fwrite($archivo, "Cuarta línea de texto añadida<br>");

            // Cierra el archivo
            fclose($archivo);

            // Muestra el título y el párrafo en HTML
            echo "<h2>Ejercicio 1 Archivos 2</h2>";
            echo "<p>El archivo se generó con éxito.</p>";
        } else {
            echo "No se pudo abrir el archivo para añadir texto.";
        }
    } else {
        echo "No se pudo abrir el archivo para escribir.";
    }

//EJERCICIO 2

// Cargar las rutas de los archivos en las variables
$lectura = "lista.txt";
$escritura = "copia.txt";

// Comprobar si el archivo de lectura existe
if (!file_exists($lectura)) {
    echo "Error. No se pudo encontrar el archivo para su lectura.";
} else {
    // Abrir el archivo "lista.txt" en modo lectura
    $origen = fopen($lectura, "r");
    
    // Abrir el archivo "copia.txt" en modo sobreescritura (se creará si no existe)
    $destino = fopen($escritura, "w");

    if ($origen && $destino) {
        // Leer línea por línea del archivo de origen
        while (($linea = fgets($origen)) !== false) {
            // Escribir la línea leída en el archivo de destino
            fwrite($destino, $linea);
        }

        // Cerrar ambos archivos
        fclose($origen);
        fclose($destino);

        // Mostrar mensaje de éxito
        echo "<h2>Ejercicio 2 Archivos 2</h2>";
        echo "<p>El archivo se copió con éxito</p>";
    } else {
        echo "Error al abrir los archivos.";
    }
}

//EJERCICIO 3
// Cargar la ruta del archivo en la variable
$fichero = "copia.txt";

// Comprobar si el archivo existe
if (!file_exists($fichero)) {
    echo "Error. No se pudo encontrar el archivo para su lectura.";
} else {
    // Abrir el archivo en modo sólo lectura
    $archivo = fopen($fichero, "r");

    if ($archivo) {
        // Leer y mostrar el contenido del archivo
        $contenido = fread($archivo, filesize($fichero)); // Leemos todo el contenido
        fclose($archivo); // Cerrar el archivo

        // Mostrar el resultado
        echo "<h2>Ejercicio 3 Archivos 2</h2>";
        echo "<p>$contenido</p>"; // Mostrar el contenido del archivo
    } else {
        echo "Error al abrir el archivo.";
    }
}

//EJERCICIO 4 

// Cargar la ruta del archivo en la variable
$fichero = "copia.txt";

// Comprobar si el archivo existe
if (!file_exists($fichero)) {
    echo "Error. No se pudo encontrar el archivo para su lectura.";
} else {
    // Leer el contenido del archivo utilizando file_get_contents
    $contenido = file_get_contents($fichero);

    if ($contenido === false) {
        echo "Error al leer el archivo.";
    } else {
        // Mostrar el resultado
        echo "<h2>Ejercicio 3 Archivos 2</h2>";
        echo "<p>$contenido</p>"; // Mostrar el contenido del archivo
    }
}
?>


