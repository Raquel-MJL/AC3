function masElementos1(){ //Añadir con createElement y appendChild

    let lista = document.getElementById("lista");
    let elementos = lista.getElementsByTagName("li").length; 
    let elementoNuevo= document.createElement("li"); 
    elementoNuevo.innerHTML = "Texto "+(elementos+1);
    lista.appendChild(elementoNuevo);     

}


function masElementos2(){ //Usar la propiedad innerHTML para añadir nuevo contenido a la lista. 

    let lista=document.getElementById("lista");
    let elementos = lista.getElementsByTagName("li").length;
    let elementoNuevo = "<li>Texto "+(elementos+1)+"</li>";
    lista.innerHTML += elementoNuevo;

}









 

