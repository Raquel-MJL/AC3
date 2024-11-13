<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archivos 5</title>
</head>
<body>
<h1>Videojuegos a la venta:</h1>
<?php
    $nombres = [];
    $precios = [];
    $descripciones=[];
    $archivoTitulos = 'datos/titulos.txt'; 
    $archivoDescripciones = 'datos/descripcion.txt';
    $archivo1 = fopen($archivoTitulos, 'r');  
    $archivo2 =fopen($archivoDescripciones,'r');

    
    if ($archivo1 == false) { // Verificar si el archivo se pudo abrir correctamente
        echo "Archivo erróneo o no encontrado";
    } else {
        // Leer el archivo línea por línea
        while (($linea = fgets($archivo1)) !== false) {
            // Agregar cada línea al array de nombres, limpiando el salto de línea
            $nombres[] = trim($linea);

        


            $partes = explode(' - ', $linea); //Busco el caracter que separa claves y valor
            if (count($partes) == 2) {
                // $partes[0] es el código, $partes[1] es el título
                $codigo = trim($partes[0]);
                $titulo = trim($partes[1]);
                
                // Agregar el código como clave y el título como valor al array
                $nombres[$codigo] = $titulo;

                $precio = rand(10, 50); //Precio aleatorio entre 10 y 50 
                $precioFinal = number_format($precio + 0.99, 2);  // Formatear el precio con 2 decimales

            
                $precios[$codigo] = $precioFinal; //Agregar código como clave y precio como valor. 
            }

        }

        

        fclose($archivo1);
    }



    if ($archivo2 == false) {
        echo "Archivo erróneo o no encontrado";
    } else {
        // Leer el archivo línea por línea
        while (($linea = fgets($archivo2)) !== false) {

     
            }

        }

        $archivo2 = fopen($archivoDescripciones, 'r');
        if ($archivo2 == false) {
            echo "Archivo erróneo o no encontrado para descripciones.";
        } else {
            $i = 0;  
        
            while (($linea = fgets($archivo2)) !== false) {
            $descripciones[$i] = trim($linea); // Guardar la descripción en el array
            $i++;
            }
        }

        fclose($archivo2);
    



?>

    
    
</body>
</html>