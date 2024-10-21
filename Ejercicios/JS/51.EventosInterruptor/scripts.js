//Ejercicio 1 y 2 


const boton1 = document.getElementById('bot1');  //Cambiar a negrita interruptor
const parrafo = document.getElementById('p1');

function modificarFuente1(){
    if (parrafo.style.fontWeight === 'bold'){
    parrafo.style.fontWeight = 'normal'}

    else{
        parrafo.style.fontWeight = 'bold' ;
    }
}

boton1.addEventListener('click', modificarFuente1);




const boton2 = document.getElementById('bot2');  //Cursiva 
function modificarFuente2(){
    if (parrafo.style.fontStyle === 'italic'){
    parrafo.style.fontStyle = 'normal'}

    else{
        parrafo.style.fontStyle = 'italic' ;
    }
}

boton2.addEventListener('click', modificarFuente2);




const boton3 = document.getElementById('bot3');  //Subrayado
function modificarFuente3(){
    if (parrafo.style.textDecoration === 'underline'){
    parrafo.style.textDecoration = 'none'}

    else{
        parrafo.style.textDecoration = 'underline' ;
    }
}

boton3.addEventListener('click', modificarFuente3);



/////////////////////////////////////

const parrafo2=document.getElementById('p2');
const boton4=document.getElementById('bot4');
const boton5=document.getElementById('bot5');
const boton6=document.getElementById('bot6');
const boton7=document.getElementById('bot7');
const boton8=document.getElementById('bot8');
const boton9=document.getElementById('bot9');



function modificarFuente4(){  //Negrita2
    if (parrafo2.style.fontWeight === 'bold'){
    parrafo2.style.fontWeight = 'normal'}

    else{
        parrafo2.style.fontWeight = 'bold' ;
    }
}

boton4.addEventListener('click', modificarFuente4);




function modificarFuente5(){ //Cursiva 2
    if (parrafo2.style.fontStyle === 'italic'){
    parrafo2.style.fontStyle = 'normal'}

    else{
        parrafo2.style.fontStyle = 'italic' ;
    }
}

boton5.addEventListener('click', modificarFuente5);




function modificarFuente6(){ //Subrayado 2
    if (parrafo2.style.textDecoration === 'underline'){
    parrafo2.style.textDecoration = 'none'}

    else{
        parrafo2.style.textDecoration = 'underline' ;
    }
}

boton6.addEventListener('click', modificarFuente6);

function modificarFuente7(){  //Color Azul 
    if (parrafo2.style.color === 'blue'){
    parrafo2.style.color = 'black';}

    else{
        parrafo2.style.color = 'blue' ;
    }
}

boton7.addEventListener('click', modificarFuente7);

function modificarFuente8(){ //Arial 
    if (parrafo2.style.fontFamily === 'Arial'){
    parrafo2.style.fontFamily = '';}

    else{
        parrafo2.style.fontFamily = 'Arial' ;
    }
}

boton8.addEventListener('click', modificarFuente8);

function modificarFuente9(){  //Courier
    if (parrafo2.style.fontFamily === '"Courier New"'){
    parrafo2.style.fontFamily = "";}

    else{
        parrafo2.style.fontFamily = '"Courier New"' ;
    }
}

boton9.addEventListener('click', modificarFuente9);


///Ejercicio 3 y 4 - Cambio de color indicado por usuario

const boton3a = document.getElementById('bot3a');
const parrafo3 = document.getElementById('p1a');
function colorIndicado(){
    const patron=/^(?:(?:#[0-9A-Fa-f]{3,6})|(?:rgb\(\s*(\d{1,3})\s*,\s*(\d{1,3})\s*,\s*(\d{1,3})\s*\))|(?:rgba\(\s*(\d{1,3})\s*,\s*(\d{1,3})\s*,\s*(\d{1,3})\s*,\s*(0|1|0?\.\d+)\s*\))|(?:[a-zA-Z]+))$/;
    var color = document.getElementById('t1');
    if (color.value.match(patron))
    parrafo3.style.color = color.value;
    else{
        alert("Formato de color inválido");
    }


}


boton3a.addEventListener('click',colorIndicado);

