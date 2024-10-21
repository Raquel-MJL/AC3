function comprobarNombre(){
    var nombre=document.getElementById("nombre").value;
    const patron = /^\w{5,30}$/i;
    var mensaje1=document.getElementById("alerta1");

    if (nombre.match(patron)){
        mensaje1.textContent="¡Formato de texto correcto! Los datos serán enviados.";

    }else{
        mensaje1.textContent="¡Formato de texto incorrecto! Escribe tu nombre de nuevo";
        nombre.value="";
    }
   
}

function datosEnviados(){
    
}


/*


• Cuando se pulse el botón Comprobar Nombre y el login escrito 
tenga el formato correcto, se añadirá debajo del formulario el 
texto Datos Enviados. 
• En caso contrario, el botón Comprobar Nombre no hará nada. 








▪ Formulario 2: 
• Si no se escribe nada en uno o en los dos campos de texto 
(Usuario  y  Contraseña),  debe  mostrase  un  mensaje 
emergente con el siguiente texto: 
o "Hay campos sin rellenar." 
• Por tanto, hay que comprobar si los campos están vacíos y 
no se ha introducido nada en ellos. 
• Todas las acciones a realizar para la comprobación se 
incluirán en la función comprobarVacios(). 
• El mensaje se mostrará al pulsar el botón Identificarse. 
• Utiliza un manejador de eventos para asociar al botón la 
ejecución de la función comprobarVacios(). 
• Si se introduce un nombre y una contraseña, mostrarlas en 
una  ventana  emergente  junto  con  un  texto  alusivo 
concatenado. 
• En dicha ventana emergente, deben aparecer nombre y 
contraseña en 2 líneas diferentes. 
*/