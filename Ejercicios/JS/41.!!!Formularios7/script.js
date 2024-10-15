function precioFinal1() {
    let seleccion = document.getElementById("pizzas");
    let precio = parseFloat(seleccion.value);
    let cantidad = parseInt(document.getElementById("cantidad1").value) || 0; // Asegúrate de que sea un número
    let total = precio * cantidad;

    if (precio != "" && cantidad != "") {
        document.getElementById("precio1").value = total.toFixed(2);

    } else {
        document.getElementById("precio1").value = "";

    }
}

function precioFinal2() {
    let seleccion = document.getElementById("complementos");
    let precio = parseFloat(seleccion.value);
    let cantidad = parseInt(document.getElementById("cantidad2").value) || 0; 
    let total = precio * cantidad;

    if (precio != "" && cantidad != "") {
        document.getElementById("precio2").value = total.toFixed(2);

    } else {
        document.getElementById("precio2").value = "";

    }
}

function precioFinal3() {
    let seleccion = document.getElementById("bebidas");
    let precio = parseFloat(seleccion.value);
    let cantidad = parseInt(document.getElementById("cantidad3").value) || 0; 
    let total = precio * cantidad;

    if (precio != "" && cantidad != "") {
        document.getElementById("precio3").value = total.toFixed(2);

    } else {
        document.getElementById("precio3").value = "";

    }
}

function precioFinal4() {
    let seleccion = document.getElementById("postres");
    let precio = parseFloat(seleccion.value);
    let cantidad = parseInt(document.getElementById("cantidad4").value) || 0; 
    let total = precio * cantidad;

    if (precio != "" && cantidad != "") {
        document.getElementById("precio4").value = total.toFixed(2);

    } else {
        document.getElementById("precio4").value = "";

    }
}


//Concatenar pedido y cantidad en el id="pedido"
//Cocacola x2
//Barbacoa x1  etc tc 



//Calcular Total 
function totalPagar() {
    let total = 0;

    total += parseFloat(document.getElementById("precio1").value) || 0;
    total += parseFloat(document.getElementById("precio2").value) || 0;
    total += parseFloat(document.getElementById("precio3").value) || 0;
    total += parseFloat(document.getElementById("precio4").value) || 0;

    document.getElementById("precio5").value = total.toFixed(2);
}

//Botón de "nuevo pedido" que sea reset, lo subirá Ángel en la página ya hecho 







