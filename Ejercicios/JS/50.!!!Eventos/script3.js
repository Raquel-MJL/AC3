/*

//CREA UNA FUNC PARA CADA COLOR Y USA LISTENER PARA LOS EVENTOS 
→ Al pasar por el ratón por encima del enlace, 
el div izquierdo se pone de ese color. 
→ Al retirar el ratón se pone del color original  */

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
rojo.addEventListener('mouseover',cambiarRojo);

function cambiarNaranja(){
    div.style.backgroundColor="orange";
    }
naranja.addEventListener('mouseover',cambiarNaranja);

function cambiarAmarillo(){
    div.style.backgroundColor="yellow";
    }
amarillo.addEventListener('mouseover',cambiarAmarillo);

function cambiarVerde(){
    div.style.backgroundColor="green";
    }
verde.addEventListener('mouseover',cambiarVerde);

function cambiarAzul(){
    div.style.backgroundColor="blue";
    }
azul.addEventListener('mouseover',cambiarAzul);

function cambiarMorado(){
    div.style.backgroundColor="purple";
    }
morado.addEventListener('mouseover',cambiarMorado);

function cambiarRosa(){
    div.style.backgroundColor="pink";
    }
rosa.addEventListener('mouseover',cambiarRosa);




function devolverColor(){
        div.style=`background-color:rgb(240, 225, 186)`;
    }


rojo.addEventListener('mouseout',devolverColor);
naranja.addEventListener('mouseout',devolverColor);
amarillo.addEventListener('mouseout',devolverColor);
verde.addEventListener('mouseout',devolverColor);
azul.addEventListener('mouseout',devolverColor);
morado.addEventListener('mouseout',devolverColor);
rosa.addEventListener('mouseout',devolverColor);