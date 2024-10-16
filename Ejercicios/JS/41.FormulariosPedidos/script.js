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

//Calcular Total 
function totalPagar() {
    let total = 0;

    // Precios de cada sección
    const pizzaSeleccion = document.getElementById("pizzas").options[document.getElementById("pizzas").selectedIndex].text;
    const compSeleccion = document.getElementById("complementos").options[document.getElementById("complementos").selectedIndex].text;
    const postreSeleccion = document.getElementById("postres").options[document.getElementById("postres").selectedIndex].text;
    const bebidaSeleccion = document.getElementById("bebidas").options[document.getElementById("bebidas").selectedIndex].text;

    // Cantidades
    const pizzaNum = document.f1.cant1.value || 0;
    const compNum = document.f2.cant2.value || 0;
    const postreNum = document.f3.cant3.value || 0;
    const bebidaNum = document.f4.cant4.value || 0;

    // Calcular el total
    total += parseFloat(document.getElementById("precio1").value) || 0;
    total += parseFloat(document.getElementById("precio2").value) || 0;
    total += parseFloat(document.getElementById("precio3").value) || 0;
    total += parseFloat(document.getElementById("precio4").value) || 0;

    // Actualizar el total en el campo correspondiente
    document.getElementById("precio5").value = total.toFixed(2);

    // Concatenar los pedidos
    let pedido = "";
    if (pizzaNum > 0) {
        pedido += pizzaSeleccion + " x " + pizzaNum + "\n";
    }
    if (compNum > 0) {
        pedido += compSeleccion + " x " + compNum + "\n";
    }
    if (postreNum > 0) {
        pedido += postreSeleccion + " x " + postreNum + "\n";
    }
    if (bebidaNum > 0) {
        pedido += bebidaSeleccion + " x " + bebidaNum + "\n";
    }

    // Actualizar el área de texto del pedido
    document.getElementById("pedido").innerHTML = pedido.trim(); // Usar innerHTML para mostrar los saltos de línea
}


//Reset 
function nuevoPedido() {
    const formularios = ["for1", "for2", "for3", "for4", "for5",];
    
    formularios.forEach(formularioId => {
        const formulario = document.getElementById(formularioId);
        if (formulario) {
            formulario.reset();
        }
    });
    document.getElementById("pedido").value = "";
}






