const inputs = document.querySelectorAll('input[type="text"]');
const h2texto = document.getElementById('alerta');

function resaltar(input){
    input.style.backgroundColor = 'lightgray';
    input.value="";

}

function alDejar(input){
    if (input.value !== ""){
        input.style.backgroundColor= "lightblue";
        h2texto.textContent="";

    }else {
        h2texto.textContent="Debe introducir datos";

    }

}
