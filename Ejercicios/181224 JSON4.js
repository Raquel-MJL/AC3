// Convertir el objeto JSON en un array de JavaScript
let planetas = ["Mercurio", "Venus", "Tierra", "Marte", "Júpiter", "Saturno", "Neptuno", "Urano"];

// 1. Mostrar solo los planetas rocosos (Mercurio, Venus, Tierra, Marte)
let planetasRocosos = ["Mercurio", "Venus", "Tierra", "Marte"];
console.log("Planetas Rocosos:");
console.log(planetasRocosos);

// 2. Muestrear todos los planetas con un bucle for ... in
console.log("Todos los planetas usando for...in:");
for (let indice in planetas) {
    console.log(planetas[indice]);
}

// 3. Mostrar todos los planetas ordenados alfabéticamente
let planetasOrdenados = [...planetas].sort();
console.log("Planetas ordenados alfabéticamente:");
console.log(planetasOrdenados);
