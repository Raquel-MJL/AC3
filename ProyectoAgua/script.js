
//Modificación intervalos

function actualizarCaudal(){
    var caudalActualizado=(Math.random() * 10).toFixed(2);
    getelementByID('caudal')
    caudal.textContent=`Caudal: ${caudalActualizado} L/min`
}


// Actualizar caudal con intervalo

function actualizarCaudal() {
    document.querySelectorAll('.toggleButton').forEach(function(button) {
        if (button.classList.contains('btn-success')) {
            let caudalElement = button.closest('div').querySelector('.caudal');
            if (caudalElement) {
                caudalElement.textContent = 'Caudal: ' + obtenerCaudalAleatorio() + ' L/min';
            }
        }
    });
}

document.addEventListener('click', function() {
    setInterval(actualizarCaudal, 3000);
}); 




