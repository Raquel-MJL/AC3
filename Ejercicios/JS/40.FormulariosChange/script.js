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








