/*Software que está a la espera de que se produzca una acción*/
/*La hoja de JS se llama Script. No necesita ser compilado y es un fichero de texto plano que permite describir órdenes que un intérprete 
ejecutara en tiempo real*/

/*Se trabaja con Instancias: Objeto creado a partir de una clase o constructor. 
Defines clase o constructor, usas "new" para crear una instancia de esa clase. 
Cada instancia tiene sus propios valores para las propiedades definidas en la clase, y puede acceder a los métodos de la misma*/

/*Case y Acent sensitive*/
/*Espacio en blanco y saltos de línea no se tienen en cuenta.*/
/*Se incluye:
    <script type = "text/javascript"> 
    Código JavaScript 
    </script> */
/*O desde un archivo*/
/*   <script type = "text/javascript" src="ruta acceso/archivo.js"> 
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
    var mayoriaEdad = (edad >=18)? "Si": "No";

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
            //<body onload = "sumar ();">
        //Al producirse un evento: 
            /*
            fuction pulsar() 
                { 
                alert("¡Has pulsado el botón!"); 
                } 
            <input type ="button" name = "boton1" value = "Pulsar" onclick = "pulsar()"> */

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
        //Se insertan "Rosa","Blanco","Negro  y  se  eliminan  "Verde",  "Azul" 
        // 2 elementos a partir de la posición 1 a eliminar). 
        document.write(colores.splice(1,0,"Rosa","Blanco","Negro")+ "<br>");
        //Se insertan "Rosa","Blanco","Negro" sin eliminar nada, desplazan los existentes. 
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
    numeros1.concat(palabras); //Resultado: 34,67,45, "Hola", "Adiós". 
    palabras.concat(numeros1); //Resultado: "Hola", "Adiós", 34,67,45. 
    numeros1.concat(palabras,  numeros2,  "hola",89);  //Resultado:  34,67,45,  "Hola",  "Adiós",80, 32, 27,"hola",89. 
 
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
o var nombre = new RegExp("patrón");

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


//FORMULARIOS  
    //Cuando se carga la página web en el navegador, el DOM crea un array con todos los formularios llamado forms.
    
    //ACCESO AL ARRAY 
        document.forms[0]; // Acceso al primer formulario.      
        document.forms[2]; // Acceso al tercer formulario.
        document.forms["for1"]; // Acceso al formulario for1.
        document.forms.for2; // Acceso al formulario for2. 
        document.for3; // Acceso al formulario for3. 
        
    //ACCESO A LOS ELEMENTOS → Dentro de cada formulario, el DOM crea un array con todos los elementos llamado elements
        document.for1.elements[2]; // Acceso al tercer elemento del array con name "for1" 
        document.for1.elements["edad"]; //Accede al elemento de name "edad"
        document.for2.edad; //Accede al elemento llamado edad dentro del formulario llamado for2

    //ACCESO A LAS PROPIEDADES DE LOS ELEMENTOS → Muestra o modifica contenido de un elemento (si no son de sólo lectura)
        /* .type */ document.for1.pass.type;  //  Acceso  al tipo de dato que es el elemento llamado "pass"  campo  contraseña 
        /* .form */ document.for1.nombre.form;  //  Acceso  al  campo del nombre del formulario padre
        /* .name */ document.  getElementById("n").name; //Acceso por nombre del elemento indicado 
        /* .value */ document.  getElementById("n").value; //accede a lo declarado en value o al contenido de ese elemento
        /* .checked */ seleccionada = botones[i].checked; //Accede a la/s opción/es seleccionada/s de un radiobotón o un checkbox. Boolean
    
    //ACCESO A LISTAS DESPLEGABLES → Dentro de cada lista desplegable creada con select, el DOM crea un array con todas sus opciones llamada options.
        document.for1.lista.options; // Acceso al array cargando  todos  los  valores  de  la  lista  cuyo  name es lista.  
        //Propiedades: 
            //.length → Igual que en String
            let  elementos  =  menu.length  //  Carga en  la  variable  elementos el número de opciones o elementos incluidos en el array menu.
            //.selectedIndex → Permite conocer el índice del elemento seleccionado
            let  indice  =  document.for2.opciones.selectedIndex;  //  Carga,  en  la variable indice el número del índice del elemento seleccionado en la lista cuyo name es opciones.
            // .value → Carga el valor, su contenido
            let  valor  =  menu[1].value 
            // .options → Carga el  texto  incluido  en  la  etiqueta  <option>  del  primer elemento del array options incluido en la lista opciones del formulario for1.
            let texto = document.for1.opciones.options[0].text 
            // .selected → Permite conocer que opción u opciones de una lista está seleccionada. Boolean.
            if (menu[i].selected == true ) //Devuelve true o false

            

//Métodos de comportamiento a implementar en el HTML: 
onclick=funcionQueEjecutaAlgo //El usuario al clickar activa el comportamiento de la función
onChange=funcionQueEjecutaAlgoAlCambiar //Al cambiar (listas desplegables por ejemplo)


/*
BOM → Modelo de Objetos del Navegador - Browser Object Model
Permite a JavaScript comunicarse con el navegador y acceder a todas sus áreas. 
Específico de cada navegador.
    → window, navigator, screen, history, location y frames 

DOM → Modelo de objetos del documento - Document Object Model 
Documento que contiene toda la estructura del HTML. 
Es una interfaz que permite crear, cambiar, modificar o eliminar elementos del documento web. 
Describe el contenido del documento como un conjunto de objetos.
Se pueden añadir eventos a dichos elementos. 
Es independiente del navegador. 

    → document y sus objetos hijos como anchors, forms, images, links, layers, element... */

/*Entendemos como árbol dom la estructura que los datos llevan en el HTML

            Head → Title → Mi página
        
        Html 
                 → h1 → Hola mundo
            body
                 → p → Cualquier texto

Y dentro del árbol a cada uno de los elementos (div, p, a...)se le llama nodo.
             

//OBJETO WINDOW → Nos permite acceder al DOM  */
    window.alert() //Muestra un cuadro modal de alerta o aviso. Un solo botón de aceptar. 
    window.confirm() //Muestra mensaje con dos botones, uno para aceptar y otro para cancelar. 

//OBJETO DOCUMENT →
    
    //OBJETOS 

        var miFormulario = document.forms["formularioRegistro"]; //accede al formulario con el nombre "formularioRegistro" en el documento HTML y lo asigna a la variable miFormulario.
        document.write(document.forms["formularioRegistro"]); 
        var miImagen = document.images["logo"]; //accede a la imagen con el nombre "logo" en el documento y la asigna a la variable miImagen. Esto permite manipular esa imagen, como cambiar su src, ocultarla, o modificar otros atributos.
        var miEnlace = document.links[3]; //accede al cuarto enlace en el documento HTML y lo asigna a la variable miEnlace

        document.styleSheets//Devuelve array con todas las hojas de estilo de la página, o el índice indicado 
        document.anchors //Array con todas las anclas 
        document.links //Array con todos los enlaces 
            //Se pueden mostrar los atributos de los enlaces con: 
            document.links[indice].atributo; 
        document.images //Array con imágenes del documento, también funciona el .atributo
            document.links[indice].atributo; 
        document.scripts //Array con los scripts
        document.forms //devuelve las referencias a formularios 
        document.url //Devuelve variable con dirección del documento actual.

        //Para acceder a cada elemento individual: Por posición en el array o con el atributo name.

    //MÉTODOS
        document.write("<h1>Hola</h1> ");
        document.getElementById("aquiVaElID");
        var parrafos = document.getElementsByName("html");
        var parrafos = document.getElementsByTagName("p");
        var parrafos = document.getElementsByClassName("parrafos"); //Devuelve un array de datos 
        var parrafos = document.querySelector ("p"); //Devuelve el primer elemento que coincide con el selector CSS incluido como parámetro. 
        var parrafos = document. querySelectorAll ("p"); //Devuelve TODAS las coincidencias 
        let elementoNuevo = document.createElement("li");  //Crea un elemento nuevo del tipo identificado
        let elementoTexto = document.createTextNode("Texto opción"); //Crea un nodo de texto para, posteriormente, añadirlo o asociarlo a un elemento que pueda incluir texto.
  
    
    
//OBJETO ELEMENT → Representa cualquier contenido del DOM
    
    //OBJETO: children
        let elementosHijos = document.getElementById("division1").children; 
        document.write(elementosHijos.length); // Muestra cuántos hijos hay. 
        document.write(elementosHijos[2]); // Muestra el tipo de objeto que es el tercer hijo. 

    //MÉTODOS
        //appendChild → Inserta nodo al final de los hijos ya existentes */
         
            let lista = document.getElemtnById("lista1"); // Añadir elemento a una lista ya existente:
            let elemento = document.createElement("li"); 
            elemento.innerHTML = "Nuevo elemento al final de una lista existente"; 
            lista.appendChild(elemento);
            //Añadir elemento a una lista nueva: 
            let lista2 = document.createElement("ul"); 
            let elemento = document.createElement("li"); 
            elemento.innerHTML = "Nuevo elemento al final de una lista nueva"; 
            lista.appendChild(elemento); 
            //Añadir un párrafo al final de una división: 
            division1.appendChild(ultimoParrafo);
    
        //insertBefore() → Permite insertar un nodo o elemento antes que otro  elemento que esté en el mismo nivel de anidamiento.
            division1.insertBefore(elemento4, elemento5); //Añade elemento antes del quinto elemento de una división denominada division1:
        //replaceChild() → Permite reemplazar un nodo por otro.
            division1.insertBefore(parrafoNuevo, parrafo2); //Sustituir un párrafo por otro nuevo en una división denominada division1: 
        
        //removeChild(). → Elimina nodo
            let opcion2 = document.getElementById("op2"); 
            document.getElementById("lista1").removeChild(opcion2); //Eliminar un elemento de una lista */

    //MÉTODOS DE ATRIBUTO 
        // getAttribute(). → Devuelve el valor del atributo especificado como parámetro en el método
            var parrafo = document.getElementById("p4"). getAttribute("class"); 
            var alternativo = document.getElementById("imagen1").getAttribute("alt"); 
            var a = document.getElementById("p4"); 
            var alineacion = a. getAttribute("align"); 
        
        //getAttributeNames() → Carga todos los atributos de un elemento en un array en el orden declarado en el HTML  
            let atributos = document.getElementById("p1").getAttributeNames(); //Carga los tipos de atributo que tiene 
        
        //setAttribute() → Permite añadir o modificar los atributos de un elemento.
            var parrafo = document.getElementById("p4"); 
            parrafo.setAttribute("class","parrafos"); 

            var division = document.getElementById("div1"); 
            division.setAttribute("name","d1");
        
        //createAttribute() → Crea un nuevo nodo de tipo atributo 
            let division = document.getElementById("div1"); 
            let atributo = document.createAttribute("class"); 
            atributo.value = "contenedores"; 
                    
        //setAttributeNode() → Añade un nuevo nodo de tipo atributo al elemento que se especifique.    
            let division = document.getElementById("div1"); 
            let atributo = document.createAttribute("class"); 
            atributo.value = "contenedor"; 
            division.setAttributeNode(atributo); 
            console.log(division.getAttribute("atributo")); // Mostrará contenedor 
            
//MÉTODOS DE ACCESO TEXTUAL 

//Nota: Para acceder al contenido del HTML hay  que usar:
    //innerHTML → Devuelve el contenido HTML del elemento, incluyendo las etiquetas HTML.
    document.metodo(parámetros).innerHTML  +=  "Contenido  HTML  a insertar";
    //innerText: Devuelve el texto visible del elemento, ignorando las etiquetas HTML y el texto oculto. Tiene en cuenta estilo y formato. 
    var parrafo = document.getElementById("p4").innerText; 
    document.write("Contenido del cuarto párrafo : " + parrafo + "<br>");
    //textContent → Similar a innerText, devuelve el texto del elemento, pero incluye todo el texto, incluso el que está oculto. No tiene en cuenta estilo ni formato.*/
    var parrafo = document.getElementById("p4").textContent; 
    document.write("Contenido del cuarto párrafo : " + parrafo + "<br>");


//APLICAR ESTILOS CSS DESDE JAVASCRIPT. 
 
    //Style → Se usa para aplicar estilo o formato a cualquier elemento HTML. Si las propiedades CSS son compuestas, se elimina el  guion medio y se  pone  la primera letra de la segunda palabra en mayúsculas: 
   
    document.getElementById("p1").style.color = "#f00"; 
    document.getElementById("p1").style.fontSize = "20px";  
  
    //Atributo cssText → añade todas las propiedades CSS que se quiera al mismo tiempo, se escriben igual que en CSS
    /*La  propiedad  style  incluye  el  atributo  cssText,  que  permite  asignar  varias  propiedades  CSS 
    al mismo tiempo.*/ 
         
    document.getElementById("p1").style.cssText  =  "color:  #f00;  font-size: 20px";   

    //Pedir con Prompt el dato de un style: 
    p.style.color = prompt("Ingresa un color (nombre o código hexadecimal):");


//EVENTOS → Acción del usuario sobre un elemento HTML que provoca respuesta. 
//Hay que asociarles una función o código en JS que se ejecute, se llama manejadores de evento y se añade el "on"delante. . 
    /* Evento: click. */
    /* Manejador: onclick. */

    /*Tipos: 
        → click: botón izquierdo del ratón 
        → dblclick: doble click con botón izquierdo
        → mouseover: cuando el puntero entra al área que ocupa un elemento,
        → mouseout: cuando el puntero sale 
        → load: cuando el navegador termina de cargar página del todo 
        → unload: cuando se abandona la página al cerrar el navegador 
        → focus: cuando un elemento de la página recibe el foco (cuadrícula destacada de un formulario por ejemplo )
        → blurr: cuando lo pierde. (cuando sales de esa selección)
        → keydown:  Se activa cuando se presiona una tecla.
        → keyup:  Se activa cuando se suelta una tecla.
        → change: Se activa cuando el valor de un elemento de formulario cambia.
        → submit: Se activa cuando se envía un formulario.
        → resize:  Se activa cuando se redimensiona la ventana del navegador.
        → scroll:  Se activa cuando se desplaza el contenido de un elemento o de la ventana.
        → contextmenu:  Se activa cuando se hace clic derecho sobre un elemento.*/
        
    //Ejemplo
    const miInput = document.getElementById('miInput');

    miInput.addEventListener('focus', () => { //Cuando el campo de entrada recibe el foco (cuando haces clic en él), el fondo se vuelve de color amarillo claro.
        miInput.style.backgroundColor = 'lightyellow';
    });

    miInput.addEventListener('blur', () => { //blur: Cuando el campo de entrada pierde el foco (cuando haces clic fuera de él), el fondo vuelve a su color original.
        miInput.style.backgroundColor = '';
    });

    //Con manejador semántico:
    function pulsar() 
        { 
        alert("¡Has pulsado dentro del párrafo!"); 
        } 
        var pa =document.getElementById("p1"); 
        pa.onclick = pulsar; 
        document.getElementById("p1").onclick  =  pulsar;  //  Alternativa  a  crear  una variable para cargar el nodo.
    
    //Con un Escuchador 
        /*Sintáxis*/ elemento.addEventListener("evento", funciónSinParéntesis, flujo) ; //Flujo opcional. Es boolean. True=herencia hacia abajo. false=herencia hacia arriba.  
 
        //Ejemplo: 
            <h1 id = "titulo">Título de la web</h1> 
            function cambiarColor() 
            { 
            titulo.style.color = "yellow"; 
            } 
            var texto = document.getElementById("titulo");  
            texto.addEventListener("dblclick",cambiarColor);  
 
        //Ejemplo con varios elementos: 
            
            function cambiarColor() 
            { 
            this.color = "yellow"; // this se refiere al array párrafos. 
            } 
            var parrafos = document.getElementsByTagName("p");  
            parrafos.addEventListener("dblclick",cambiarColor);
            
        //Quitar manejador: 
        elemento.removeEventListener("evento", funcionSinParentesis, flujo) 

        
    // EVITAR ACCIÓN DE EVENTO
        // → preventDefault() //Cancela acción (no todos los eventos son cancelables) 
         document.getElementById("form1").addEventListener("submit",  function(e) 
        {e.preventDefault();}) 
            //Mostrar si un evento es cancelable: 
                let esCancelable =e.cancelable; 
                alert("¿Este evento es cancelable? " + esCancelable); 
                e.preventDefault();        

//EVENTOS TECLADO 

var texto1 = document.getElementById("cuadro1");
		  var texto2 = document.getElementById("cuadro2");
		  var texto3 = document.getElementById("cuadro3");
		  var texto4 = document.getElementById("cuadro4");
		  var total;
		  
		  function soltarTecla()
		  {
			total = texto1.value.length;
			texto3.value = total;
			
		  }
		  function pulsarTecla()
		  {
			total = texto1.value.length;
			texto2.value = total+1;
		
		  }
		  
		  function presionarTecla()
		  {
		
			total = texto1.value.length;
			texto4.value = total+1;
		  }
		  texto1.addEventListener("keyup",soltarTecla);
		  texto1.addEventListener("keydown",pulsarTecla);
		  texto1.addEventListener("keypress",presionarTecla);


//Eventos tiempo
/*

EVENTOS DE TIEMPO. 
• Son  temporizadores  que  se  usan  para  retrasar  o  repetir  la  ejecución  de  código  (una  función,  por 
ejemplo), un determinado intervalo de tiempo. 
• Ejecutar una función transcurrido un tiempo determinado, se denomina planificar una llamada. 
• Existen 2 métodos nativos de JavaScript que se utilizan en los eventos de tiempo. 
o setTimeout. 
▪ Permite ejecutar una función pasado un intervalo de tiempo determinado. 
▪ Sintaxis: 
▪ setTimeout(Función o código, tiempo); 
▪ Función. 
▪ Función o código que se llamará o ejecutará transcurrido el tiempo 
especificado como segundo parámetro. 
▪ Tiempo. 
▪ Tiempo  expresado  en  milisegundos  que  debe  transcurrir  antes  de 
ejecutarse la función incluida como parámetro. 
▪ 1000 milisegundos = 1 segundo. 
▪ Ejemplos: 
function saludar() 
    { 
     alert("¡Buenos días!"); 
    } 
setTimeout(saludar,2000); // Transcurridos 2 segundos se muestra el 
saludo. 
 
o setInterval. 
▪ Permite ejecutar una función de forma repetida pasado un intervalo de tiempo.  
▪ Sintaxis: 
▪ setInterval(Función o código, tiempo); 
▪ Función. 
• Función o código que se llamará o ejecutará transcurrido el tiempo 
especificado  como  segundo  parámetro  y  volverá  a  repetirse  cada 
vez que el intervalo temporal se cumpla. 
▪ Tiempo. 
• Tiempo  expresado  en  milisegundos  que  debe  transcurrir  antes  de 
ejecutarse  cada  repetición  de  la  función  o  código  incluido  como 
parámetro. 
▪ Ejemplos: 
function saludar() 
{ 
alert("¡Buenos días!"); 
} 
setInterval(saludar,2000); // Cada 2 segundos, se repite el saludo. 
Identificador de temporizador. (intervalID). 
• Cuando  setTimeout()  o  setInterval(),  se  ejecutan,  se  les  asigna  un  número  o  identificador  único 
(intervalID), que puede ser guardado en una variable. 
• A través de dicha variable, podemos, por ejemplo, conocer qué temporizador está ejecutándose. 
• También sirve para detener los temporizadores.  
• Sintaxis: 
o variable = setTimeout(Función o código, tiempo); 
o variable = setInterval(Función o código, tiempo); 
o  
• Ejemplo: 
o let identificador = setTimeout(calcular, 2000); 
o let intervalo = setInterval(saludar, 5000); 
 
Detener eventos de tiempo. 
• Para  detener  un  temporizador,  se  crea  una  función  para  borrarlo  a  la  que  se  le  pasa  la  variable  que 
contiene el identificador del temporizador que se quiere parar. 
• clearInterval(). 
o Emparejado con setInterval() 
o Sintaxis: 
function detenerTemporizador() 
 { 
  clearInterval(variable con identificador); 
} 
• clearTimeout() 
o Emparejado con setTimeout(). 
o Sintaxis: 
function detenerTemporizador() 
 { 
  clearTimeout (variable con identificador); 
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
