/*

//CREA FUNCIÓN CON PARÁMETROS PARA USAR EVENTOS COMO ATRIBUTO 
→ Al pasar por el ratón por encima del enlace, 
el div izquierdo se pone de ese color. 
→ Al retirar el ratón se pone del color original 
 */
const div = document.getElementById("d1");

function cambiarRojo(){
    div.style.backgroundColor="red";
    }

function cambiarNaranja(){
    div.style.backgroundColor="orange";
    }

function cambiarAmarillo(){
    div.style.backgroundColor="yellow";
    }

function cambiarVerde(){
    div.style.backgroundColor="green";
    }

function cambiarAzul(){
    div.style.backgroundColor="blue";
    }

function cambiarMorado(){
    div.style.backgroundColor="purple";
    }

function cambiarRosa(){
    div.style.backgroundColor="pink";
    }

function devolverColor(){
    div.style=`background-color:rgb(240, 225, 186)`;
}