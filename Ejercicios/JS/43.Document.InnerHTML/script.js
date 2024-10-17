//Guarda el contenido de p3 de 4 formas distintas
let a = document.getElementById("p3").innerHTML; 
let b = document.getElementById("p3").innerText;
let c = document.getElementById("p3").textContent; 

//Muéstra el contenido de las 3 variables en una ventana emergente 

alert("Contenido de la primera variable usando innerHTML: " + a + "<br>");
alert("Contenido de la segunda variable usando innerText: " + b + "<br>");
alert("Contenido de la tercera variable usando textContent: " + c + "<br>");

//Carga el contenido del segundo div y muéstralo por pantalla

let division2 = document.getElementById("d2").innerHTML;
document.write("Contenido de la segunda división:" + division2 + "<br>");

//Todos los párrafos en un array
//Muestra array y número de párrafos cargados 


let parrafos1 = document.querySelectorAll("p");
for(let i = 0; i < parrafos1.length; i++)
    {
        let par = parrafos1[i].innerHTML;
        document.write("Contenido del párrafo " + i + ": " + par + "<br>");
        document.write("Hay un total de "+ par.length + " caracteres en cada párrafo del array  <br>")
    }
    document.write("Hay un total de "+ parrafos1.length + " párrafos en el array  <br>");

//Guarda en el array “párrafos2”, todos los párrafos de clase “parr”.
//Muestra array y número de párrafos cargados 

let parrafos2= document.getElementsByClassName("parr");
for(let i = 0; i < parrafos2.length; i++)
    {
        let parr = parrafos2[i].innerHTML;
        document.write("Contenido de párrafos2 en la posición" + i + ": " + parr + "<br>");
    }
    document.write("Hay un total de "+ parrafos2.length + " párrafos en el array  <br>");

//Carga en un array los elementos cuyo id empiece por "ele"
//Muestra cuántos elementos hay cuyo identificador empieza por “ele” y muéstralos 

let ele = document.querySelectorAll("[id ^= 'ele']");
document.write("Número de elementos en el array ele: " + ele.length + "<br>");
for(let i = 0; i < ele.length; i++)
    {
        let empiezaEle = ele[i].innerHTML;
        document.write("Contenido del array \"ele\" en la posición " + i + ": " + empiezaEle + "<br>");
    }

//Carga en un array todos los p que tengan como hermano una ul. ¿Cuántos son? Muéstralos  

let hermanos = document.querySelectorAll("ul~p");
    document.write("Número de elementos en el array hermanos: " + hermanos.length + "<br>");
    for(let i = 0; i < hermanos.length; i++)
    {
        let bro = hermanos[i].innerHTML;
        document.write("Contenido del array \"hermanos\" en la posición " + i + ": " + bro + "<br>");
    }
    

//Carga en una variable y muestra el primer p del primer div usando selector jerárquico 

let primerP= document.querySelector("#d1 p").innerHTML;
document.write("Primer párrafo de la primera división: "+primerP+"<br>");



