<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento NO FUNCIONAL a modo de apuntes y notas PHP</title>
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
        echo "La variable está definida.<br>"; // Comprueba si la variable está definida
    }
    
    // 4. unset()
    $variable = "valor";
    unset($variable); // Elimina la variable
    
    // 5. empty()
    $variable = "";
    if (empty($variable)) {
        echo "La variable está vacía.<br>"; // Verifica si la variable está vacía
    }
    
    // 6. gettype()
    $variable = 42;
    echo gettype($variable) . "<br>"; // Muestra "integer"
    
    // 7. settype()
    $variable = "123";
    settype($variable, "integer"); // Convierte la variable a entero
    
    // 8. sizeof() (alias de count())
    $array = array(1, 2, 3);
    echo sizeof($array) . "<br>"; // Muestra 3

    //CONVERSIÓN DE TIPOS 
    
    // 1. Conversión de string a integer
    $cadena = "123";
    $entero = (int)$cadena; // Se convierte a entero
    echo "String a Integer: $entero<br>"; // Muestra 123

    // 2. Conversión de string a float
    $cadenaDecimal = "12.34";
    $flotante = (float)$cadenaDecimal; // Se convierte a flotante
    echo "String a Float: $flotante<br>"; // Muestra 12.34

    // 3. Conversión de integer a string
    $numero = 456;
    $cadenaNumero = (string)$numero; // Se convierte a string
    echo "Integer a String: $cadenaNumero<br>"; // Muestra "456"

    // 4. Conversión de float a integer
    $decimal = 12.99;
    $enteroDesdeFloat = (int)$decimal; // Se convierte a entero (truncando el decimal)
    echo "Float a Integer: $enteroDesdeFloat<br>"; // Muestra 12

    // 5. Conversión de integer a float
    $enteroParaFloat = 10;
    $flotanteDesdeEntero = (float)$enteroParaFloat; // Se convierte a flotante
    echo "Integer a Float: $flotanteDesdeEntero<br>"; // Muestra 10.0

    // 6. Conversión de array a string
    $array = array("Hola", "mundo");
    $cadenaDesdeArray = implode(" ", $array); // Une los elementos del arreglo en una cadena
    echo "Array a String: $cadenaDesdeArray<br>"; // Muestra "Hola mundo"

    // 7. Conversión de booleano a integer
    $booleano = true;
    $enteroDesdeBooleano = (int)$booleano; // true se convierte a 1
    echo "Booleano a Integer: $enteroDesdeBooleano<br>"; // Muestra 1

    // 8. Conversión de booleano a string
    $booleanoFalse = false;
    $cadenaDesdeBooleano = (string)$booleanoFalse; // false se convierte a "0"
    echo "Booleano a String: $cadenaDesdeBooleano<br>"; // Muestra "0"

    
    
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


    //CONDICIONALES 
    
    // 1. Estructura if simple
    $edad = 18;
    if ($edad >= 18) {
        echo "Eres mayor de edad.<br>"; // Se ejecuta si la condición es verdadera
    }

    // 2. Estructura if-else
    $hora = 10;
    if ($hora < 12) {
        echo "Buenos días.<br>"; // Se ejecuta si la condición es verdadera
    } else {
        echo "Buenas tardes.<br>"; // Se ejecuta si la condición es falsa
    }

    // 3. Estructura if-else if-else
    $nota = 75;
    if ($nota >= 90) {
        echo "Excelente.<br>";
    } elseif ($nota >= 70) {
        echo "Bien.<br>"; // Se ejecuta si la nota es mayor o igual a 70 y menor a 90
    } else {
        echo "Necesitas mejorar.<br>";
    }

    // 4. Operador ternario
    $es_adulto = ($edad >= 18) ? "Sí" : "No"; // Asigna "Sí" si la condición es verdadera, "No" si es falsa
    echo "¿Es adulto? $es_adulto<br>";

    // 5. Estructura switch
    $día = "lunes";
    switch ($día) {
        case "lunes":
            echo "Inicio de semana.<br>"; // Se ejecuta si $día es "lunes"
            break;
        case "viernes":
            echo "Fin de semana a la vista.<br>"; // Se ejecuta si $día es "viernes"
            break;
        default:
            echo "Es un día normal.<br>"; // Se ejecuta si no coincide con ningún caso anterior
    }

    // 6. Estructura if con múltiples condiciones
    $temperatura = 30;
    if ($temperatura > 25 && $temperatura < 35) {
        echo "El clima es agradable.<br>"; // Se ejecuta si ambas condiciones son verdaderas
    }

    // 7. Estructura if con condición OR
    $usuario = "invitado";
    if ($usuario == "admin" || $usuario == "moderador") {
        echo "Acceso permitido.<br>"; // Se ejecuta si alguna de las condiciones es verdadera
    } else {
        echo "Acceso denegado.<br>"; // Se ejecuta si ambas condiciones son falsas
    }

    //SINTAXIS ALTERNATIVA ABREVIADA 
    /*En ellas se sustituye la primera llave ({), por 2 puntos (:), y la llave de cierre (}) 
    por  las  cláusulas  endif,  endwhile,  endfor,  endforeach  y  endswitch,  según  la 
    instrucción utilizada.*/
    
    if ($edad >= 18): 
        echo "Es mayor de edad"; 
    else: 
        echo "Es menor de edad"; 
    endif;
    
    
    
    //BUCLES 
    
    // 1. Bucle for
    // Este bucle imprimirá los números del 1 al 5
    for ($i = 1; $i <= 5; $i++) {
        echo $i . "<br>"; 
    }


    // 2. Bucle while
    // Este bucle imprimirá los números del 1 al 5
    $i = 1;
    while ($i <= 5) {
        echo $i . "<br>"; 
        $i++; 
    }


    // 3. Bucle do...while
    // Este bucle imprimirá los números del 1 al 5
    $i = 1;
    do {
        echo $i . "<br>"; 
        $i++; 
    } while ($i <= 5); // La condición se evalúa después de ejecutar el bloque


    // 4. Bucle foreach
    // Este bucle imprimirá cada elemento de un arreglo
    $frutas = array("manzana", "naranja", "plátano");

    foreach ($frutas as $fruta) {
        echo $fruta . "<br>"; // Imprime el nombre de la fruta y un salto de línea
    }


    // 5. Bucle anidado
    // Este bucle imprimirá un arreglo bidimensional
    $arreglo = array(
        array(1, 2, 3),
        array(4, 5, 6),
        array(7, 8, 9)
    );

    foreach ($arreglo as $fila) {
        foreach ($fila as $numero) {
            echo $numero . " "; // Imprime cada número en la fila
        }
        echo "<br>"; 
    }

    //ARRAYS

    //Indexado o numérico 
   
    $colores = array("Rojo", "Verde", "Azul");

    echo $colores[0]; // Imprime "Rojo"
    echo $colores[1]; // Imprime "Verde"
    echo $colores[2]; // Imprime "Azul"

    //Asociativo 
    
    $persona = array(
        "nombre" => "Juan",
        "edad" => 30,
        "ciudad" => "Madrid"
    );

    echo $persona["nombre"];  // Imprime "Juan"
    echo $persona["edad"];    // Imprime 30
    echo $persona["ciudad"];  // Imprime "Madrid"
    
    //Multidimensional 
    
    $estudiantes = array(
        array("nombre" => "Carlos", "edad" => 22, "ciudad" => "Barcelona"),
        array("nombre" => "Ana", "edad" => 25, "ciudad" => "Valencia"),
        array("nombre" => "Luis", "edad" => 20, "ciudad" => "Sevilla")
    );

    echo $estudiantes[0]["nombre"];  // Imprime "Carlos"
    echo $estudiantes[1]["edad"];    // Imprime 25
    echo $estudiantes[2]["ciudad"];  // Imprime "Sevilla"

    foreach ($estudiantes as $estudiante) { //mostrar datos con foreach 
        echo "Nombre: " . $estudiante["nombre"] . "<br>";
        echo "Edad: " . $estudiante["edad"] . "<br>";
        echo "Ciudad: " . $estudiante["ciudad"] . "<br><br>";
    }

    //MÉTODOS DE ARRAYS 

    //Copiar array 
    $nombreArrayNuevo = $NombreArrayACopiar ;
    

    // count() - Cuenta el número de elementos en un array
    $frutas = ["manzana", "naranja", "plátano"];
    $numeroFrutas = count($frutas);  // Devuelve 3
    echo "count: $numeroFrutas<br>";   // Imprime "count: 3"

    // sizeof() - Alias de count(), cuenta el número de elementos en un array
    $numeros = [1, 2, 3, 4];
    $numeroNumeros = sizeof($numeros);  // Devuelve 4
    echo "sizeof: $numeroNumeros<br>";   // Imprime "sizeof: 4"

    // implode() - Convierte un array en una cadena, uniendo los elementos con un delimitador
    $frutas = ["manzana", "naranja", "plátano"];
    $frutasCadena = implode(", ", $frutas);  // "manzana, naranja, plátano"
    echo "implode: $frutasCadena<br>";   // Imprime "implode: manzana, naranja, plátano"

    // in_array() - Verifica si un valor existe en un array
    $existe = in_array("plátano", $frutas);  // Devuelve true
    echo "in_array: " . ($existe ? "Sí" : "No") . "<br>";  // Imprime "in_array: Sí"

    // list() - Asigna valores de un array a variables individuales
    $colores = ["rojo", "verde", "azul"];
    list($color1, $color2, $color3) = $colores;  // Asigna a $color1 "rojo", $color2 "verde", $color3 "azul"
    echo "list: $color1, $color2, $color3<br>";  // Imprime "list: rojo, verde, azul"

    // array_search() - Busca un valor en un array y devuelve la clave correspondiente
    $clave = array_search("naranja", $frutas);  // Devuelve 1, la posición de "naranja"
    echo "array_search: La clave de 'naranja' es $clave<br>";  // Imprime "array_search: La clave de 'naranja' es 1"

    // array_keys() - Devuelve todas las claves de un array
    $miArray = ["a" => 1, "b" => 2, "c" => 3];
    $claves = array_keys($miArray);  // Devuelve ["a", "b", "c"]
    echo "array_keys: ";
    print_r($claves);  // Imprime "array_keys: Array ( [0] => a [1] => b [2] => c )"

    // array_values() - Devuelve todos los valores de un array
    $valores = array_values($miArray);  // Devuelve [1, 2, 3]
    echo "array_values: ";
    print_r($valores);  // Imprime "array_values: Array ( [0] => 1 [1] => 2 [2] => 3 )"

    // sort() - Ordena un array en orden ascendente (por valor)
    $numeros = [3, 1, 4, 2];
    echo sort($numeros);  // Ordena el array a [1, 2, 3, 4]

        // rsort() - Ordena un array en orden descendente (por valor)
        echo rsort($numeros);  // Ordena el array a [4, 3, 2, 1]

        //  asort() - Ordena un array en orden ascendente, manteniendo la relación entre claves y valores
        $colores = ["rojo" => 3, "verde" => 1, "azul" => 2];
        echo asort($colores);  // Ordena los valores en orden ascendente, las claves se mantienen

        //  arsort() - Ordena un array en orden descendente, manteniendo la relación entre claves y valores
        echo arsort($colores);

        //  ksort() - Ordena un array en orden ascendente según sus claves
        $frutas = ["manzana" => 2, "naranja" => 3, "plátano" => 1];
        echo ksort($frutas);  // Ordena el array por las claves en orden ascendente

        //  krsort() - Ordena un array en orden descendente según sus claves
        echo krsort($frutas);  // Ordena el array por las claves en orden descendente

    // max() - Devuelve el valor máximo de un array
    $numeros = [10, 20, 30, 40];
    $maximo = max($numeros);  // Devuelve 40
    echo "max: $maximo<br>";  // Imprime "max: 40"

    // min() - Devuelve el valor mínimo de un array
    $minimo = min($numeros);  // Devuelve 10
    echo "min: $minimo<br>";  // Imprime "min: 10"

    // array_reverse() - Devuelve un array con los elementos en orden inverso
    $frutas = ["manzana", "naranja", "plátano"];
    $invertido = array_reverse($frutas);  // Devuelve ["plátano", "naranja", "manzana"]
    echo $invertido;// Imprime "array_reverse: Array ( [0] => plátano [1] => naranja [2] => manzana )"

    // array_push() - Agrega uno o más elementos al final de un array
    array_push($frutas, "kiwi", "sandía");  // $frutas es ["manzana", "naranja", "plátano", "kiwi", "sandía"]
    echo "array_push: ";
    print_r($frutas);  // Imprime "array_push: Array ( [0] => manzana [1] => naranja [2] => plátano [3] => kiwi [4] => sandía )"

    // array_pop() - Elimina el último elemento de un array
    $ultimo = array_pop($frutas);  // Elimina "sandía", $frutas es ahora ["manzana", "naranja", "plátano", "kiwi"]
    echo "array_pop: ";
    print_r($frutas);  // Imprime "array_pop: Array ( [0] => manzana [1] => naranja [2] => plátano [3] => kiwi )"
    echo "Elemento eliminado: $ultimo<br>";  // Imprime "Elemento eliminado: sandía"

    // array_unshift() - Agrega uno o más elementos al principio de un array
    array_unshift($frutas, "fresa", "melón");  // $frutas es ["fresa", "melón", "manzana", "naranja", "plátano", "kiwi"]
    echo "array_unshift: ";
    print_r($frutas);  // Imprime "array_unshift: Array ( [0] => fresa [1] => melón [2] => manzana [3] => naranja [4] => plátano [5] => kiwi )"

    // array_shift() - Elimina el primer elemento de un array
    $primero = array_shift($frutas);  // Elimina "fresa", $frutas es ahora ["melón", "manzana", "naranja", "plátano", "kiwi"]
    echo "array_shift: ";
    print_r($frutas);  // Imprime "array_shift: Array ( [0] => melón [1] => manzana [2] => naranja [3] => plátano [4] => kiwi )"
    echo "Elemento eliminado: $primero<br>";  // Imprime "Elemento eliminado: fresa"

    // array_slice() - Extrae una porción de un array sin modificar el original
    $porcion = array_slice($frutas, 1, 3);  // Devuelve ["manzana", "naranja", "plátano"]
    echo "array_slice: ";
    print_r($porcion);  // Imprime "array_slice: Array ( [0] => manzana [1] => naranja [2] => plátano )"

    // array_splice() - Elimina una porción de un array y la reemplaza por nuevos elementos
    array_splice($frutas, 2, 2, ["fresa", "sandía"]);  // $frutas es ahora ["melón", "manzana", "fresa", "sandía", "kiwi"]
    echo "array_splice: ";
    print_r($frutas);  // Imprime "array_splice: Array ( [0] => melón [1] => manzana [2] => fresa [3] => sandía [4] => kiwi )"

    // array_sum() - Devuelve la suma de los valores de un array
    $numeros = [1, 2, 3, 4];
    $suma = array_sum($numeros);  // Devuelve 10
    echo "array_sum: $suma<br>";  // Imprime "array_sum: 10"

    //array_product() - Devuelve el producto de los valores de un array
    $producto = array_product($numeros);  // Devuelve 24 (1 * 2 * 3 * 4)
    echo "array_product: $producto<br>";  // Imprime "array_product: 24"
    
    //FUNCIONES MATEMÁTICAS 
    
    // 1. abs() - Devuelve el valor absoluto de un número
    $num = -10;
    echo "El valor absoluto de $num es: " . abs($num) . "\n"; // 10

    // 2. ceil() - Redondea un número hacia arriba al entero más cercano
    $num = 3.14;
    echo "Redondeo hacia arriba de $num es: " . ceil($num) . "\n"; // 4

    // 3. floor() - Redondea un número hacia abajo al entero más cercano
    $num = 3.14;
    echo "Redondeo hacia abajo de $num es: " . floor($num) . "\n"; // 3

    // 4. round() - Redondea un número al entero más cercano
    $num = 3.56;
    echo "Redondeo de $num es: " . round($num) . "\n"; // 4

    // 5. max() - Devuelve el valor más alto de una lista de números
    echo "El valor máximo entre 1, 5 y 3 es: " . max(1, 5, 3) . "\n"; // 5

    // 6. min() - Devuelve el valor más bajo de una lista de números
    echo "El valor mínimo entre 1, 5 y 3 es: " . min(1, 5, 3) . "\n"; // 1

    // 7. pow() - Calcula la potencia de un número
    $base = 2;
    $exponente = 3;
    echo "$base elevado a la potencia de $exponente es: " . pow($base, $exponente) . "\n"; // 8

    // 8. sqrt() - Calcula la raíz cuadrada de un número
    $num = 16;
    echo "La raíz cuadrada de $num es: " . sqrt($num) . "\n"; // 4

    // 9. rand() - Genera un número aleatorio entre un rango
    echo "Número aleatorio entre 1 y 100: " . rand(1, 100) . "\n";

    // 10. sin() - Devuelve el seno de un ángulo (en radianes)
    $angulo = pi() / 2; // 90 grados en radianes
    echo "El seno de 90 grados es: " . sin($angulo) . "\n"; // 1

    // 11. cos() - Devuelve el coseno de un ángulo (en radianes)
    $angulo = pi() / 3; // 60 grados en radianes
    echo "El coseno de 60 grados es: " . cos($angulo) . "\n"; // 0.5

    // 12. tan() - Devuelve la tangente de un ángulo (en radianes)
    $angulo = pi() / 4; // 45 grados en radianes
    echo "La tangente de 45 grados es: " . tan($angulo) . "\n"; // 1

    // 13. deg2rad() - Convierte grados a radianes
    $grados = 180;
    echo "$grados grados en radianes es: " . deg2rad($grados) . "\n"; // 3.1415926535898

    // 14. rad2deg() - Convierte radianes a grados
    $radianes = pi();
    echo "$radianes radianes en grados es: " . rad2deg($radianes) . "\n"; // 180

    // 15. exp() - Calcula el valor de e elevado a la potencia de un número
    $num = 2;
    echo "e elevado a la potencia de $num es: " . exp($num) . "\n"; // 7.3890560989

    // 16. log() - Calcula el logaritmo natural (base e) de un número
    $num = 10;
    echo "El logaritmo natural de $num es: " . log($num) . "\n"; // 2.30258509299

    // 17. log10() - Calcula el logaritmo en base 10 de un número
    $num = 100;
    echo "El logaritmo en base 10 de $num es: " . log10($num) . "\n"; // 2

    // 18. mod() - Devuelve el residuo de la división de dos números
    $num1 = 10;
    $num2 = 3;
    echo "El residuo de $num1 dividido por $num2 es: " . fmod($num1, $num2) . "\n"; // 1

    //FUNCIONES 

    // Sin retorno ni parámetros (tipo: Procedimiento)
    function sinRetornoNiParametros() {
        echo "Esta función no tiene retorno ni parámetros.\n";
    }
    sinRetornoNiParametros(); // Llamada a la función sin parámetros

    // Sin retorno con parámetros (tipo: Procedimiento con parámetros)
    function sinRetornoConParametros($nombre) {
        echo "Hola, $nombre! Esta función no retorna nada.\n";
    }
    sinRetornoConParametros("Juan"); // Llamada a la función con un parámetro

    // Con retorno sin parámetros (tipo: Función con retorno)
    function conRetornoSinParametros() {
        return "Esta función retorna un valor sin parámetros.\n";
    }
    $resultado = conRetornoSinParametros(); // Llamada a la función sin parámetros
    echo $resultado; // Mostrar el valor retornado

    // Con retorno y con parámetros (tipo: Función con retorno y parámetros)
    function conRetornoConParametros($a, $b) {
        return $a + $b; // Retorna la suma de los parámetros
    }
    $suma = conRetornoConParametros(5, 3); // Llamada a la función con parámetros
    echo "La suma de 5 y 3 es: $suma\n"; // Mostrar el valor retornado

    //Con múltiples datos de retorno 
        
        // Con array como retorno 
        function retornarArray() {
            $personas = [
                "Juan" => 25,
                "Ana" => 30,
                "Pedro" => 22,
            ];
            return $personas; // Retorna un array con nombres y edades
        }

        $datosPersonas = retornarArray(); // Llamada a la función
        echo "Datos de las personas:\n";
        print_r($datosPersonas); // Muestra el array retornado


        // Con returns alternativos (diferentes retornos según condiciones)
        function retornarValorAlternativo($numero) {
            if ($numero > 0) {
                return "El número $numero es positivo";
            } elseif ($numero < 0) {
                return "El número $numero es negativo";
            } else {
                return "El número es cero";
            }
        }
    
    //Función anónima 
    $cuadrado = function($numero) {
        return $numero * $numero;
    };

    //Función flecha 
    $doble = fn($numero) => $numero * 2; //fn es abreviatura de función. Y si sólo devuelve 1 dato no es necesario el return. 
    echo "El doble de 5 es: " . $doble(5) . "<br>"; // Resultado: 10
    
    
    
    
    
    
    
    
    
    
    
    
    
    ?>
</body>
</html>