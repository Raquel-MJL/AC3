			
		/* Script para hacer cálculos en el formulario 8.*/	
			
        function Calcular()
        {
             let a = parseFloat(document.getElementById("uno").value);
             let b = parseFloat(document.getElementById("dos").value);
             let c = parseFloat(document.getElementById("tres").value);
             let operaciones = "";
             let lista = document.getElementById("lista").options;
             let seleccion;
         
            for(let i = 0; i < lista.length; i++)
            {
            
               if (lista[i].selected == true )
               {
                   seleccion = lista[i].value;
           
                   if (seleccion == "sum")
                       {
                           let suma = a+b+c;
                           document.getElementById("s").innerHTML = suma.toFixed(2);
                           operaciones = operaciones + "\n" + lista[i].text + ".";
                       }
                   
                   if (seleccion == "res")
                       {
                           let resta = a-b-c;
                           document.getElementById("r").innerHTML  = resta.toFixed(2);
                           operaciones = operaciones + "\n" + lista[i].text + ".";
                       }
                   
                   if (seleccion == "mul")
                       {
                           let multiplicacion = a*b*c;
                           document.getElementById("m").innerHTML  = multiplicacion.toFixed(2);
                           operaciones = operaciones + "\n" + lista[i].text + ".";
                       }
                   
                   if (seleccion == "div")
                       {
                           let division = a/b/c;
                           document.getElementById("d").innerHTML  = division.toFixed(2);
                           operaciones = operaciones + "\n" + lista[i].text + ".";
                       } 
                   
                   if (seleccion == "spot")		
                       {
                           let potencia = (a+b+c)**2;
                           document.getElementById("sp").innerHTML  = potencia.toFixed(2);
                           operaciones = operaciones + "\n" + lista[i].text + ".";
                       } 
                   
               }
               
             }
             document.getElementById("area").value = operaciones.substring(1);
        }
         
         function Limpiar()
         {
           for(let i = 0; i < lista.length; i++)
            {
            
               lista[i].selected = false; 
            
            } // Quitar las opciones seleccionadas tras limpiar.
        
           document.getElementById("uno").value = null;
           document.getElementById("dos").value = null;
           document.getElementById("tres").value = null;
           
           document.getElementById("area").value = null;
                       
           document.getElementById("s").innerHTML = null;
           document.getElementById("r").innerHTML = null;
           document.getElementById("m").innerHTML = null;
           document.getElementById("d").innerHTML = null;
           document.getElementById("sp").innerHTML = null;
         } 