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
    
    let e = 5.6; 
    let f = 8.9; 
    if(e>f) 
        { 
        document.write ("a es mayor que b"); 
        } 
    else if(a==b) 
        { 
        document.write ("a es igual que b"); 
        } 
    else 
        { 
        document.write ("a es menor que b"); 
        }
/*!!!!!!!!!!!!!!!!!!!!!!!!!!Código de país - Código idioma*/