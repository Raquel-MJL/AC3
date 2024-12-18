/* https://es.stackoverflow.com/questions/194527/generar-un-archivo-json-desde-php


JSON → Formato de texto ligero para almacenar datos y comunicarlos entre programas. 
Archivos.json 
Para acceder a sus datos debe ser convertido a un objeto nativo de JS y cuenta con la clase JSON. 
Es independiente de cualquier lenguaje de programación.
Se han desarrollado API’s para distintos lenguajes de programación que permiten analizar, procesar y
transformar este tipo de archivos.
Normativa y estandarización publicada por IEFT y ECMA https://www.json.org

Estructura de un archivo JSON → Colección de pares clave (keys) / valor (value)
Claves: Strings que equivalen a las propiedades de cualquier objeto. ""
Valor/es: Dato asociado a dicha propiedad. 
    V Arrays
    V Objetos.
    V Cadenas.
    V Números.
    V Enteros.
    V Decimales.
    V Booleanos.
    V Nulos.

    X Expresiones regulares (RegExp).
    X Funciones (function).
    X Objetos Date.
    X Otros.


Creación de un archivo JSON → {"Usuario": "Rosa", "Contraseña": 1234}
Vacío{}


Sintaxis:
o El contenido de un objeto JSON se incluye dentro de llaves.
o Cada para clave/valor termina en una coma.
o Las propiedades del objeto (claves), se encierran entre comillas dobles.
o Las cadenas o textos se escriben ente comilla dobles.
o Los números, valores booleanos y el valor null se escriben sin comillas.
o Los arrays incluyen sus datos encerrados entre corchetes.
o Los objetos incluyen todo su contenido entre llaves anidado al objeto JSON principal.
o Dentro de un objeto JSON no se pueden incluir comentarios (Variantes de JSON, como JSON5 si los permiten).
o JSONLint, o la extensión Fix JSON para Visual Studio Code, permiten corregir errores en objetos JSON.

• Sintaxis:
"clave o propiedad": "dato o valor", → Cadenas.
"clave o propiedad": dato o valor, → Números, booleanos o null.
"clave o propiedad": ["dato o valor 1", "dato o valor 2", …, "dato o valor N"], → Arrays.
"clave o propiedad": {"clave o propiedad": "dato o valor 1", "clave o propiedad": "dato o valor 2", …, "clave o propiedad": "dato o valor N"}, → Objeto.

Ejemplo: Array con diversos tipos

{
"teléfono":"1234567890"
} → String Una cadena, una propiedad.

{
"nombre_producto": "Boligrafo",
"color": "Azul",
"precio": 0.60,
"código":null
} → Varios tipos de datos, varias propiedades.

{
"plataforma":"Steam",
"usuario1":
{
"nombre": "Juan",
"contraseña":"1234"
}
} → Dos propiedades, siendo una un objeto con 2 propiedades.

{
"plataforma":"Steam",
"usuario1": ["nombre": "Juan","contraseña":"1234"]
} → Dos propiedades, siendo una de ellas un array con 2 propiedades.

{
"plataforma":"Steam",
"usuario1":
{
"nombre": "Juan",
"contraseña":"1234"
}
"usuario2":
{
"nombre": "Eva",
"contraseña":"4321"
}
} → Tres propiedades, siendo objetos dos de ellas con sus propiedades.
o {
"plataforma":"Steam",
"usuario1":
{
"nombre": "Juan",
"contraseña":"1234",
"juegos": ["Fallout 4", "Metro Exodus", "Alien
Isolation"]
}
} → Dos propiedades, siendo una de ellas un objeto que incluye 3
propiedades entre las que hay un array.


Minificación → Reducir el tamaño de un archivo para conseguir una mayor velocidad.
    Se eliminan los espacios, saltos de línea, sangrías, tabulaciones y comentarios.
    Así se consigue un archivo que, en muchos casos, es de una sola línea.
    Ventajas: Menos espacio, menos consumo de ancho de banda, lectura rápida de los programas
    Desventajas: Más complejos de leer para un humano, no incluye comentarios y errores son más difíciles de depurar. 
    Ejemplo: 
    Contenido normal.
        {
         "DNI":"123456789A",
         "nombre":"Rosa",
         "password":"abcd"
        }
    Contenido minificado.
        {"DNI":"123456789A","nombre":"Rosa","password":"abcd"}

JSON Y JAVASCRIPT
Para usar JSON en JS hay que convertirlo a objeto y a la inversa. 
Codificación → JSON.stringify(objeto);
    JSON.stringify(objeto, propiedades);
    JSON.stringify(objeto, propiedades, número de líneas);
        objeto = Nombre del objeto a convertir a JSON.
        propiedades = Nombre de las propiedades con su valor que se quieren incluir en el JSON.
            [propiedad 1, propiedad2, …, propiedad N] → Array de propiedades y sus valores
            [] → Array vacío, el objeto JSON aparecerá vacío 
            null → Muestra todas las propiedades incluidas en el objeto JavaScript.
        nº líneas = Muestra el contenido del JSON no minificado. 

Ejemplo:
    Objeto sin funciones:
        let cliente = {codigo: "23AZ4F", nombre:"Ana"}; → Creación objeto literal cliente
        let cadena_cliente = JSON.stringify(cliente); → Conversión del objeto a cadena JSON cargada en la variable cadena_cliente.
        document.write(cadena_cliente); → Se muestra el objeto cliente convertido a una cadena JSON.

    Objeto con funciones:
        let usuario = {
            nombre:" Eugenia",
            contraseña: "1234",
            saludo: function () {
             return "Hola!";
        },
        }; → Creación del objeto literal usuario.
        let persona = JSON.stringify(usuario); → Conversión del objeto usuario en una cadena JSON cargada en la variable persona.
        document.write(persona); → Muestra las propiedades de objeto usuario convertido en una cadena JSON, sin incluir la función saludo.

    Objeto con propiedades a mostrar.
        let cliente = {codigo: "23AZ4F", nombre:"Ana"}; → Creación del objeto literal cliente.
        let cadena_cliente = JSON.stringify(cliente, ["codigo"]); → Conversión del objeto cliente en una cadena JSON en cadena_cliente, que incluye nada más que la propiedad codigo.
        document.write(cadena_cliente); → Se muestra únicamente codigo del objeto cliente convertido a una cadena JSON.

    Objeto con propiedades a mostrar en varias líneas.
        let cliente = {codigo: "23AZ4F", nombre:"Ana"}; → Creación del objeto literal cliente.
        let cadena_cliente = JSON.stringify(cliente, null, 2); → Conversión del objeto cliente en una cadena JSON cargada en la variable cadena_cliente, que mostrará todas sus propiedades en 2 líneas distintas.
        console.log(cadena_cliente); → Se muestra el contenido del objeto cliente convertido en una cadena JSON, en 2 líneas distintas.

Decodificación o parsear .parse() → Conversión de JSON a objeto 
Analizar la cadena y convertirla en objeto con la información estructurada de forma correcta. 
    JSON.parse(cadena o string);

    let moviles = '{"marca": "LG", "modelo": "G3", "precio": 300.00}'; → Cadena JSON en una variable
    let movil = JSON.parse(moviles); → conversión de la cadena JSON a objeto móvil
    document.write ("Marca: " + móvil.marca); → Acceso a la propiedad marca a través del operador punto (.) para objetos, que devuelve el dato "LG".


JSON Y PHP.
Hay que codificarlo y decodificarlo igual que con JS. 
Codificación: Pasamos de objeto o array de php a JSON con la función json_encode().

json_encode(objeto o array, máscara, profundidad);

    máscara → Constantes que modifican la salida del objeto creado mostrando caracteres de escape, valores Unicode o hexadecimales, etc
        JSON_HEX_TAG → Los caracteres < y > se convierten a \u003C y \u003E respectivamente.
        JSON_HEX_APOS → Las comillas simples (') se convierten a \u0027.
        JSON_HEX_QUOT → Las comillas dobles (") se convierten a \u0022.
        JSON_HEX_AMP → El carácter & se convierte a \u0026.
        JSON_UNESCAPED_UNICODE → Codifica caracteres Unicode.
        JSON_FORCE_OBJECT → Devuelve un objeto en vez de un array cuando se usa un array no asociativo. Útil cuando se espera un objeto y el array está vacío.
    profundidad → Nivel de anidamiento hasta la conversión indicado con un nº entero. 

    Ejemplos: 
    Array Asociativo
        $cliente = array(codigo: "23AZ4F", nombre:"Ana"}) → Creación del array asociativo $cliente.
        $cadena_cliente = echo json_encode($cliente); → Conversión del array $cliente en una cadena JSON almacenada en $cadena_cliente.
        echo $cadena_cliente; → Se muestra la variable $cliente convertido a una cadena JSON.
        echo json_encode($cliente); → Conversión del array $cliente en una cadena JSON y mostrada con echo.

    Objeto con funciones 
        class Usuario {nombre="", contraseña:"", public function getNombre() {return $this->nombre;}};
        $usuario1 = new Usuario(); → Creación del objeto
        $usuario1.
        $usuario1->nombre = "Eugenia";
        $persona1= json_encode($usuario1); → Conversión del objeto $usuario1 en una cadena JSON cargada en la variable $persona1.
        echo $persona1; → Muestra las propiedades del objeto $usuario1 convertido en una cadena JSON, sin incluir la función getNombre().

Decodificación: Convertir JSON en objeto o array con el métofo json_decode(). Valida mientras decodifica.
json.decode (string, tipo de conversión, profundidad);
    string → Nombre JSON a convertir
    tipo de conversión → boolean false(objeto) true(array asociativo)
    profundidad → Nivel de anidamiento (nº entero)

Ejemplo:

    Creación de un objeto:
    $moviles = '{"marca": "LG", "modelo": "G3", "precio":300.00}'; → Cadena JSON cargada en una variable.
    $movil = json_decode($moviles); → Conversión de la cadena JSON cargada en la variable móviles en el objeto móvil.
    echo "Marca: " . $movil->marca; → Acceso a la propiedad marca a través del operador flecha (->) para objetos, que devuelve el dato "LG".

    Creación de un array asociativo:
    $moviles = '{"marca": "LG", "modelo": "G3", "precio":300.00}'; → Cadena JSON cargada en una variable.
    $movil = json_decode ($moviles, true); → Conversión de la cadena JSON cargada en la variable móviles en el objeto móvil.
    echo "Marca: " . $movil["marca"]; → Acceso a la propiedad marca a través de los corchetes [] para índices claves de arrays, siendo el resultado el dato "LG".

Validación con json_validate() se puede comprobar si el JSON es válido sin decodificar. Devuelve true o false. 
json.validate (string, profundidad, caracteres inválidos);
    $numeros = '{"uno": 1, "dos": 2}';
    $valido = json_validate($numeros);

Errores 

json_last_error() → Devuelve un entero que corresponde con una constante predefinida e identifca el último error. 

    ▪ Algunos tipos de errores:
    • JSON_ERROR_NONE.
    • JSON_ERROR_DEPTH.
    • JSON_ERROR_STATE_MISMATCH.
    • JSON_ERROR_CTRL_CHAR.
    • JSON_ERROR_SYNTAX.
    • JSON_ERROR_UTF8.

    Ejemplo: 
    $movil = json_decode($moviles);
    $error = json_last_error($movil);
    echo $error; → Devolverá verdadero o falso si se produce,

json_last_error_msg() → Devuelve un mensaje que identifica el último error producido.
    Ejemplo: 
    $movil = json_decode_msg($moviles);
    $mensaje_error = json_last_error_msg($movil);
    echo $mensaje_error; → Devolverá un texto o mensaje si se produce, o no, un error en la decodificación.

*/