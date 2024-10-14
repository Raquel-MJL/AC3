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
    
    //CREACIÓN Y DEFINICIÓN

    //Con función constructora:

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

    //Creación directa de una instancia – Objeto literal
    //Puede ser genérica o específica
    //No es un constructor, ya que no se pueden crear instancias a partir de esta estructura. 
    //Es una especie de constructor de un solo uso. 
        //Genérica
        /*

        var nombre de la instancia u objeto =  
        { 
        Propiedad 1; 
        Propiedad 2; 
        Propiedad N; 

        método 1 = function (Pueden incluir o no parámetros) 
        { 
        instrucciones; 
        }, 
        método 2 = function (Pueden incluir o no parámetros) 
        { 
        instrucciones; 
        }, 

        método N = function (Pueden incluir o no parámetros) 
        { 
        instrucciones; 
        } 

        }; 
        
        //Específica. 
        var nombre de la instancia u objeto =  
        { 
          Propiedad 1: valor, 
        Propiedad 2: valor, 
        Propiedad N: valor, 

        método 1: function (Pueden incluir o no parámetros) 
        { 
        instrucciones; 
        }, 
        método 2: function (Pueden incluir o no parámetros) 
        { 
        instrucciones; 
        }, 

        método N: function (Pueden incluir o no parámetros) 
        { 
        instrucciones; 
        } 

        }; 
        
        //Vacío. 
        o Después hay que asignar valores a propiedades y crear los 
        métodos usando el operador punto. 
         
        var nombre de la instancia u objeto = {}; //Creación del objeto
        nombre objeto.propiedad = valor;  //Asignación
        nombre objeto.metodo = function()  //Creación método
        { 
        instrucciones; 
        } 

        //Ejemplo: 
        var persona2 = {}; 
    
        persona2.nombre = "Juan"; 
        persona2.apellidos = "Fernández García"; 
        persona2.direccion = "C/ Toledo 12"; 
        persona2.telefono = "123456789"; 
        persona2.aficiones = "Bonsais"; 
        persona2.mostrarDatos = function() 
        { 
         document.write(persona2.nombre + " " + persona2.aficiones+ "<br>"); 
         document.write(persona2["apellidos"] + " " + persona2["telefono"]); 
        } 

        persona2.mostrarCodigo = function(n) 
        {  
         document.write("El código de " + persona2.nombre + " es el " + n + "<br>"); 
        }




















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
    

//EXPRESIONES REGULARES -

/*Conjunto de caracteres para crear un patrón de cara a Strings.
Formas de crear una expresión regular. 
• Definir un patrón literal que se puede o no almacenar en una variable. 
o var nombre = /patrón/; 
• Utilizar la clase u objeto prototípico RegExp. 
o var nombre = new RegExp(“patrón”);

//Distinguen mayúscula y minúscula

//Simples:

        Los caracteres que se escriben se buscan directamente

/*Complejos:
        //→ Cuantificadores (cuántas repeticiones hay)
            //Asterisco : El carácter que les precede
            // → /mira*/   //Coincidencias: mir, mira, miraa, miraaaa
            //Más: El carácter que les precede una o más veces
            // → /mira+/ //Coincidencias: mira, miraa, miraaaaaa. 
            //Interrogación: El que les precede puede aparecer cero o una sola vez
            // → /mira?/ //Coincidencias: mir,mira
            //Número entero positivo: El que le precede debe repetir el número de veces especificado
            // → /mira{2}/ //Coincidencias: miraa, miraaaaa
            //Número entero positivo 1, número entero positivo 2: se debe repetir el múmero de veces entre los dos números ambos inclusive
            // → /mira{2,4}/ //Coincidencias: miraa, miraaa, miraaaa. 
            //Combinación de caracteres: En un único patrón se pueden incluir más de un carácter de repetición. 
            // → /mi+ra*/ // La i puede repetirse 1 o más veces.La "a" puede repetirse ninguna, 1 o más → mir, miir, mira, miraaaa
        
        //→ Caracteres especiales:Se deben incluir con un carácter de escape (\) antes del carácter a escapar
            /* 
            \n → Salto de línea
            \t → Tabulador
            \v → Tabulador vertical
            \u → Coincidencia unicode definido por códigos de 4 dígitos hexadecimales XXXX → https://unicode-table.com/es/
                /\u00f1/ representa al carácter ñ. 
            \b → Espacio en blanco 
            \B → Separador de palabra con un carácter que NO sea un espacio o salto de línea
                /Java\BScript/ 
                Coincidencias: 
                JavaScript , Java8Script,  Java*Script,... 
            . → Comodín excepto salto de línea
                /.s/ 
                Coincidencias: 
                as, es, 3s, -s 
            \s → Carácter de separación que representa a tabulador, espacio o salto de línea. 
            \S → Cualquier carácter de separación que NO sea un tabulador, espacio o salto de línea. 
            \d → Dígito entre 0-9
            \D → Separador que NO sea un dígito
            \w → cualquier alfanumérico (letras, números y subrayado)
                /Java\wScript/ 
                Coincidencias: 
                JavanScript, JavaMScript, Java7Script, Java_Script. 
            \W → Cualquier carácter que NO sea un alfanumérico o un guion de subrayado. 
                /Java\WScript/ 
                Coincidencias: Java-Script, Java/Script, Java Script.


        //Combinaciones:
            [xxx] - Coincidencias especificadas 
                /\d\d-\d\d-\d\d\d\d/ 
                Una fecha como 23-07-1999.
            
                /[abc]a/ equivale a /[a-c]a/ 
                aa, ba, ca. 

            [^xxx] - que NO sean lo especificado
                /gat[^ao]/
                gati, gatu, gate
            
            [x|y] - Coincidencia con x o y, pero no con los dos. (equivale a || )
                /gat[a|o]/
                gato, gata.

        //De posición 

            /^b/  → Que empiece por b
            /as$/ → La coincidencia empieza por el final del patrón → lunas, buenas, personas
            /gat(?=[ao])/  → Tiene que seguir lo que hay tras la interrogación →  gata, gato
            /gat(?![ao])/ → Lo contrario a lo indicado
            
        //Flags o Modificadores → Se colocan fuera de las barras

            g → Busca patrones /ja/g → ja, jajeja, Jajeja, jamón, jarra.
            i → Elimina la distinción entre mayúsculas y minúsculas. /ja/i
            s → Permite  que  punto  (.)  pueda  ser  un  salto  de línea.
            x → Fuerza a que los espacios en blanco sean ignorados.
            m → Permite usar el patrón en varias líneas.

        //Paréntesis → Permiten agrupar caracteres que serán tratados como un bloque.
            /sum(ar)+/  →  sumar, sumarar, sumararar
            /(ja)+/  → ja, jaja, jajaja */

    //EXPRESIONES REGULARES ÚTILES 
    let numeroTelefonico= /\d{9}/ 
    let DNI= /\d{8}[a-zA-Z]/ 
    let fecha1= /\d{2}-\d{2}-\d{4}/ //(dd-mm-aaaa / mm-dd-aaaa).
    let fecha2= /[0-3]\d-[0|1]\d-\d{4}/  //(dd-mm-aaaa). 
    let hora1=/^(0[0-9]|1[0-2]|2[0-3]):([0-5]\d)(:([0-5]\d))?$/ // (hh:mm:ss formato 24horas con y sin segundos). 
    let hora2=/^(0[0-9]|1[0-2]):([0-5]\d)(:([0-5]\d))?$/   // (hh:mm:ss  formato  12  horas  con  o sin segundos).
    
    
    
    //OBJETO → RegExp 
    //Validador RegExp → !!!!!COPIA LA URL QUE TE MANDÓ JAVI
    var patron5 =new RegExp("\\d{2}-\\d{2}-\\d{4}"); //Fecha: 23-09-2021
    //Propiedades:
    /*
        global → Indica si "g" está activo en el patrón
        ignoreCase → Indica si "i"
        multiline → Indica si "m"
        flags → Devuelve cadena con los modificadores presentes
        source→ Devuelve cadena correspondiente al patrón
        index → Posición dentro del texto donde empieza la primera coincidencia encontrada
        lastIndex → Posición del último carácter coincidente
        dotAll → Indica si el punto del patrón coincide con salto de línea */


    //Método .test()  → Comprueba si un string coincide con el patrón y devuelve true o false. 
     
    var expresion = new RegExp("la","gi"); 
    document.write("¿Hay coincidencia?" + expresion.test("Hola"));

    //Método .exec(). → A diferencia de test,da más información sobre las coincidencias. 
    /* → null, si no hay coincidencia.
       → Se detiene en la primera coincidencia, para seguir buscando hay que usar "g" 
       → Si "g" está en uso, actualiza  la  propiedad  lastIndex  y  deja  todo 
        preparado para que la siguiente ejecución del método exec() 
        comience  en  esa  posición  y  así,  a  partir  de  ella  busque  una  nueva 
        coincidencia.*/ 

    var patron = new RegExp("A","gi"); 
    document.write(patron.exec("Hola Adiós")); //Encuentra la letra a. 
    document.write(patron.lastIndex); //Muestra índice 4. 
    document.write(patron.exec("Hola Adiós")); //Encuentra la letra A. 
    document.write(patron.lastIndex); //Muestra índice 6. 
    document.write(patron.exec("Hola  Adiós"));  //Sin  coincidencias, muestra null. 
    document.write(patron.lastIndex); //Muestra índice 0
    //Mejor usar match con objeto string en vez de exec().
 
    const texto = "El perro juega en el parque. El perro también corre.";
    const regex = /perro/g; // Expresión regular para buscar "perro"

    const resultados = texto.match(regex);

    console.log(resultados);

    [ 'perro', 'perro' ] //Salida en consola 



//OBJETO STRING 

    var texto1 = new String (); // Cadena vacía. 
    var texto2 = new String ("Hola mundo"); 
    var texto4 = new String (false); 

    //Métodos 

    //length()
    texto1 = "adiós"; 
    document.write(texto1.length); //Muestra 5.

    //match()
    // Uso de "g" e "i" es casi obligatorio 
    var texto = new String ("Coche"); //Declaración string
    var patron=/a/;                   //Declaración del patrón 
    document.write (texto.match(patron)); //Uso método → Devuelve null. 
    document.write(texto.match(/c/)); //Declarando el patrón directamente → Devuelve c minúscula que se puede almacenar en una variable o en un array. 
    document.write(texto.match(/c/gi)); //Devuelve C y c que se pueden almacenar en un array. 
    var coincidencias = texto.match(/c/gi); 
    document.write (coincidencias); //Devuelve C, c. 
    document.write (coincidencias[1]); //Devuelve c. 
    document.write (coincidencias.length); //Devuelve 2. 
    texto = "Coche de carreras"; 
    document.write (coincidencias.length); //Devuelve 3. 
    for(var i = 0; i < coincidencias.length; i++) 
    { 
        document.write (coincidencias[i]); //Devolverá Ccc, está cada una guardada en una posición del array "coincidencias" 
    } 

    //search()
    //Devuelve posición donde está la primera ocurrencia del patrón, tras comprobar si existe en el texto
    //Primer índice es el 0, no permite búsquedas globales (g) y si no hay coincidencias devuelve -1 
    var texto = "Esta Mancha no mancha"; 
    var patron1 = /mancha/;  
    var patron2 = /Mancha/; 
    var patron3 = /mancha/gi; 
    var patron4 = /manta/; 
    var busqueda1 = texto.search(patron1); //Devuelve 15. 
    var busqueda2 = texto.search(patron2); //Devuelve 5. 
    var busqueda3 = texto.search(patron3); //Devuelve 5. 
    var busqueda4 = texto.search(patron4); //Devuelve -1.

    //replace()
    //Realiza búsqueda de coincidencia y si la hay, reemplaza el contenido por lo indicado
    //Si no hay coincidencias, no modifica texto.
    //Si se usa "g" se reemplazan todas las coincidencias. Si no, sólo la primera.
    textoOriginal.replace(búsqueda, reemplazo); 
    var variableConTextoModificado = textOriginal.replace(búsqueda, reemplazo);

    //split().
    //Divide una cadena en subcadenas que se guardan en un array
    texto.split (separador, límite); 
    var nombreArray = texto.split (separador, límite); 
    //Separador es: espacio en blanco,  expresión  regular,  patrón,  o  texto  que actúa como delimitador de las subcadenas. 
    //Si  no  hay  separador  o  delimitador  en  la  cadena,  se  devuelve  un  array con la cadena completa. 
    //El límite es opcional, un número entero. Devuelve tantas subcadenas como se indique en él. 

    //toLowerCase()  o  toUpperCase()
    //texto en minúsculas
    var texto = "La catedral de Burgos"; 
    document.write (texto.toLowerCase()); //Devuelve "la catedral de burgos". 
    var frase = prompt("Escribe un texto",""). toLowerCase(); 
    //texto en mayúsculas 
    document.write (texto.toUpperCase()); //Devuelve "LA CATEDRAL DE BURGOS". 
    var frase = prompt("Escribe un texto",""). toUpperCase(); 

    //charAt()
    //Muestra carácter especificado como parámetro, que representa la posición especificada mediante un int empezando por 0
    document.write (texto.charAt(0)); //Devuelve "L". 
    document.write (texto.charAt(8)); //Devuelve "r". 

    //concat()
    //concatena cadenas pasadas como parámetro. Equivale a +
    document.write (texto.concat(" y la de Cuenca")); //Devuelve "La catedral de Burgos y la de Cuenca"

    //includes()
    //Indica si un texto está incluido en otro texto y devuelve booleano
    var texto = "La catedral de Burgos"; 
    document.write(texto.includes("catedral")); //Devuelve true. 
    document.write(texto.includes("catedral",10)); //Devuelve false. 
    
    //indexOf() / lastIndexOf().
    //Muestra la posición de la primera o última coincidencia 
    var texto = "JavaScript";  
    texto.indexOf("a");  //Devuelve 1. 
    texto.indexOf("a",2);  //Devuelve 3. 
    texto.indexOf("Script");  //Devuelve 4. 
    texto.indexOf("T");  //Devuelve -1. 
    texto.lastIndexOf("a");  //Devuelve 3. 
    texto.lastIndexOf("Script");  //Devuelve 4. 
    texto.lastIndexOf("R");  //Devuelve -1.

    //substring()
    //Muestra cadena ubicada en posición inicial y otra al final 
    var texto = "JavaScript"; 
    texto.substring(0);  //Devuelve JavaScript. 
    texto.substring(0,2);  //Devuelve  Ja. 
    
    //repeat()
    //Crea cadena repitiendo el nº de veces indicado el contenido del objeto o variable 
    var texto = "JavaScript"; 
    texto.repeat();  //Devuelve " ". 
    texto.repeat(2);  //Devuelve  JavaScript JavaScript 

    //trim()
    //Elimina espacios en blanco ubicados al principio o al final de una cadena 
    var texto = "        JavaScript                    "; 
    texto.trim();  //Devuelve "JavaScript".  


//OBJETO DOCUMENT 
//MÉTODO GET 
//→ Sirve para acceder al DOM y cargar contenido web en variables, arrays etc
//Se usa junto con innerHTML para que pueda tener acceso   
//Ejemplo respecto a un <p> con id parrafo en HTML 
        var parrafo = document.getElementById("parrafo").innerHTML;
        const patron3=/a/gim;
        var coincidencias1=parrafo.match(patron3); 
//Get se usa para acceder a los datos pero también para añadir datos nuevos 

//FORMULARIO -!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

    onclick=funcionQueEjecutaAlgo //El usuario al clickar activa el comportamiento de la función
    //DOM → Estructura jerárquica de un HTML. Accedemos a él para poner o quitar contenido
    //ACCESO A FORMULARIOS.
    
    //Cuando se carga la página web en el navegador, el DOM crea un array con todos los formularios.
    //El array se llama forms
    //Accedemos con document y se necesita conocer el índice donde el formulario en concreto está almacenado.
        
        document.forms[0]; // Acceso al primer formulario.      
        document.forms[2]; // Acceso al tercer formulario.
        
    //Acceder a formularios en la carpeta EJEMPLOS FORMULARIOS
    //Resumen y ejemplos: 
    document.getElementById("formId") //Accede al formulario por su ID.
    document.forms["formName"] //Accede al formulario por su nombre.
    document.forms[index] //Accede al formulario por su índice en el array del DOM.
    document.querySelector("form") //Selecciona el primer formulario en el documento.
    document.querySelectorAll("form") //Selecciona todos los formularios y devuelve una lista de nodos.

    //Accediendo a elementos dentro del formulario:
    form.elements["elementName"] //Accede a un elemento del formulario por su nombre.
    form.elements[index] //Accede a un elemento del formulario por su índice.
//APUNTES:
/*
    ACCESO A LAS PROPIEDADES DE LOS ELEMENTOS. 
    Se  puede  acceder  a  las  propiedades  de  un  elemento  para consultar o modificar su contenido. 
    → type. (tipo de elemento) 
        → input (muestra valor del atributo type que tengan:text, password, radio, etc)
            text, password, radio, etc. 
        → select (muestra valores select-one o select-multiple)
        →textarea 
    →form. (A qué formulario pertenece el elemento)
    →name (obtiene el valor del atributo name de un elemento). Solo lectura.
    →value (Accede a la propiedad value de un elemento, texto introducido por el usuario ) 

 





o Permite obtener el texto escrito por el usuario o escribir texto 
en ellos. 
• Botones de acción o comando. 
o Muestran  el  texto  que  tiene  el  botón  o  permiten  cambiarlo 
por otro. 
• Botones de opción(radio) y casillas de verificación (checkbox): 
o Muestran  el  valor  del  atributo  value,  que  permite  conocer 
que valor tiene la opción seleccionada.  
o Este valor también puede ser cambiado. 
▪ Sintaxis: 
• Carga de valor: 
o variable = document.nombreformulario.nombre 
elemento.value; 
o variable = document.getElementById(“identificador”).value; 
// Mediante método get. 
• Cambio de valor: 
o document.nombreformulario.nombre elemento.value = 
nuevo valor; 
o document.getElementById(“identificador”).value  =  nuevo 
valor; 
▪ Ejemplos: 
• Carga de valor: 
o <label>Dirección<input type = "text" name = "dir" 
id=”d”)></label> 
o let  direccion  =  document.for1.dir.value;  //  Acceso  al  campo 
dirección  del  formulario  for1  para  guardar,  en  la  variable 
direccion, lo que el usuario haya escrito en este campo. 
o let  direccion  =  document.getElementById(“d”).value;  // 
Acceso  al  campo  dirección  del  formulario  for1  mediante  un 
método  get  para  guardar,  en  la  variable  direccion,  lo  que  el 
usuario haya escrito en este campo. 
• Cambio de valor: 
o <label>Comentarios</label><textarea name = "coment" 
id=”com”></textarea> 
o document.for1bre  elemento.coment.value  =  “Nuevo 
comentario”;  //Acceso  al  área  de  texto  del  formulario  for1 
para escribir en ella un nuevo comentario. 
o document.getElementById(“com”).value  =  “Nuevo 
comentario”;  //Acceso  al  área  de  texto  del  formulario  for1 
usando un método get, para escribir en ella un nuevo 
comentario. */


    


    




























































































































    //NORMALIZAR CADENAS / MINÚSCULA / MAYÚSCULA / ACENTUADAS

let color = prompt("Introduzca color del semáforo: ","").toLowerCase(); //lower a minus, Upper a mayus

        function normalizarCadena(color) {
            return color
                .normalize('NFD') // Normaliza la forma de descomposición
                .replace(/[\u0300-\u036f]/g, '') // Elimina los acentos
        }

        color=normalizarCadena(color);

/*!!!!!!!!!!!!!!!!!!!!!!!!!!Código de país - Código idioma*/
