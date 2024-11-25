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





        ---------¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡PÁGINA 11 APUNTES !!!!!!!!!!!!!!!!!!!----------------
        ---------¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡SEGUIMOS EN 25 !!!!!!!!!!!!!!!!!!!----------------


///Normalización bases de datos\\\

Proceso que transforma datos complejos en una forma más simple, estable y fácil de manejar. 

Objetivos:
    → Reducir o eliminar redundancias de datos.
    → Eliminar anomalías de actualización (inserción, borrado y modificación).
    → Eliminar ambigüedades y simplificar dependencias entre atributos.
    → Lograr integridad y consistencia de los datos.

Ventajas:
    → Menor espacio ocupado en la base de datos.
    → Mejora la comprensión de datos complejos.
    → Facilita las consultas y la búsqueda de información.

Inconveniente: Creación de múltiples tablas que pueden complicar el manejo y generar pérdida de dependencias entre campos.

Anomalías por mal diseño:
    → Redundancia: Repetición de datos que aumenta el espacio y dificulta las búsquedas.
    → Modificación: Cambios en un valor repetido deben aplicarse a todas las tuplas, lo que puede causar inconsistencia si no se actualizan todas.
    → Borrado: Eliminar una tupla repetida puede resultar en pérdida de datos importantes.
    → Inserción: Puede ser imposible añadir nuevos datos debido a la ausencia de otros.

Solución anomalías: Las tablas se dividen en otras más pequeñas mediante la proyección de relaciones. 
El proceso de normalización utiliza formas normales (FN) y termina cuando se alcanza la forma normal objetivo o no es posible normalizar más.

Formas Normales Principales:
    → 1FN, 2FN y 3FN: Diseñadas por Codd.
    → FNBC (Forma Normal Boyce-Codd): Variante más estricta de la 3FN.
    → 4FN y 5FN: Diseñadas por Fagin. (Es raro llegar hasta aquí)
    → 6FN.
    → Forma Normal Clave/Dominio.

→   FORMAS NORMALES 1FN establece que los valores de los atributos deben ser atómicos, es decir, no pueden ser conjuntos de valores ni contener grupos repetitivos. 
    Se deben eliminar las redundancias y garantizar que cada campo contenga solo valores indivisibles. Esto se logra creando nuevos campos o separando los valores en diferentes tuplas 
    
    Dependencias: Relación entre atributos de una tabla donde un atributo (determinante) influye en otro (implicado).
    A → B (A determina a B, o B depende de A, lo que implica que al cambiar A, B siempre tendrá el mismo valor).

    Tipos de Dependencias:
        → Dependencia Funcional Mutua (Interdependencia o Reflexiva): Ocurre cuando A → B y B → A simultáneamente, lo que significa que A y B son claves candidatas. Ejemplo: Código_libro <-> ISBN.
        → Dependencia Transitiva: Si A → B y B → C, entonces A → C. Esto ocurre cuando un atributo depende indirectamente de otro. 
            Ejemplo: FECHA NACIMIENTO → EDAD → VOTAR, entonces FECHA NACIMIENTO → VOTAR.
        → Dependencia Completa: Se da cuando un atributo depende completamente de un conjunto de atributos y no de un subconjunto. 
            Ejemplo: DNI, CÓDIGO PROYECTO → HORAS.
        → Dependencia Parcial: Se presenta cuando un atributo depende solo de una parte del conjunto de atributos que lo determina. 
            Ejemplo: DNI → NOMBRE (solo depende de DNI, no del conjunto completo).


→   Segunda Forma Normal (2FN)

Una relación está en Segunda Forma Normal (2FN) si cumple con dos condiciones:

→ Está en Primera Forma Normal (1FN) (es decir, los valores de los atributos son atómicos).
→ No existen dependencias parciales entre los atributos no clave y la clave primaria. Es decir, todos los atributos no clave deben depender completamente de la clave primaria.
Eliminación de dependencias parciales:
→ Identificamos qué atributos no clave dependen solo de una parte de la clave primaria (en lugar de depender completamente de ella).
→ Luego, movemos estos atributos a una nueva tabla, incluyendo las partes relevantes de la clave primaria en esa nueva tabla.
→ Aseguramos que las relaciones entre tablas se mantengan, añadiendo las claves primarias necesarias.

Ejemplo de 2FN:
Consideremos una tabla con los siguientes atributos: DNI, CÓDIGO PROYECTO, HORAS, NOMBRE ALUMNO, y NOMBRE PROYECTO.

La relación inicial está en 1FN, pero tiene dependencias parciales:

DNI → NOMBRE ALUMNO (dependencia parcial: solo depende de DNI).
CÓDIGO PROYECTO → NOMBRE PROYECTO (dependencia parcial: solo depende de CÓDIGO PROYECTO).
Para cumplir con 2FN, debemos separar las dependencias parciales en nuevas tablas:

Tabla Base (relación principal):
Esta tabla solo debe contener los atributos que dependen completamente de la clave primaria compuesta (DNI, CÓDIGO PROYECTO), es decir, HORAS. La tabla base quedaría así:

DNI	CÓDIGO PROYECTO	HORAS
444	C	40
555	B	50
555	C	30
Tabla de Alumnos (Eliminamos NOMBRE ALUMNO de la tabla base y creamos una nueva tabla para los alumnos):

DNI	NOMBRE ALUMNO
444	ANA
555	JUAN
Tabla de Proyectos (Eliminamos NOMBRE PROYECTO de la tabla base y creamos una nueva tabla para los proyectos):

CÓDIGO PROYECTO	NOMBRE PROYECTO
C	INFORMÁTICA
B	INGENIERÍA
Relaciones:
La tabla base ahora está relacionada con las tablas de Alumnos y Proyectos a través de claves foráneas (DNI y CÓDIGO PROYECTO).
Así, hemos eliminado las dependencias parciales y la base de datos está ahora en Segunda Forma Normal (2FN).


→   3 FN - TERCERA FORMA NORMAL 
• Una relación está en tercera forma normal si está en segunda forma normal y no existen 
dependencias transitivas. 
• En  una  dependencia  transitiva  los  atributos  no  clave  dependen  de  otros  atributos  no 
clave.  
• Ejemplo:  En el caso de añadir una columna nueva sobre el uso o no del ordenador para 
el proyecto, la tabla anterior quedaría: 
C DEPENDE DE A Y DE B QUE NO ES CLAVE, B DEPENDE DE A:
                           
 
 
 
• Eliminar dependencias transitivas: 
    Crear una tabla o relación con los atributos dependientes del atributo no clave e 
incluir éste también 
▪ Mantener  el  atributo  no  clave  que  provoca  la  dependencia  transitiva  en  la  tabla 
base.  
    Por tanto, “Nombre de proyecto” que es el campo que provoca la dependencia, y 
“Uso del ordenador”, se van a otra tabla: 
  
 
FNBC - FORMA NORMAL BOYCE-CODD. 
• Una  relación  está  en  FNBC  si  está  en  tercera  forma  normal  y  no  hay  dependencias 
redundantes y los únicos determinantes son claves candidatas no compuestas. 
Realmente es una ampliación o forma más estricta de la tercera forma normal.  
• Una  tabla  no  está  en  FNBC  si  las  claves  candidatas  son  compuestas,  si  las  claves 
candidatas  se  encubren  y  tienen  al  menos  un  atributo  en  común  (se  solapan),  si  hay 
redundancias entre dependencias.  
• Transformar a FNBC una relación: 
o Separar las claves candidatas compuestas 
o Separar redundancias 

• Ejemplos: 
ASISTIR (CODIGOCURSO, NOMBRECURSO, CODIGOESTUDIANTE, NOTA) 
CODIGO CURSO ←→NOMBRE CURSO      EXISTE REDUNDANCIA 
CODIGO CURSO, CODIGO ESTUDIANTE→NOTA 
 
CÓDIGO PROYECTO NOMBRE PROYECTO USO DEL 
ORDENADOR 
B INGENIERÍA SI 
A ARQUITECTURA SI 
C INFORMÁTICA SI 
D GASTRONOMÍA NO 
CÓDIGO DE PROYECTO NOMBRE PROYECTO 
NOMBRE PROYECTO USO DEL ORDENADOR 
CODIGO CURSO NOMBRE CURSO 
30 
 
 
 
• Ya están en 3FN Y EN FNBC. 


Cuarta Forma Normal (4FN):
Definición: Una relación está en Cuarta Forma Normal (4FN) si cumple con los requisitos de Tercera Forma Normal (3FN) o Forma Normal Boyce-Codd (FNBC) y no tiene dependencias multivalor entre los atributos.
Dependencia multivalor: Ocurre cuando un atributo clave o no clave está asociado a más de un valor para otro atributo, y ambos atributos dependen de un mismo determinante (clave).
Notación: A →→ B significa que un atributo A determina múltiples valores para el atributo B.
Ejemplo:
Tabla original:
DNI	TELEFONO	EMAIL
8787A	78787878	A@LLLL.ES
7444B	55556565	B@LLLL.ES
Aquí, DNI →→ TELEFONO y DNI →→ EMAIL, lo que significa que un mismo DNI tiene múltiples teléfonos y correos asociados.
Solución: Para llevarla a 4FN, se crean dos tablas separadas para TELEFONO y EMAIL, con el DNI como clave:
Tabla 1:
DNI	TELEFONO
8787A	78787878
7444B	55556565
Tabla 2:
DNI	EMAIL
8787A	A@LLLL.ES
7444B	B@LLLL.ES
Ejemplo de 4FN con múltiples dependencias:
Supón una tabla de Conductores, Vehículos y Carga:

CONDUCTOR	VEHÍCULO	CARGA
JUAN	FURGONETA	MUEBLES
LUIS	FURGONETA	MUEBLES
PEPE	FURGONETA	MUEBLES
JUAN	CAMIÓN	ESCOMBROS
LUIS	CAMIÓN	ESCOMBROS
PEPE	GRÚA	COCHE
JUAN	TRAILER	CONTENEDOR
LUIS	TRAILER	CONTENEDOR
Dependencias multivalor:

CONDUCTOR →→ VEHÍCULO
VEHÍCULO → CARGA
Solución: Para cumplir con 4FN, creamos dos tablas:

Tabla 1:
VEHÍCULO	CARGA
FURGONETA	MUEBLES
CAMIÓN	ESCOMBROS
GRÚA	COCHE
TRAILER	CONTENEDOR
Tabla 2:
CONDUCTOR	VEHÍCULO
JUAN	FURGONETA
LUIS	FURGONETA
PEPE	FURGONETA
JUAN	CAMIÓN
LUIS	CAMIÓN
PEPE	GRÚA
JUAN	TRAILER
LUIS	TRAILER
Quinta Forma Normal (5FN) o Forma Normal Proyección-Unión (FNPU):
Definición: Una relación está en Quinta Forma Normal (5FN) si cumple con los requisitos de Cuarta Forma Normal (4FN) y se puede descomponer en proyecciones que, al combinarse, reconstruyan la tabla original sin perder información. Esto implica eliminar dependencias de unión y mantener la integridad de los datos.
Requisitos:
La relación debe estar en 4FN.
Las proyecciones de las dependencias deben ser combinables para reconstruir la tabla original.
Ejemplo:
Supón la tabla:
VENDEDOR	MARCA	PRODUCTO
LUIS	FORD	COCHE
LUIS	FORD	CAMIÓN
LUIS	MERCEDES	COCHE
LUIS	MERCEDES	CAMIÓN
JUAN	FORD	COCHE
Aquí, la tabla está en 4FN.
Proyecciones:
Tabla A (VENDEDOR, MARCA)
Tabla B (VENDEDOR, PRODUCTO)
Tabla C (MARCA, PRODUCTO)
Combinación de las proyecciones:
Combinando A y B: (VENDEDOR, MARCA, PRODUCTO)
Combinando B y C: (VENDEDOR, PRODUCTO, MARCA)
Al hacer estas combinaciones, se pueden reconstruir las relaciones originales sin pérdida de datos, lo que significa que la tabla está en 5FN.
Dominio-Clave (DK/FN):
Dominio: Se refiere a las restricciones que definen qué valores son válidos para un atributo específico en una tabla.
Clave: Indica qué conjunto de atributos se necesita para identificar de manera única una fila en la tabla.
Conclusión:

4FN se ocupa de evitar dependencias multivalor, mientras que 5FN se enfoca en descomponer relaciones para eliminar redundancias y dependencias de unión, permitiendo reconstruir la tabla original mediante proyecciones.




PAG 32--->


</body>

</html>