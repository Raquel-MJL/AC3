<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!--
----------||BASES DE DATOS||----------

Conjunto de información organizada sistemáticamente, no redundante y referida a un
tema determinado.
    → Relación: Elemento básico, se representa como una tabla. 
    → Atributos: Cada propiedad de la relación (columnas).
    → Tuplas: Filas o registros. Contienen los valores. 
    → Grado: Número de atributos, campos o columnas que tiene la relación. 
    → Cardinalidad: Número de duplas, filas o registros. 
    → Cabecera: Define estructura de la relación. Primera fila que contiene los atributos. 
    → Cuerpo: Conjunto de tuplas de la relación. 
    → Dominio: Conjunto de valores homogéneos (del mismo tipo) y atómicos (indivisibles) que puede tomar un atributo. 
        

----------||MODELO DE DATOS Y MODELO RELACIONAL||----------


///Tipos de relaciones\\\

Persistentes: Su esquema relacional permanece en la base de datos, deben ser borradas explícitamente. 
    → Relación Base: Existen por sí mismas, no son derivadas y tienen contenido propio. 
    → Vista: Derivadas. Se definen dando nombre a una expresión de consulta. No almacena datos. 
    → Instantánea: Derivadas, tienen sus propios datos resultado de una consulta o de almacenar otra relación 
    pero este contenido es estático (muestra los datos tal y como estaban cuando se creó) 
    Si se hace un cambio en la relación base, la instantánea no se actualizará.

Temporales: Tienen contenido pero desaparecen en un determinado momento sin la eliminación explícita del usuario.

///Restricciones\\\

Estructura u ocurrencia no permitida en una relación.
    → Inherentes:Impuestas por el modelo relacional, como:
        → No puede haber tuplas duplicadas.
        → El orden de las tuplas y de los atributos no es significativo.
        → Cada atributo sólo puede contener un único valor.
        → Toda relación debe estar obligatoriamente normalizada
        → Ningún atributo que sea la clave primaria puede tomar un valor nulo.
    
    → Semánticas o de significado: El modelo relacional ofrece a los usuarios para que puedan
    reflejar fielmente, en el esquema de la relación, el significado del
    mundo real. Algunas restricciones semánticas son:
        → Clave primaria (PK): (Identificador de cada tupla). No admite duplicados ni nulos.
        → Unicidad (UNIQUE): Para que los valores de un atributo o conjunto de
        atributos no puedan repetirse en una relación.
        → Obligatoriedad (NOT NULL): Para que no tengan valores nulos. Imprescindible tener un valor.

    → Integridad referencial (FK): Asegura que las tuplas de tablas relacionadas sean válidas.
    Se activa al crear foreign key e impide que haya datos en la tabla secundaria que no existan en la ppal. 
    → De rechazo: Condiciones para insertar o utilizar datos. 
        → Verificación (CHECK): La restricción se impone sobre los atributos. 
        → Aserción (ASSERTION): Afectan a más de un elemento a la vez. 
        → Triggers: Se ejecuta sola al realizarse una operación.

///Claves\\\

    → Candidata: Conjunto de atributos que puede identificar cada tupla. Siempre hay una (los atributos)
    → Clave primaria: Candidata elegida como identificador único de las tuplas. 
    → Clave alternativa: No elegida como primaria pero puede identificar filas también. 
    → Clave simple: Un solo atributo
    → Clave compuesta: Varios atributos. 
    → Clave foránea: Externa, secundaria o ajena. Para relacionar tablas. 

///Transacciones\\\
Conjunto de operaciones que realiza un SGBD para llevar a cabo una unidad lógica de trabajo.

    → Indivisibles
    → Se usan en el acceso simultáneo a la misma información.
    → Garantizan la coherencia e integridad,os que se modifican quedan bloqueados para otros 
    usuarios hasta que la transacción no finaliza.
    → Hasta que no se termina es posible restaurar los datos a su estado inicial. Los
    cambios de los datos que se están manipulando serán visibles para otros
    usuarios al terminar la transacción. Existen transacciones que se validan
    automáticamente.

    ACID: Normas 
    Atomicidad → Cada transacción es una unidad que se da como un todo, si falla parte de ella, todo falla
    Consistencia → Debe llevar la base de datos de un estado válido a otro. 
    Aislamiento → Se ejecuta en aislamiento total e independiente de otra transacción.
    Durabilidad → Tras validarse una transacción esta es persistente, ya no se puede volver atrás.

    Estados: 
    → Activa: Cuando se inicia o ejecuta. 
    → Parcialmente comprometida: Después de ejecutar la última instrucción. 
    → Fallida: Asume la transacción cuando no se peude continuar la ejecución. 
    → Comprometida: Cuando se completa con éxito.
    → Abortada: Al retroceder en la transacción y restablecer la DB a n momento anterior al comienzo de la misma. 



            -→ Fallida     →   Abortada 
    Activa        ↑
            -→ Parcialmente →  Comprometida
               comprometida        



---------¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡PÁGINA 6 APUNTES !!!!!!!!!!!!!!!!!!!----------------


























-->
    
</body>
</html>