/*Software que está a la espera de que se produzca una acción*/
/*La hoja de JS se llama Script. No necesita ser compilado y es un fichero de texto plano que permite describir órdenes que un intérprete 
ejecutara en tiempo real*/

/*Se trabaja con Instancias: Objeto creado a partir de una clase o constructor. 
Defines clase o constructor, usas "new" para crear una instancia de esa clase. 
Cada instancia tiene sus propios valores para las propiedades definidas en la clase, y puede acceder a los métodos de la misma*/

/*Case y Acent sensitive*/
/*Espacio en blanco y saltos de línea no se tienen en cuenta.*/
/*Se incluye:
    <script type = “text/javascript”> 
    Código JavaScript 
    </script> */
/*O desde un archivo*/
/*   <script type = “text/javascript” src=”ruta acceso/archivo.js”> 
</script>    */
//Prevalece el código del archivo en caso de combinarlas

/*El navegador necesita dibujar la página primero y luego aplicar el script*/

/*Poner texto de aviso por si JS está deshabilitado o el navegador no lo soporta*/
<noscript> 
<p>La página que estás viendo requiere para su funcionamiento el uso de 
JavaScript. Si lo has deshabilitado intencionadamente, por favor vuelve a 
activarlo.</p> 
</noscript> 

/*OPERADORES

    Aritméticos
    + - //Suma y resta
    * / //Multiplicación y División 
    % //Módulo 
    ** //Exponenciación 

    //Asignación 
    = //Asignación 
    += //Asignación y suma 
    -= //Asignación y resta 
    *= //Asignación y multiplicación 
    /= //Asignación y división 
    %= //Asignación y módulo 
    **= //Asignación y exponenciación 

    //Operadores de comparación 
    == //Igualdad no estricta 
    === //Igualdad estricta 
    != //Desigualdad no estricta 
    !== //Desigualdad estricta 
    > //Mayor que
    < //Menor que
    >= //Mayor o igual que 
    <= //Menor o igual que

    //Operadores Lógicos 
    &&: //Y 
    || : O 
    ! : Negación

    //Bit a Bit 
    & : Y bit a bit
    | : O bit a bit
    ^ : O exclusivo bit a bit
    ~ : Negación bit a bit
    << : Desplazamiento a la izquierda
    >> : Desplazamiento a la derecha
    >>> : Desplazamiento a la derecha sin signo

    //De Tipo 
    typeof: Devuelve el tipo de dato de una variable
    instanceof: Verifica si un objeto es una instancia de una clase

    //Condicional
    var mayoriaEdad = (edad >=18)? “Si”: “No”;

    //De espaciado
    in : Verifica si una propiedad existe en un objeto
    delete : Elimina una propiedad de un objeto
    
    //Unarios
    ++ : Incremento
    -- : Decremento
    + : Convertir a número
    - : Negación
    9. Operadores Ternarios
    ? : : Operador condicional (ternario </: Desplazamiento>

/*VARIABLES*/
//Para declarar: Alfanuméricos y - _ $ 
//No puede empezar con un número
/*Si  se  declara  una  variable  más  de  una  vez prevalece el último valor.*/
    var nombre, apellido1, apellido2; //Locales y globales
    var nombreCompleto; 
    let suma; //Locales en bloque de código 
    let nombreVariable1, nombreVariable2, nombreVariable3; 
 
    /*Local: Declaradas dentro de bloques de código(dentro de un método  o  un  bucle)
    Siendo  solo  accesibles  para  ser  leídas  o  modificadas  desde  el bloque. */
    /* Global:  Fuera de un bloque de código y a la cual pueden acceder todos los métodos, procedimientos y funciones de una aplicación.*/

/*CONSTANTES*/
//Su valor no puede cambiar. Se asigna a la vez que se declara. Nombre en mayúsculas
const PI = 3.1416;

/*ASIGNACIÓN DE VALORES*/
mensaje = "Hola Mundo"; 
valor1 = true;
nombreCompleto = "Ana" + "López";
var apellido1 = "López", apellido2 = "García" //Asignación múltiple

var nombre; //Primero se declara
nombre = "Raquel"; //Luego se le asigna un valor

var nombre = "Raquel" //Es lo mismo 

const REFERENCIA = 8547223;

//Buenas prácticas: 
    //Declaración de todas las variables
    //Todas las asignaciones 
    //Operaciones y programación de esas variables 

/*SCOPE*/
//Define el alcance de una variable. 
    //LOCAL: Dentro de una función, método, bucle etc... Sólo accesibles donde se han declarado. 
    //GLOBAL: En cualquier lugar del programa. 
    //DE BLOQUE: Sólo existen en el bloque en el que han sido definidas. Let.   
    
/*FUNCIONES*/   
edad = prompt("Escriba aquí su edad"); //Cargan a la variable vacía lo introducido por el usuario (Alfanumérico)
document.write(variable1); //Imprimir por pantalla. "<br>"para saltos de línea
console.log ("Tú te llamas:  " + nombre); "\n" //Muestra en la consola del navegador los resultados de la ejecución de un script.
//Permite consultar error si los ha habido y depurarlos. 

    //CONVERSIÓN
    edad = prompt("Escriba su edad: ",""); 
    edad = parseInt(edad); //De string con números a número entero 

    sueldo = prompt("Escriba el Sueldo: ",""); 
    sueldo = parseFloat(sueldo);  //De String con número a decimal
    sueldo= parseFloat(prompt("Escriba su sueldo:","")); //Concatenado  
    
    var numero = 30; 
    var texto = numero.toString(); //De número (entero o decimal) a string

    /*Postincremento - Primero muestra y luego incrementa*/
        var a = 4;
	    	document.write("Postincremento " + a++ + "<br>"); //Muestra 4;
	    	document.write("Valor actual de la variable a " + a + "<br>");//Muestra 5;
	    	document.write("Nuevo valor de la variable a es " + a * 4  + "<br>");//Muestra 20;
	    	document.write("Preincremento " + ++a + "<br>" ); // Muestra 6;

    /*Postdecremento - Incrementa primero y luego muestra*/
        var a = 4;
	    	document.write("Postdecremento " + a-- + "<br>");//Muestra 4;
	    	document.write("Valor actual de la variable a " + a + "<br>");//Muestra 3;
	    	document.write("Nuevo valor de la variable a es " + a * 4+ "<br>");//Muestra 12;
	    	document.write("Predecremento " + --a);//Muestra 2;

    //Preincremento: ++variable
    //Predecremento: --variable

//CONCEPTOS BÁSICOS PROGRAMACIÓN
/*
Lenguaje de programación - Software que sirve para crear otros programas.
    Bajo nivel: Ensamblador, máquina
    Alto nivel: Más evolucionados y adaptados a un lenguaje más accesible
Traductor - Traducen  programas  escritos  en  un  lenguaje  de  programación  al  lenguaje  máquina  de  la 
    computadora y a medida que va siendo traducida, se ejecuta.
Compilador - Permite  traducir  todo  un  programa  de  una  sola vez, haciendo  una  ejecución  más  rápida y 
    puede almacenarse para usarse luego sin volver a hacer la traducción. 
Librerías (Bibliotecas)
    Archivo o conjunto de archivos que se utilizan para facilitar la programación. 
    Incluyen código que alguien ha realizado para poder reutilizarlo dentro de otros proyectos. 
    JQuery, Mootools y Prototype. 
Frameworks
    Estructura previa que se puede aprovechar para desarrollar un proyecto. 
    Esquema conceptual que simplifica la elaboración de una tarea. 
    Puede  incluir  soporte  de  programas,  bibliotecas,  y  un  lenguaje  interpretado,  entre  otras ayudas.
    AngularJS, React y Backbone.js. 
API’s - Application Programming Interfaces - Interfaz de Programación de Aplicaciones. 
    Conjunto  de  definiciones  y  protocolos  que  especifican  cómo  las  aplicaciones  de  software 
    deben comunicarse o interactuar entre sí para realizar una o varias funciones. 
    API  del DOM,  API  de  geolocalización,  API  Canvas  y WebGL,  API  de  audio  y video. */

//ESTRUCTURAS CONDICIONALES

    let a = 7; 
    let b = 5; 

    if (a>b) //Si la condición es verdadera se ejecuta, si no no hace nada.
        { 
        document.write ("a es mayor que b"); 
        }  
        
    let c = 7; 
    var d = 5; 
    if (c>d) 
        {  
        document.write ("a es mayor que b"); 
        } 
    else //Se ejecutan otras si la primera condición no es verdadera 
        { 
        document.write ("a no es mayor que b"); 
        } 
    
    let e = 5.6; //Anidadas 
    let f = 8.9; 
    if(e>f) 
        { 
        document.write ("e es mayor que f"); 
        } 
    else if(a==b) 
        { 
        document.write ("e es igual que f"); 
        } 
    else 
        { 
        document.write ("e es menor que f"); 
        }

    let g = 150; //Múltiple sin anidación 
    if(g>=100 && g <=200) 
    { 
    document.write ("g está entre 100 y 200"); 
    } 
    else 
    { 
    document.write ("g no está en el intervalo"); 
    } 
     
    if(a==150) 
    { 
    document.write ("g es igual a 150"); 
    } 
    if(a>=201 && a <=2000) 
    { 
    document.write ("g está entre 201 y 2000"); 
    }

    var color; //Switch - Varias opciones condicionales en una sola declaración 
    color = prompt("¿Cuál es tu color favorito?",""); 
    switch (color) 
    { 

    case "verde": 
    case "azul": 
    case "rojo": 
    
    document.write("El " + color + " es muy bonito"); 
    break;  //Para detener o romper la comprobación de datos y meter otros resultados 

    case "negro": 
    case "marrón": 
    
    document.write("El " + color + " no me gusta"); 
    break; 

    default: //Para que por defecto, si no encuentra coincidencias, muestre una respuesta predeterminada
    document.write("Prefiero otro color"); 
    break; 
    } 

    var n1 = 67; //Ejemplo con boolean
    var n2 = 56; 
    switch(true) 
    {  
    case (n1 > n2): 
    document.write("El primer número es mayor que el segundo"); 
    break; 
    case (n1 == n2): 
    document.write("Ambos números son iguales"); 
    break; 
    case (n1<n2): 
    document.write("El segundo número es mayor que el primero"); 
    break; 
     } //Si no hay un caso verdadero (salvo que haya un default), no se mostrará nada

//BUCLES

    //WHILE - Mientras se cumpla una condición, actúa el contenido especificado

        let z = prompt("Escribe hola:"); 
        document.write ("Has escrito " + z + "<br>"); 
        while(z != "hola") 
        { 
        let z = prompt("Escribe hola:"); 
        document.write (z); 
        } 
        document.write ("Fin del bucle" + z);

        //Ejemplo con contador
        let contador1 = 1; 

        while (contador1 <= 5) { 
        document.write(contador1); 
        contador1++; 
        }

    //DO-WHILE - Hacer hasta que. Mínimo una vez se realiza la instrucción de dentro.
        do 
        { 
            var y = prompt("Escribe:"); 
            document.write (y); 
        } 
        while(y != "hola") 
            document.write ("Fin del bucle" + y);

        //Con contador

        var x = 0; 
        do  
        { 
            document.write (x); 
            x++ ; // x=x+1 // x+=1  Formas de poner incrementos de unidad en unidad. 
                                    //x=x+5 / x+=5  incrementos de 5 en 5. 
        } while(x<=9) 
        document.write ("Fin del bucle" + x);


    //FOR Sólo con contadoras

        //Anidado
        var w; 
        var v; 
        for(w = 1; w <=10;w++) 
        { 
            for(v = 1; v <=3;v++) //Da 3 vueltas por cada vuelta del anterior
            { 
                document.write("valor de w: " + w+ "valor de v: "+ v); 
            } 
        }

    //BREAK Y CONTINUE 
        //Las usamos en los bucles
        // break;  - Rompe prematuramente la iteración de un bucle 
        // continue; - Salta ignorando una iteración. Tras el salto el bucle continua funcionando normal. 
        var u; 
        for(u = 1; u <=10;u++) 
        { 
            if (u==5) //La línea que imprime "la variable x vale:5" No se mostraría en pantalla
                { 
                continue; 
                } 
        document.write("la variable x vale: " + u); 
        } 

//FUNCIONES

    /*Conjunto de instrucciones u operaciones en un solo bloque, desde cualquier parte del programa
    y pueden o no devolver valores.*/ 

    function nombreFunción(argumento1, argumento2,argumentoN) 
    { 
    Instrucciones; 
    }

    //Llamadas - Ejecutan la función, no se puede si la función no está definida.
        //Colocándolas en el script (Se pueden definir ahí también)
        //Uso href 
            // <a href = "javascript: sumar()">Calcular suma</a>
            // <a href="javascript:void(window.open(‘https://www.renfe.com/es/es’));">Renfe</a>
        //Ejecutar al cargar la web, con el atributo onload en el body
            //<body onload = ”sumar ();”>
        //Al producirse un evento: 
            /*
            fuction pulsar() 
                { 
                alert(“¡Has pulsado el botón!”); 
                } 
            <input type =”button” name = “boton1” value = “Pulsar” onclick = “pulsar()”> */

        //   !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
        //Por defecto hay que indicar el número de parámetros que la función requiere en su declaración
        //salvo que se use el operador rest (...)
        //Acepta un número variable de argumentos como un array
        function sumar(...numeros) {
            return numeros.reduce((acumulado, actual) => acumulado + actual, 0);
        } //reduce - Junta los valores del array en 1 solo
        
        console.log(sumar(1, 2, 3)); // Salida: 6
        console.log(sumar(1, 2, 3, 4, 5)); // Salida: 15
        //   !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

    //TIPOS DE FUNCIÓN 
    //Sin parámetros ni retorno de datos 
        function restar() // Con función prompt(). 
        { 
            let n1 = prompt("Introduce un número",""); 
            let n2 = prompt("Introduce otro número",""); 
            document.write("El  resultado  de  la  resta  es:  "  +  (n1-n2)  + "<br>"); 
        } 
    
    //Sin retorno, con parámetros
        function sumar3(numero1, numero2, numero3) 
        { 
            document.write("El resultado de la suma es: " + 
            (numero1+numero2+numero3) + "<br>"); 
        }
    
    //Con retorno, sin parámetros
        function sumar() 
        { 
            var a = 7; 
            var b = 5; 
                  return a+b; //Sólo un dato, salvo que le pidamos devolver un array
        }  
            var suma1; 
            suma1 = sumar(); //Se crea una variable que sea = a la función
            document.write(suma1)

    //Con retorno y parámetros 

        function sumar3(a,b,c) 
        { 
            var d = a+b+c; 
            return d; 
            //return a+b+c;  
        }

//Valores por defecto, podemos preguntar por ellos con typeof dentro de la función

    { 
        if( typeof parametro2 == "undefined") 
        { 
            parámetro2 = valorPorDefecto; 
        } 
        instrucciones; 
    }

    /*Al llamar la función se pueden o no incluir los parámetros 
opcionales.  Si  no se incluyen, se  utilizan  los  valores  definidos  como  valores  por 
defecto.*/
 
    function calcular (n1, n2, n3, n4) 
    { 
        if( typeof n3 == "undefined") 
        { 
            n3 = 20; 
        } 
        if( typeof n4 == "undefined") 
        { 
            n4 = 120; 
        } 
        return n1 + n2 + n3 + n4; 
    } 
    var a = calcular (20,50,70,30); 
    var b1 = calcular (30,50); //Equivale a calcular (30,50,20,120);

//RETURN ALTERNATIVOS

    //Resultados excluyentes

        function comparar(n1, n2) 
        { 
            if (n1 >n2) 
            { 
                return "n1 es mayor"; 
            } 
            else if (n1 <n2) 
            { 
                return "n2 es mayor"; 
            } 
            else if (n1 == n2) 
            { 
                return n1 + n2; 
            } 
        }

    //Resultados múltiples, con un array de datos

        function crearArray() {
            return [1, 2, 3, 4, 5];
        }
        let numeros = crearArray();
        document.write(numeros); // Salida: [1, 2, 3, 4, 5]

//FUNCIONES ANÓNIMAS 
    //Variables con una función asignada 
    //Uso frecuente como parámetro de otra función o dato a pasar como parámetro. 

        
    var sumar = function (n1, n2) 
    { 
        return n1 + n2; 
    } 

    var restar = function () 
    { 
        var n1 = 4; 
        var n2 = 2; 
        var n3 = n1 - n2; 
        document.write("Resultado resta: " + n3); 
    } 



    restar(); //Llamada
    
    var resultado; 
    resultado = sumar(4,2); 
    document.write("Resultado suma: " + resultado);

//FUNCIONES FLECHA
    //Funciones abreviadas, usamos => en vez de function
    //Siempre son anónimas, hay que cargarlas en una variable
    /*Consideraciones; 
    Si el cuerpo de la función sólo tiene una línea pueden omitirse las llaves {}
    y omitirse return. 
    Si la función no tiene parámetros, se indica () = > 
    Si solo tiene un parámetro, se indica sólo el nombre de este sin paréntesis:*/

    var sumar1 =  (n1, n2) => 
    { 
    return n1 + n2; // Al tener sólo una línea de código, return se puede quitar. 
    } 
     
    var sumar2 = (n1, n2) => n1 + n2 ; 
     
    var sumar3 =  () => 
    { 
    var n1 = 4; 
    var n2 = 3; 
    return n1 + n2;  
    }

    var restar = () => 
        { 
        var n1 = 4; 
        var n2 = 2; 
        var n3 = n1 - n2; 
        document.write("Resultado resta: " + n3); 
        } 

//FUNCIONES CALLBACK

/*O retrollamada. Se incluyen como argumento en otras funciones. 
La que "acoge" a otra en sus argumentos se la llama orden-superior (high-order)
Si la callback no tiene parámetros se pasa como (). 
Uso habitual en operaciones asíncronas. 

*/

function mostrarMensaje() {
    document.write("hola mundo");
}

function iniciarMensaje() {
    setInterval(mostrarMensaje, 2000); // Llama a mostrarMensaje cada 2000 ms (2 segundos)
}

iniciarMensaje(); //Llamada a la función 

//FUNCIONES PREDEFINIDAS 

    (isNaN(valor) == false) //Averigua si es un número o no (NotaNumber)
    (isNaN(valor) == true) 


    isInfinite(valor) //Comprobar si un número es muy muy grande (exponentes inmensos)


    //Decodificar o incodificar para obtener datos estadísticos
        var miURL = decodeURI("https://www.sitio.com/enviar%20correo%20web.html");
        //Decodificar URL 
        var miURL = document.write("Direccion codificada: " + encodeURI(fotos[2].src) + 
        "<br>" ); //Codifica URL


//CLASES U OBJETOS PROTOTÍPICOS
//Nativos de JavaScript
    /* Envoltorios o Wrappers (Boolean, String, Number...). 
       Utilidades (Date, Math, RegExp, JSON, Object, Set, Map, ...)
       Vectores (Array)  
       Características del navegador. (navigator)
       Objetos DOM.(window, document, frame, location, history, screen, ...) 
            De document 
                image, applet, link, form, ... 
            De form - Formularios: 
                radio, button, textarea, ...
    */

//ARRAYS -Estructura de datos que permite almacenar un conjunto de datos
//Cada vez que creemos un objeto nuevo le pondremos el new. 
//Su primera posición siempre es 0 

    var menu = new Array();
    var menu = new Array(3); //Con 3 posiciones pero vacías
    var menu = new Array("Paella", "Pollo al ajillo", "Flan"); //Con valores
    var números = [10, 45.78,78, 90, 34.23, 89]; 

    números[2] = null; //Eliminar datos de una posición del array
    números[3] = "";

    //Acceso a datos del array:
    document.write("El primer plato de hoy es: " + menu[0]); 
    var plato1 = menu[0]; 
    document.write("El primer plato de hoy es: " + plato1); 
    var calculo = numeros[6] + numeros[20];

    //Length (Propiedad de array)
    document.write("En el menú hay" + menu.length + "opciones"); 

    //Imprimir posiciones con mensaje - bucle 
    for (let i = 0; i < cuarAr.length; i++) 
        {
            document.write("En la posición " + i + " el valor almacenado es " + cuarAr[i] + "<br>");
        }

    //Métodos
    document.write(datos5.sort()); //.sort() Muestra en orden alfabético los datos

    numeros.join("/"); //.join Muestra un  listado de  los valores separados por el caracter indicado

    numeros.reverse(); //.reverse Invierte orden del array

    var numerosa = new Array(34,67,45); //.push Añade al final del array el valor indicado
    numerosa.push(20,10,50); //Resultado  34, 67, 45, 20, 10, 50

    var numeros1 = new Array(34,67,45); // .pop Elimina último elemento de Array
    numeros1.pop(); //Resultado → 34, 67 . Muestra lo eliminado. 

    var numeros2 = new Array(34,67,45); //.unshift → Añade al principio
    numeros2.unshift(20,10,50); //Resultado → 20, 10, 50, 34, 67, 45

    var numeros3 = new Array(34,67,45); //Elimina primer elemento del Array
    numeros3.shift(); //Resultado → 67,45

    //.indexOf → Muestra la posición del elemento, preguntando por el contenido. 
    //Si es string con comillas. Si no existe muestra -1
    var numeros4 = new Array(34,67,45); 
    numeros4.indexOf(34); //Resultado → 0 (Primera posición) 
    numeros4.indexOf(45); //Resultado → 2 (Tercera posición)
    numeros4.indexOf(89); //Resultado → -1 (No existe)

    
    //.splice() → Modifica elementos de un array en una posición concreta

    /*
    → Eliminar: 
        nombre  del  array.splice(posición  primer  elemento  a eliminar  inclusive,  número de 
        elementos a eliminar); 
    → Insertar eliminando elementos (sobreescribir)
        nombre  del  array.splice(posición  de  inserción,  número  de  elementos  a  eliminar, 
        valor a insertar 1, valor a insertar 2,..valor a insertar N); 
    → Insertar  sin  eliminar  elementos: Desplaza y los añade delante lo nuevo 
        nombre del array.splice(posición delante de la cual se insertarán los nuevos 
        elementos, 0, valor a insertar 1, valor a insertar 2,..valor a insertar N);*/ 

        var  colores  =  new  Array("Rojo",  "Verde",  "Azul",  "Violeta",  "Naranja",  "Amarillo", 
        "Marrón"); 
        document.write(colores.join()+ "<br>"); //Muestra lista de valores
        document.write(colores.splice(1,2,"Rosa","Blanco","Negro")+ "<br>"); 
        //Se insertan “Rosa","Blanco","Negro  y  se  eliminan  "Verde",  "Azul" 
        // 2 elementos a partir de la posición 1 a eliminar). 
        document.write(colores.splice(1,0,"Rosa","Blanco","Negro")+ "<br>");
        //Se insertan “Rosa","Blanco","Negro" sin eliminar nada, desplazan los existentes. 
        document.write(colores.splice(2,1)+ "<br>"); 
        //  Se  elimina  un  color  a  partir  de  la posición 2, inclusive

    //slice(). → Copia Array a una variable o muestra lo especificado

    /*
    → Copiar 
    nombre del array.slice();
    → Mostrar valores entre posición inicial y otra final -1 
    nombre del array.slice(posición inicial inclusive, posición final no incluida);
    → Mostrar a partir de una posición específica 
    nombre del array.slice(posición inicial inclusive); */
    

    //concat(). → Une o concatena un array a otros. Al que utilice la función se le añade a continuación de sus datos los datos de los incluidos  
    
    let numeros1 = new Array(34,67,45); 
    let numeros2 = new Array(80,32,27); 
    let palabras = new Array("Hola", "Adiós"); 
    numeros1.concat(palabras); //Resultado: 34,67,45, “Hola”, “Adiós”. 
    palabras.concat(numeros1); //Resultado: “Hola”, “Adiós”, 34,67,45. 
    numeros1.concat(palabras,  numeros2,  "hola",89);  //Resultado:  34,67,45,  “Hola”,  “Adiós”,80, 32, 27,"hola",89. 
 
    //includes(). → Determina si un dato o elemento está en el array especificado
        //Devuelve booleano

    let palabras1 = new Array("Hola", "Adiós"); 
    palabras.includes("Hola"); //True 
    palabras.includes("Buenos días");//False

    //forEach(). → Llama a la función pasada como parámetro para cada elemento del array, como un bucle. 

    var nombres = new Array ("Ana", "Juan", "Pepe"); 

    nombres.forEach(funcionArray); 
       function funcionArray(valor, indice) //(valor,índice,array)
        { 
            document.write("En  la  posición  "  +  indice  +  "  está  el  nombre  "  + 
            valor + "<br>"); 
        }

    //Bucles en Arrays 
    //for...in → No muestra vacíos ni undefined y hace referencia al índice en si, a la posición. 
        let rios = new Array(); 
        rios[0]="Ebro"; 
        rios[2]="Guadalquivir"; 
        var i; 
        for (i in rios) 
        { 
            document.write("Rios:" + rios[i]); 
        } 

        //Equivale a: 
        var i; 
        for (i = 0; i < rios.length; i++) 
        { 
            document.write("Rios:"+ rios[i]); 
        }
    //for...of → Sí muestra undefined y hace referencia al valor del índice
        var i; 
        for (i of numeros) 
        { 
        document.write(i);  // Muestra datos contenidos en el  array. 
        document.write(numeros.indexOf(i));  // Muestra índices o posiciones del array. 
        
        } 
    
































































/*function Coche() //This. Referencia miembros o elementos de un objeto o al objeto mismo.
    // Diferencia entre parámetros o valores de parámetros y miembros 

    { 
    this.marca ; 
    this.modelo; 
    this.color; 
    this.precio; 
    this.cilindrada; 
    
    this.acelerar = function() 
    { 
    document.write("Estoy acelerando") 
    } 
    this.frenar = function() 
    { 
    document.write("Estoy frenando") 
    } 
    this.cambiarMarcha = function(marcha) 
    { 
    document.write("Cambiando de marcha") 
    //return algo; 
    } 
    
    }*/




























































    //NORMALIZAR CADENAS / MINÚSCULA / MAYÚSCULA / ACENTUADAS

let color = prompt("Introduzca color del semáforo: ","").toLowerCase(); //lower a minus, Upper a mayus

        function normalizarCadena(color) {
            return color
                .normalize('NFD') // Normaliza la forma de descomposición
                .replace(/[\u0300-\u036f]/g, '') // Elimina los acentos
        }

        color=normalizarCadena(color);

/*!!!!!!!!!!!!!!!!!!!!!!!!!!Código de país - Código idioma*/
