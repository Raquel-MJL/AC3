function obtenerNum(){
var num1 = parseFloat(document.f1.n1.value); 
var num2 = parseFloat(document.f1.n2.value);
var num3 = parseFloat(document.f1.n3.value);
return [num1, num2, num3];
}

function imprimirSeleccion(){
    var opciones=document.getElementById("lista").value;
    document.getElementById("area").value=this.opciones;


}



/*

o En la lista, se pueden seleccionar una, varias o todas las operaciones 
    de cálculo a la vez. 
o El nombre de las operaciones  seleccionadas deberá mostrarse  en distintas 
    filas dentro del área de texto Operaciones Seleccionadas. 
o Dichas operaciones de cálculo que implementarán usando funciones y se 
ejecutarán al pulsar el botón Calcular. 
o El resultado, o los resultados de las operaciones, se mostrará en la celda correspondiente de 
la tabla. 
o Las funciones de cálculo deben realizar las siguientes operaciones: 
    ▪ Sumar los 3 números. 
    ▪ Restar al primero los otros 2. 
    ▪ Multiplicar los 3 números. 
    ▪ Dividir el primer número por el segundo y el resultado, por el tercero. 
    ▪ Sumar los 3 números y elevar al cuadrado el resultado de la suma. 
o Se puede, sí que quiere, realizar otras operaciones o modificar las que se piden. Todo esto 
implicaría más opciones en la lista y sus funciones de cálculo correspondientes. 
o Si que quieren realizar nuevos cálculos, se pulsará en el botón Nuevo Cálculo, que ejecutará 
una función para realizar las siguientes acciones: 
    ▪ Deseleccionar las operaciones previamente seleccionadas en la lista. 
    ▪ Vaciar el área de texto. 
    ▪ Vaciar los cuadros para los números. 
    ▪ Vaciar la tabla. 
*/

