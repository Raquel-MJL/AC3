const parrafo = document.getElementById('miParrafo');


//Usando un manejador como atributo
/* 
function cambiarEstilo(){ //Llamando a la función en el p 
    parrafo.style.cssText = `
        font-size: 30px;
        letter-spacing: 12px;
        font-weight: bold;
        color: #28a745; 
    `;
} */



//Usando un manejador semántico sobre el elemento

    function cambiarEstilo(){ 
        parrafo.style.cssText = `
            font-size: 30px;
            letter-spacing: 12px;
            font-weight: bold;
            color: #28a745; 
        `;
        
    }
    parrafo.onclick=cambiarEstilo; //Sin paréntesis 
     
    //Usando addEventListener 
/*
    parrafo.addEventListener('click', () => {
        parrafo.style.fontSize = '30px';
        parrafo.style.letterSpacing = '12px';
        parrafo.style.fontWeight = 'bold';
        parrafo.style.color = '#28a745'; 
    }); */



    //Ejercicio 2 
    const h1= document.getElementById("h1");
    function cambiarH1(){
        h1.style.cssText=`
        color: grey;
        text-decoration:underline;
        text-transform:uppercase;
        font-family: verdana
        `;
    }
    h1.addEventListener('mouseover',cambiarH1);

    function devolverH1(){
        h1.style.cssText=`
        color: initial;
        text-decoration:none;
        text-transform:none;
        font-family: initial;
        `;
    }
    h1.addEventListener('mouseout',devolverH1);


    //Ejercicio 3
    const h2=document.getElementById("h2");
    function cambiarH2() {
        h2.style.cssText = `
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5); /* Sombreado */
            text-transform: uppercase;
        `;
    }
    
    h2.addEventListener('mouseover', cambiarH2);
    
    function devolverH2() {
        h2.style.cssText = `
            text-shadow: none; /* Sin sombreado */
            text-transform: none;
        `;
    }
    
    h2.addEventListener('mouseout', devolverH2);

   




