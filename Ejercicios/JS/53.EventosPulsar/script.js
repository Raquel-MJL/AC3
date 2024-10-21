const maxLength=150;
var texto = document.getElementById("t1");
var restantes = document.getElementById("charCount");

function pulsarTecla() //Compara caracteres máximos con el largo de lo introducido en el input 
		  {
			let total = texto.value.length;
            let calculo= maxLength - total;
			restantes.textContent = calculo; 
		
		  }

texto.addEventListener("keydown",pulsarTecla); //keydown → Al pulsar 




