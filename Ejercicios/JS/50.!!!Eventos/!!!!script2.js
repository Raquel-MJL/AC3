/*

//CREA UNA FUNCIÓN PARA CADA COLOR Y MANEJADORES SEMÁNTICOS PARA LOS EVENTOS
→ Al pasar por el ratón por encima del enlace, 
el div izquierdo se pone de ese color. 
→ Al retirar el ratón se pone del color original 

 */
const rojo=document.getElementById("rojo");
const naranja=document.getElementById("naranja");
const amarillo=document.getElementById("amarillo");
const verde=document.getElementById("verde");
const azul=document.getElementById("azul");
const morado=document.getElementById("morado");
const rosa=document.getElementById("rosa");
var div = document.getElementById("d1");



function cambiarRojo(){
    div.style.backgroundColor="red";
    }
rojo.onmouseover=cambiarRojo; 


function cambiarNaranja(){
    div.style.backgroundColor="orange";
    }
naranja.onmouseover=cambiarNaranja; 


function cambiarAmarillo(){
    div.style.backgroundColor="yellow";
    }
amarillo.onmouseover=cambiarAmarillo; 


function cambiarVerde(){
    div.style.backgroundColor="green";
    }
verde.onmouseover=cambiarVerde; 


function cambiarAzul(){
    div.style.backgroundColor="blue";
    }
azul.onmouseover=cambiarAzul; 


function cambiarMorado(){
    div.style.backgroundColor="purple";
    }
morado.onmouseover=cambiarMorado; 


function cambiarRosa(){
    div.style.backgroundColor="pink";
    }
rosa.onmouseover=cambiarRosa; 


function devolverColor(){
    div.style.backgroundColor="rgb(240, 225, 186)";
}

rojo.onMouseout=devolverColor; 
naranja.onMouseout=devolverColor; 
amarillo.onMouseout=devolverColor; 
verde.onMouseout=devolverColor; 
azul.onMouseout=devolverColor; 
morado.onMouseout=devolverColor; 
rosa.onMouseout=devolverColor; 

