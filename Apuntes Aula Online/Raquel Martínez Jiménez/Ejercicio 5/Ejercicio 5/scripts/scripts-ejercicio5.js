//Mensaje alerta OnBlur
const inputs = document.querySelectorAll('input[type="text"]');
const h2 = document.getElementById("mensajeAlerta");

function valEntrada(input){
    if (input.value === ""){
        
        h2.textContent = "Campo obligatorio";
        h2.style.color = 'red'; 

    }else {
        h2.textContent="";
    }

}
for (let i = 0; i < inputs.length; i++) {
    inputs[i].addEventListener('blur', () => valEntrada(inputs[i]));
}



//Validación de datos

const patron=/^[A-Z][a-záéíóúü]*$/;
const patronMail= /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
const patronTel= /^[69]\d{8}$/;



function valNombre(){
    let nombre=document.getElementById("nombreId").value;
    let coincidencia=nombre.match(patron);
    if (!coincidencia){
        alert("El nombre introducido no es correcto. Revíselo");
    }
}

function valApellido1(){
    let apellido1=document.getElementById("apellido1Id").value;
    let coincidencia=apellido1.match(patron);
    if (!coincidencia){
        alert("El primer apellido introducido no es correcto. Revíselo");
    }
}

function valApellido2(){
    let apellido2=document.getElementById("apellido2Id").value;
    let coincidencia=apellido2.match(patron);
    if (!coincidencia){
        alert("El segundo apellido introducido no es correcto. Revíselo");
    }
}

function valCorreo(){
    let correo=document.getElementById("emailId").value;
    let coincidencia=correo.match(patronMail);
    if (!coincidencia){
        alert("El email introducido no es correcto. Revíselo");
    }
}

function valTelefono(){
    let telefono=document.getElementById("telefonoId").value;
    let coincidencia=telefono.match(patronTel);
    if (!coincidencia){
        alert("El teléfono introducido no es correcto. Revíselo");
    }

}

function validarTodo(){
    valNombre();
    valApellido1();
    valApellido2();
    valCorreo();
    valTelefono();    
}