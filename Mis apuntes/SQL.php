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
               
               

///Fallos típicos en bases de datos\\\

Transacciones

    → Error lógico: Datos que no se encuentran, entradas incorrectas, desbordamiento de memoria...
    → Error del sistema: El SGBD impide que las transacciones puedan ejecutarse normalmente.
    → Interbloqueo: Bloqueo permanente de procesos que no pueden avanzar porque dependen de otros. 

Caídas del sistema

    → Errores en el SO
    → En el software que gestiona la DB
    → Averías de hardware que provocan pérdida del contenido en la memoria volátil. 
    → Detención del sistema 

Técnicas para evitar caídas

    → Replicación de recursos y datos
    → Balanceo en el reparto de cargas
    → Uso de SAI (Sistemas de alimentación ininterrumpidas)

Fallos en los soportes de almacenamiento. 

    → Cuando falla la transferencia de datos del soporte al almacenamiento. 
    → Se puede solucionar eniendo buena política de copia de seguridad de datos. 

 Elementos de recuperación ante fallos lógicos que soportan los SGBD. 
    
    → Registro histórico, de transacciones, archivos de registro o log...
    Cada registro describe una única modificación y tienen una serie de atributos:
 
        ● Identificador de la transacción (de tipo numérico) 
        ● Indicador de elementos de datos 
        ● Valor anterior (como un punto de recuperación) 
        ● Valor nuevo. 

Punto de verificación, comprobación, sincronización o de revisión. 

    → Si falla se accede al registro histórico hasta  encontrar  una 
versión  estable  de  la  misma.  Si  habitualmente  vamos  guardando  puntos  de 
verificación se reduce el número de  registros del registro histórico que deben 
examinarse  tras  una  caída  del  sistema,  ya  que  al  establecer  un  punto  de 
comprobación  se  fuerza  a  que  todas  las  transacciones  hasta  ese  punto  se 
lleven a cabo.


///Reglas de Bases de Datos\\\

1984 Edgar  F.  Codd,  creador  de  del  Modelo  Relacional  publicó  las  12  Reglas

        0 → Un SGBD es relacional cuando gestiona las bases de datos usando solo sus capacidades relacionales.
        1 → Regla de la información: Los datos y metadatos se representan como valores en tablas.
        Con un musmo lenguaje se debe acceder a ambos. 
        2 → Acceso garantizado: Cualquier dato debe ser accesible indicando en qué tabla está, columna y fila. 
        3 → Tratamiento de null: Se debe disponer de valores nulos para representar información no aplicable. 
        4 → Catálogo dinámico en línea: Se debe usar modelo relacional y los metadatos se consultan usando el mismo lenguaje que para los datos normales.
        5 → Sublenguaje de datos: Debe  existir  al  menos  un  lenguaje  cuyas  sentencias  sean  expresables,  mediante  una 
        sintaxis bien definida, como cadenas de caracteres y que sea completo, soportando: 
            • Definición de datos y estructuras. 
            • Manipulación de datos. 
            • Restricciones de integridad. 
            • Control de datos. 
        Estos lenguajes, además de poder tener interfaces más amigables para hacer 
        consultas,  etc.,  deben  permitir  hacerlo  todo  de  manera  textual.  Un  lenguaje  que 
        cumple esto en gran medida es el SQL.
        6 → Actualización vistas: Todas las vistas actualizables se pueden actualizar también por sistema. 
        7 → Inserción, actualización y borrado de alto nivel: No sólo un único registro se verá afectado sino varios. 
        8 → Independencia física de datos: Aunque cambie el esquema físico, el conceptual no debe cambiar. 
        La forma de almacenar datos no debe influir en su manipulación. 
        9 → Independencia lógica de datos: Aunque se modifique el esquema conceptual, el externo no debe verse afectado.
        10 → Independencia de integridad: Debe poder definir limitantes de integridad que se almacenan en la DB. 
            se almacenan en la base de datos. 
            Restricciones inherentes al modelo relacional: 
            • Integridad de Entidad: Toda tabla debe tener una clave primaria para 
            identificar inequívocamente cada registro. 
            • Integridad de Dominio: Toda columna de una tabla contendrá exclusivamente 
            un conjunto de valores válidos. 
            • Integridad Referencial: Hay que asegurar que los registros de tablas 
            relacionadas sean válidos, para ello se usan claves externas o foráneas  
        11 → Independencia de distribución: Las mismas órdenes y programas deben ejecutarse en bases de datos centralizadas y distribuidas. 
        12 → No subversión: Si un sistema relacional usa un lenguaje de bajo nivel, no puede ser usado para saltarse (subvertir) las reglas de los de alto nivel. 
 
///Diseño de bases de datos relacionales\\\

El proceso de creación de una base de datos relacional consta de varias fases:

→ Análisis de requisitos: Recopilación de información sobre el contenido y uso previsto de la base de datos.
→ Diseño conceptual: Creación del esquema conceptual de la base de datos utilizando el modelo de Entidad-Relación (E-R), sin depender del sistema gestor de base de datos.
→ Elección de sistema gestor de base de datos: Selección del modelo de datos y del sistema gestor a utilizar.
→ Diseño lógico: Elaboración del esquema lógico basado en el esquema conceptual, adaptado al modelo del sistema gestor elegido.
→ Diseño físico: Creación de la base de datos mediante el lenguaje de definición de datos del sistema gestor.
→ Fase de uso: Gestión de los datos mediante el lenguaje de manipulación de datos.
→ Mantenimiento: Actualización, modificación o reparación de la base de datos según sea necesario.

///Modelos de datos\\\

Según nivel de abstracción: 
    → Nivel conceptual
    → Nivel lógico 
    → Nivel físico 

Según modelo teórico:
    → Red
    → Jerárquico
    → Relacional
    → Orientado a Objetos
    → Objeto-relacional 

///Tipos de BD\\\
    → Texto plano 
    → Hojas de cálculo (Excel)
    → B.D.Jerárquicas
    → B.D.Red 
    → B.D. relacionales. 
    → B.D. objeto-relacionales. 
    → Bases XML, bases que tienen datos semiestructurados. 
    → Bases No SQL. 
    → Otras B.D.: B.D. documentales, B.D. temporales, B.D. analíticas, etcétera.





        ---------¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡PÁGINA 6 APUNTES !!!!!!!!!!!!!!!!!!!----------------


























-->

</body>

</html>