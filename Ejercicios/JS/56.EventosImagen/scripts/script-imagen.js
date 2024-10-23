//Ejercicio 1 


    //Espera a que el contenido de la página se haya cargado completamente
    document.addEventListener('DOMContentLoaded', function() {
        // Selecciona la imagen original y la imagen activada
        const imagenOriginal = document.querySelector('#rosas-activacion img');
        const imagenActivada = 'imagenes/activada.jpg'; // Ruta de la imagen que se mostrará al pasar el ratón

        // Función para cambiar la imagen a 'activada.jpg' al pasar el ratón
        function mostrarImagenActivada() {
            imagenOriginal.src = imagenActivada; // Cambia la fuente de la imagen a 'activada.jpg'
        }

        // Función para volver a mostrar la imagen original al salir el ratón
        function mostrarImagenOriginal() {
            imagenOriginal.src = 'imagenes/atenuada.jpg'; // Cambia la fuente de la imagen de vuelta a 'atenuada.jpg'
        }

        // Añade un evento que escucha cuando el ratón entra en la imagen
        imagenOriginal.addEventListener('mouseover', mostrarImagenActivada);
        
        // Añade un evento que escucha cuando el ratón sale de la imagen
        imagenOriginal.addEventListener('mouseout', mostrarImagenOriginal);
    });


    //Ejercicio 2

    const iconos = document.querySelectorAll('#iconos-imagenes-cambiantes img');
    const iconosActivados = ['imagenes/cancelar.ico', 'imagenes/deshacer.ico', 'imagenes/flecha.ico'];
    // Función para cambiar los iconos al pasar el ratón
    iconos.forEach((icono, index) => {
        // Función que cambia el icono actual por el icono activado
        function mostrarIconoActivado() {
            icono.src = iconosActivados[index]; // Cambia la fuente al icono activado correspondiente
        }

        // Función que vuelve a mostrar el icono original
        function mostrarIconoOriginal() {
            icono.src = `${index === 0 ? 'imagenes/actualizar.ico' : index === 1 ? 'imagenes/check.ico' : 'imagenes/mas.ico'}`; // Cambia de vuelta al icono original
        }

        // Añade eventos a cada icono para manejar el mouseover y mouseout
        icono.addEventListener('mouseover', mostrarIconoActivado);
        icono.addEventListener('mouseout', mostrarIconoOriginal);
    });
    

