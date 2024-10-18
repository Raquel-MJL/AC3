//document.getElementById("p0").innerHTML += "Terminología básica"; //Añade string

    
/*  var nuevoParrafo = document.createElement("p"); //Añade p nuevo y aplica estilo 
    nuevoParrafo.textContent = "Terminología básica"; 
    nuevoParrafo.style.backgroundColor = "green";
    var p0 = document.getElementById("p0");
    p0.parentNode.insertBefore(nuevoParrafo, p0.nextSibling);  //Ubicar la inserción 
    nuevoParrafo.setAttribute("id","p7"); */
    
/*  pOriginal= document.getElementById("p0"); //Sustituir p por otro con estilo 
    var nuevoParrafo = document.createElement("p");
    nuevoParrafo.textContent = "Éste no es el párrafo original"; 
    nuevoParrafo.style.backgroundColor = "blue";  
    let div1 = document.getElementById("d1"); 
    div1.replaceChild(nuevoParrafo, pOriginal);
    nuevoParrafo.setAttribute("id","p7"); 
 */

    //Ejercicio 2
    
    let parArr=Array.from(document.getElementsByTagName("p")); /*    
    for(i=0;i<parArr.length;i++){
        let parrafo = parArr[i];        
        parrafo.style.backgroundColor = "orange"; 
        parrafo.style.fontWeight = "bold"; 
        document.write(parrafo.textContent + "Fin del párrafo "+[i]+"<br>"); // Mostrar contenido
    } */

    /*
    for(i=0;i<parArr.length;i++){ //Sustituir párrafos 
        let parrafo = parArr[i]; 
        let fraseNueva = "Párrafo nuevo "+i;  
        let nuevoTexto =document.createTextNode(fraseNueva); 
        parrafo.innerHTML= "";    
        parrafo.appendChild(nuevoTexto); 
    }
        */

   
  
				
	//Ejercicio 3. Cuadro de diálogo confirm() para modificar el primer título.;
		
				let cTitulo = confirm("¿Quieres continuar? Si es así, se modificará el primer título");
				if (cTitulo == true)
				{
					document.getElementById("h1").innerHTML += " HTML, HTTP y URL.";
					document.getElementById("h1").style.cssText = "color:violet; font-family:'calibri';";
				} 
				else
				{
					document.getElementById("h1").innerHTML = "Este contenido está incompleto, se modificará en los próximos días";
					document.getElementById("h1").style.cssText = "font-style:italic; font-weight:bold; color:red; font-family:'comic sans ms';";
				}
		