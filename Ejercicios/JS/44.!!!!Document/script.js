//Ejercicio 1

/*
Ejercicio 1.
• Carga en un array todos los animales.
• ¿Cuántos animales hay?
• Muestra por pantalla sus nombres tal como aparecen colocados en la lista. Para ello,
usa un bucle for.
• Ahora, sin bucle for, muestra el nombre de los animales en orden inverso al de la lista.
• Crea el array “animalesCopia” y copia en él todos los animales.
• Muestra, ordenado alfabéticamente, el contenido del array “animalesCopia”.
• En las 2 últimas salidas por pantalla de datos, éstos deben aparecer separados entre sí
por una coma seguida de un espacio en blanco. */

let animales=document.querySelectorAll("ul li").innerHTML;

document.write("Hay "+animales.length + " animales.<br>");

for (i=0;i<animales.length;i++){
    let animalesContent=animales[i].innerHTML;
    document.write("El contenido de la posición " +i+ " es: "+animalesContent+"<br>");
}

document.write("Animales en orden inverso: " + animales.reverse().join(", ") + "<br>");

let animalesCopia = document.write("Array copiado : "+animales.slice());
let animalesString = animalesCopia.join(", ");

for (i=0;i<animalesCopia.length;i++){
    document.write("El contenido de la posición " +i+ " es: "+animalesString.sort().join()+"<br>");
}


//Ejercicio 2

/*
Ejercicio 2. 
• Crea el array “salvajes” y carga en él todos los animales salvajes. 
• Crea el array “domésticos” y carga en él todos los animales domésticos. 
• ¿Cuántos animales salvajes hay? 
• ¿Cuántos animales domésticos hay? 
• Mostrar los nombres de los animales de ambos Arrays ordenados alfabéticamente y 
separados entre sí por una coma y un espacio en blanco. 
*/

let salvajes = document.getElementsByClassName("sal").innerHTML;
let domesticos = document.getElementsByClassName("dom").innerHTML;
document.write("Hay: "+salvajes.length + "animales salvajes.<br>");
document-write("Hay: "+domesticos.length+ "animales domésticos.<br>");
for(i=0;i<salvajes.length;i++){
    salv=salvajes[i].innerHTML;
    document.write(i+"."+salv.join(", ").sort());
}


//Ejercicio 3. 
/*
• Carga en una variable el elemento de la lista cuyo identificador termine en un 9 
usando selectores CSS. 
• Muestra cual es por pantalla. 
• Carga en un array todos los elementos de la página web cuyo identificador termine en 
un 2 usando selectores CSS. 
• ¿Cuántos elementos hay? 
• Muéstralos por pantalla usando un bucle for. 
• Carga en un array todos los elementos pares de la lista usando selectores CSS. 
• ¿Cuántos elementos hay? 
• Muéstralos por pantalla separados entre sí por una coma y un espacio en blanco.*/ 

let ej3=document.querySelector("[id $= '9']")

//Ejercicio 4. 
/*Carga en un array todos los elementos de la página web cuyo identificador termine en 
un 1 sin usar selectores CSS. 
• ¿Cuántos elementos hay? 
• Muéstralos por pantalla separados entre sí por una coma y un espacio en blanco.
*/