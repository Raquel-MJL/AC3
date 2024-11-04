<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    /*Configurar PHP
    /*
        → XAMPP Instalar 
        → Configuramos el .exe para que se ejecute siempre como administrador 
        → En la carpeta htdocs (que simula el servidor local) creamos la carpeta Ejercicios. 
        → Configuramos Extensiones de VisualStudio 
            PHP debug
            Intelisense o Intelephense
            PHP server 
            Pretty-php 

        → Añadimos ruta de acceso de la carpeta Xampp a las variables de entorno del sistema 
            Copiamos ruta C:\xampp
            Configuración avanzada de sistema → Variables de entorno → Path → Nueva y añadimos la ruta 
  
        → En la web de VS me meto en PHP para copiar ruta de configuración
        {
        "php.validate.executablePath": "c:/php/php.exe"
        }
    
    

    Si hago click derecho en un documento PHP me debería dar opciones de servidor. 
    Escribo localhost en el navegador hace referencia a la carpeta htdocs. A partir de ahí puedo poner ruta del ejercicio en concreto.     



    //echo → Muestra por pantalla 
    //variables se declaran con $
    $miEdad = 29;
    $nombre = "Raquel";
    $saludo = "Hola, " . $nombre;

    $nombreVariable = "x";
    $$nombreVariable = 10; // Esto crea $x con valor 10

    define("PI", 3.14); //Constantes 
    

    // var_dump(variable) muestra tipo de dato 
    /*
    include (el programa se ejecuta aunque haya error) y require (se detiene si hay error) para llamar a variables de otros archivos 



    */
    ?>
</body>
</html>