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
  
        → En la web de VS vamos a PHP para copiar ruta de configuración
        {
        "php.validate.executablePath": "c:/php/php.exe"
        }

        /*
        Si hago click derecho en un documento PHP me debería dar opciones de servidor. 
        Escribo localhost en el navegador hace referencia a la carpeta htdocs. A partir de ahí puedo poner ruta del ejercicio en concreto.     
        */
    
    /*ETIQUETAS Y MARCAS

    <?php   ?>   → Dentro va el código 
    //Comentarios 
    Se cierran instrucciones con ;
    Para llamar a otros archivos: */
    
    // archivo1.php
    $mensaje = "Hola desde archivo1.php";
    // archivo2.php
    require 'archivo1.php';
    echo $mensaje; // Muestra "Hola desde archivo1.php"


    
    
    //TIPOS DE DATOS
   
    // 1. Entero (Integer)
    $entero = 42; // Un número entero

    // 2. Flotante (Float o Double)
    $flotante = 3.14; // Un número decimal

    // 3. Cadena (String)
    $cadena = "Hola, mundo!"; // Cadena de texto

    // 4. Booleano (Boolean)
    $booleanoVerdadero = true; // Valor verdadero
    $booleanoFalso = false; // Valor falso

    // 5. Arreglo (Array)
    $arreglo = array(1, 2, 3, 4); // Arreglo de números
    $arregloCorto = [1, 2, 3, 4]; // Sintaxis corta de arreglo

    // 6. Objeto (Object)
    class Persona {
        public $nombre;

        function __construct($nombre) {
            $this->nombre = $nombre;
        }
    }

    $persona = new Persona("Juan"); // Objeto de la clase Persona

    // 7. NULL
    $variableNula = null; // Variable sin valor

    // 8. Recurso (Resource)
    // Conexión a una base de datos (este es solo un ejemplo)
    $conn = mysqli_connect("localhost", "usuario", "contraseña", "base_de_datos"); // Recurso de conexión



    //VARIABLES    

    $miEdad = 29;
    $nombre = "Raquel";
    $saludo = "Hola, " . $nombre;

    $nombreVariable = "x";
    $$nombreVariable = 10; // Esto crea $x con valor 10

    define("PI", 3.14); //Constantes 
    

    
    //FUNCIONES DE VARIABLES
    //1. var_dump()
    $variable = "Hola, mundo!";
    var_dump($variable); // Muestra información sobre la variable
    
    // 2. print_r()
    $array = array("manzana", "naranja", "plátano");
    print_r($array); // Imprime la estructura del arreglo
    
    // 3. isset()
    $variable = "texto";
    if (isset($variable)) {
        echo "La variable está definida.\n"; // Comprueba si la variable está definida
    }
    
    // 4. unset()
    $variable = "valor";
    unset($variable); // Elimina la variable
    
    // 5. empty()
    $variable = "";
    if (empty($variable)) {
        echo "La variable está vacía.\n"; // Verifica si la variable está vacía
    }
    
    // 6. gettype()
    $variable = 42;
    echo gettype($variable) . "\n"; // Muestra "integer"
    
    // 7. settype()
    $variable = "123";
    settype($variable, "integer"); // Convierte la variable a entero
    
    // 8. sizeof() (alias de count())
    $array = array(1, 2, 3);
    echo sizeof($array) . "\n"; // Muestra 3

    //CONVERSIÓN DE TIPOS 
    
    // 1. Conversión de string a integer
    $cadena = "123";
    $entero = (int)$cadena; // Se convierte a entero
    echo "String a Integer: $entero\n"; // Muestra 123

    // 2. Conversión de string a float
    $cadenaDecimal = "12.34";
    $flotante = (float)$cadenaDecimal; // Se convierte a flotante
    echo "String a Float: $flotante\n"; // Muestra 12.34

    // 3. Conversión de integer a string
    $numero = 456;
    $cadenaNumero = (string)$numero; // Se convierte a string
    echo "Integer a String: $cadenaNumero\n"; // Muestra "456"

    // 4. Conversión de float a integer
    $decimal = 12.99;
    $enteroDesdeFloat = (int)$decimal; // Se convierte a entero (truncando el decimal)
    echo "Float a Integer: $enteroDesdeFloat\n"; // Muestra 12

    // 5. Conversión de integer a float
    $enteroParaFloat = 10;
    $flotanteDesdeEntero = (float)$enteroParaFloat; // Se convierte a flotante
    echo "Integer a Float: $flotanteDesdeEntero\n"; // Muestra 10.0

    // 6. Conversión de array a string
    $array = array("Hola", "mundo");
    $cadenaDesdeArray = implode(" ", $array); // Une los elementos del arreglo en una cadena
    echo "Array a String: $cadenaDesdeArray\n"; // Muestra "Hola mundo"

    // 7. Conversión de booleano a integer
    $booleano = true;
    $enteroDesdeBooleano = (int)$booleano; // true se convierte a 1
    echo "Booleano a Integer: $enteroDesdeBooleano\n"; // Muestra 1

    // 8. Conversión de booleano a string
    $booleanoFalse = false;
    $cadenaDesdeBooleano = (string)$booleanoFalse; // false se convierte a "0"
    echo "Booleano a String: $cadenaDesdeBooleano\n"; // Muestra "0"

    
    
    //SALIDA DE DATOS 
    
    // 1. echo
    $nombre = "Juan";
    echo "Hola, $nombre"; // Muestra "Hola, Juan"

    // 2. print
    $mensaje = "Bienvenido a PHP";
    print $mensaje; // Muestra "Bienvenido a PHP"

    // 3. printf
    $precio = 19.99;
    printf("El precio es: %.2f", $precio); // Muestra "El precio es: 19.99"

    // 4. sprintf
    $nombre = "Ana";
    $saludo = sprintf("Hola, %s!", $nombre); // Formatea la cadena pero no la muestra
    echo $saludo; // Muestra "Hola, Ana!"

    // 5. var_dump
    $variable = array(1, 2, 3);
    var_dump($variable); // Muestra el tipo y el valor de la variable

    // 6. print_r
    $datos = array("nombre" => "Pedro", "edad" => 30);
    print_r($datos); // Imprime de forma legible el contenido del arreglo

    // 7. error_log
    error_log("Este es un mensaje de error"); // Envía un mensaje de error a un archivo de log (no se muestra en pantalla)

    // 8. json_encode
    $array = array("nombre" => "Carlos", "edad" => 25);
    $json = json_encode($array); // Convierte el arreglo a formato JSON
    echo $json; // Muestra {"nombre":"Carlos","edad":25}

    //OPERADORES 
    // 1. Operadores Aritméticos
        $a = 10;
        $b = 3;

        // Suma
        $suma = $a + $b; // 13

        // Resta
        $resta = $a - $b; // 7

        // Multiplicación
        $producto = $a * $b; // 30

        // División
        $division = $a / $b; // 3.333...

        // Módulo (resto de la división)
        $modulo = $a % $b; // 1

    // 2. Operadores de Asignación
        $x = 5;

        // Asignación simple
        $y = $x; // $y ahora es 5

        // Asignación con suma
        $y += 3; // $y ahora es 8 (equivalente a $y = $y + 3)

    // 3. Operadores de Comparación
        $valor1 = 5;
        $valor2 = 10;

        // Igualdad
        $igual = ($valor1 == $valor2); // false

        // Identidad (igualdad y mismo tipo)
        $identico = ($valor1 === $valor2); // false

        // Desigualdad
        $desigual = ($valor1 != $valor2); // true

        // Desigualdad de tipo
        $desigual_tipo = ($valor1 !== $valor2); // true

        // Mayor que
        $mayor = ($valor1 > $valor2); // false

        // Menor que
        $menor = ($valor1 < $valor2); // true

    // 4. Operadores Lógicos
        $cond1 = true;
        $cond2 = false;

        // Y lógico
        $y_logico = $cond1 && $cond2; // false

        // O lógico
        $o_logico = $cond1 || $cond2; // true

        // Negación
        $negacion = !$cond1; // false

    // 5. Operadores de Incremento y Decremento
        $contador = 1;

        // Incremento (prefijo)
        ++$contador; // $contador ahora es 2

        // Decremento (prefijo)
        --$contador; // $contador ahora es 1

        // Incremento (postfijo)
        $contador++; // $contador ahora es 2, pero se usa el valor anterior en expresiones

        // Decremento (postfijo)
        $contador--; // $contador ahora es 1, pero se usa el valor anterior en expresiones

    // 6. Operador Ternario
        $edad = 18;

        // Operador ternario para asignar valor
        $resultado = ($edad >= 18) ? 'Mayor de edad' : 'Menor de edad'; // 'Mayor de edad'

    // 7. Operador de Navegación Null (PHP 7+)
        $usuario = null;

        // Asigna valor si $usuario es null
        $nombre = $usuario ?? 'Invitado'; // 'Invitado'

    ?>
</body>
</html>