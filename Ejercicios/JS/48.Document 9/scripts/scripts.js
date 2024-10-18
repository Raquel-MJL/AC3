function mostrar() {
    // Mostrar el texto oculto
    document.getElementById('mas-texto').style.display = 'inline';
    // Hacer desaparecer el botón
    document.getElementById('boton1').style.display = 'none';
}

/*
 //Misma función pero accediendo a los selectores de CSS con querySelector 
    function mostrar() {
        // Mostrar el texto oculto usando selectores
        document.querySelector('.oculto').style.display = 'inline';
        // Hacer desaparecer el botón
        document.querySelector('#boton1').style.display = 'none';
    } */
