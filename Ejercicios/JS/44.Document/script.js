//Ejercicio 1.
		
			let animales = new Array();
			let animalesNodo = document.getElementsByTagName("li");
			document.write("Total de animales: " + animalesNodo.length + "<br>");
		
		// Cargar los elementos en el array posición por posición.
		
			animales[0] = animalesNodo[0].innerHTML;
			animales[1] = animalesNodo[1].innerHTML;
			animales[2] = animalesNodo[2].innerHTML;
			animales[3] = animalesNodo[3].innerHTML;
			animales[4] = animalesNodo[4].innerHTML;
			animales[5] = animalesNodo[5].innerHTML;
			animales[6] = animalesNodo[6].innerHTML;
			animales[7] = animalesNodo[7].innerHTML;
			animales[8] = animalesNodo[8].innerHTML;
			animales[9] = animalesNodo[9].innerHTML;
		
		// Cargar los elementos en el array con un bucle for.
		
			for(let i = 0; i < animalesNodo.length; i++)
			{
				document.write("Nombres de los animales: " + animalesNodo[i].innerHTML+ "<br>");
				animales[i] = animalesNodo[i].innerHTML;
			}
			document.write("<br>Nombres de los animales incluidos en el array animales en orden inverso: " + animales.reverse().join(", ") + "<br><br>");	
			let animalesCopia = animales.slice();
			document.write("Nombres de los animales incluidos en el array animalesCopia ordenados: " + animalesCopia.sort().join(", ") + "<br><br>");			
			
	
		
		//Ejercicio 2.
	
			let salvajes = new Array();
			let domesticos = new Array();
			let salvajesNodo = document.getElementsByClassName("sal");
			let domesticosNodo = document.getElementsByClassName("dom");
			document.write("Total animales salvajes: " + salvajesNodo.length + "<br><br>");
			document.write("Total de animales domésticos: " + domesticosNodo.length + "<br><br>");
			
			for(let i = 0; i < salvajesNodo.length; i++)
			{
		
				salvajes[i] = salvajesNodo[i].innerHTML;
				
			}
			for(let i = 0; i < domesticosNodo.length; i++)
			{
		
				domesticos[i] = domesticosNodo[i].innerHTML;
				
			}
			
			document.write("Animales salvajes ordenados: " + salvajes.sort().join(", ") + "<br><br>");	
			document.write("Animales domesticos ordenados: " + domesticos.sort().join(", ") + "<br><br>");
		
		//Ejercicio 3.

			let termina9 = document.querySelector("#ele9").innerHTML;
			document.write("Animal en la posición novena de la lista: " + termina9 + "<br><br>");
						
			let termina2 = document.querySelectorAll("[id $= '2']");
			//let termina2 = document.querySelectorAll("#ele2, #par2, #titulo2");
			
			document.write("Total de elementos cuyo identificador termina en un 2: " + termina2.length + "<br>");
			for(let i = 0; i < termina2.length; i++)
			{
		
				document.write("Los elementos cuyo identificador termina en un 2 son: " + termina2[i].innerHTML + "<br>");
								
			}
			
			let pares = new Array();;
			let paresNodo = document.querySelectorAll("div ul li:nth-of-type(even)");
			
			for(let i = 0; i < paresNodo.length; i++)
			{
		
				pares[i] = paresNodo[i].innerHTML;
								
			}
			document.write("<br>Animales en las posiciones pares de la lista: " + pares.join(", ") + "<br><br>");	
				
		//Ejercicio 4.
	
			let elemento1 = document.getElementById("par1").innerHTML;
			let elemento2	= document.getElementById("ele1").innerHTML;
			let elemento3	= document.getElementById("titulo1").innerHTML;
			let termina1 = new Array();
			
			termina1[0]=elemento1;
			termina1[1]=elemento2;
			termina1[2]=elemento3;
			
			document.write("Total de elementos cuyo identificador termina en un 1: " + termina1.length + "<br><br>");
			document.write("Los elementos cuyo identificador termina en un 1 son: " + termina1.join(", ") + "<br><br>");
			