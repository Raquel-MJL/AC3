function actualizar(){

    let titulo = document.getElementById("t1"); //Añadir texto al título 
    let fraseNueva = document.createTextNode(" de informática");
    titulo.appendChild(fraseNueva); 

    let barra = document.getElementById("barraNav"); //Incluir enlace entre otros 2
    let enlaceNuevo = document.createElement("a");
    enlaceNuevo.href="#";
    enlaceNuevo.textContent = "Productos";
    let enlacePosterior=barra.children[2];
    barra.insertBefore(enlaceNuevo, enlacePosterior);


    let botonFuera = document.getElementById("boton"); //Eliminar botón una vez pulsado
    botonFuera.remove();

    let duplicadoMoviles=document.getElementById("l6"); //Eliminar repetido
    duplicadoMoviles.remove();

    let duplicadoDiscos=document.getElementById("l11"); //Eliminar repetido
    duplicadoDiscos.remove();

    let lista=document.getElementById("lista-uno"); //Inserta categoría 
    let portatiles = document.createElement("li");
    portatiles.textContent="Portátiles";
    let opcionSiguiente1=lista.children[1];
    lista.insertBefore(portatiles,opcionSiguiente1);

    let monitores = document.createElement("li"); //Inserta entremedias 
    monitores.textContent="Monitores";
    let opcionSiguiente2=lista.children[3];
    lista.insertBefore(monitores,opcionSiguiente2);

    let equipos = document.createElement("li"); //Inserta entremedias  
    equipos.textContent="Equipos Multifunción";
    let opcionSiguiente3=lista.children[8];
    lista.insertBefore(equipos,opcionSiguiente3);

    let memorias = document.createElement("li"); //Inserta al final 
    memorias.textContent="Memorias RAM";
    lista.appendChild(memorias);

    let webcam = document.createElement("li"); //Inserta al final 
    webcam.textContent="Webcams";
    lista.appendChild(webcam);

    let imagenVieja = document.getElementById("imgMulti"); //Cambia imagen por otra 
    let imagenNueva= document.createElement("img");
    imagenNueva.src="./imagenes/moviles.jpg";
    let contenedor = document.getElementById("s2"); 
    contenedor.replaceChild(imagenNueva, imagenVieja);

    let atributo = document.createAttribute("alt"); //Añadir atributo alternativo a imagen nueva
    atributo.value = "Imagen de varios móviles"; 
    imagenNueva.setAttributeNode(atributo); 

    let footer=document.getElementById("footer");
    let formasPago = document.createElement("a");
    let protDatos = document.getElementById("af1");
    formasPago.textContent="Formas de Pago";
    formasPago.href="#";
    footer.insertBefore(formasPago,protDatos);


}
