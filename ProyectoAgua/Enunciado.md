# Nivel 1: Configuración Básica

**Objetivo:** Comprobar habilidades básicas en HTML, CSS y manipulación del DOM.

**Requisitos:**

1. Crear una página HTML que muestre cinco irrigadores como íconos o elementos visuales.
2. Cada irrigador debe tener un identificador único (por ejemplo, "Irrigador 1", "Irrigador 2", etc.).
3. Utilizar CSS para estilizar los irrigadores de forma simple (por ejemplo, un círculo azul representando agua).
4. Incluir un botón que, al hacer clic, active o desactive el riego para cada irrigador (puede ser un simple cambio de color).

**Entrega esperada:**

- Un archivo HTML y CSS básico.
- Uso de eventos de clic en JavaScript para cambiar el estado visual de los irrigadores.

# Nivel 2: Caudal Dinámico

## Objetivo
Evaluar la capacidad de trabajar con lógica básica y manipulación de datos en JavaScript.

## Requisitos
- Cada irrigador debe tener un caudal inicial asignado aleatoriamente entre 1 y 10 litros/minuto.
- Mostrar el caudal actual debajo de cada irrigador como texto.
- Implementar un temporizador ficticio que actualice el caudal de los cinco irrigadores cada 5 segundos (simular un intervalo de tiempo con `setInterval`).
- El caudal debe variar en ±2 litros/minuto con cada actualización, sin superar los límites de 0 a 10 litros/minuto.
- ¿Te atreves a actualizar el caudal de cada irrigador de forma independiente?
- ¿Te atreves a mostrar la diferencia de litros/minuto después de actualizar el caudal?

## Entrega esperada
- Uso de `setInterval` para actualizar el caudal.
- Manipulación del DOM para mostrar los valores de caudal dinámicamente.

# Nivel 3: Simulación de Necesidades del Cultivo

## Objetivo
Evaluar el uso de estructuras condicionales y lógica más compleja.

## Requisitos

1. Asignar a cada irrigador un tipo de cultivo (por ejemplo, "Trigo", "Maíz", "Girasol").
2. Cada cultivo actualiza su medidor en base a la cantidad de caudal que tiene sus irrigador. 
3. Establecer necesidades de riego diferentes para cada cultivo:
    - **Trigo**: 5-7 litros/minuto.
    - **Maíz**: 6-8 litros/minuto.
    - **Girasol**: 4-6 litros/minuto.
    - **Soja**: 7-9 litros/minuto.
    - **Arroz**: 3-5 litros/minuto. 
4. Si el caudal de un irrigador está por debajo de la necesidad mínima del cultivo, debe mostrarse en rojo; si está en el rango adecuado, en verde.

## Entrega esperada

Uso de condicionales para evaluar y cambiar el estado visual de los irrigadores según la necesidad del cultivo.

# Nivel 4: Considerar Condiciones Meteorológicas

**Objetivo:** Evaluar habilidades avanzadas en lógica y simulaciones.

**Requisitos:**

- Simular condiciones meteorológicas utilizando un valor booleano `llueve` (por ejemplo, con un botón que alterne entre `true` y `false`).
- Si `llueve` es `true`, disminuir el caudal necesario para cada cultivo en un 50%.
- Mostrar visualmente si está lloviendo (por ejemplo, un ícono o cambio de fondo).

**Entrega esperada:**

- Actualización dinámica del sistema según las condiciones meteorológicas.
- Capacidad de integrar múltiples factores en la simulación.

# Nivel 5: Control Automático del Sistema

## Objetivo
Evaluar la habilidad para implementar lógica automatizada y optimización.

## Requisitos
- Implementar un sistema que ajuste automáticamente el caudal de cada irrigador para mantenerse dentro del rango de necesidad del cultivo (considerando si llueve o no).
- Agregar un botón que detenga todo el sistema (desactivando los intervalos y riego).

## Entrega esperada
- Lógica automatizada para mantener el rango de caudal necesario.
- Control de eventos avanzados como detener y reiniciar el sistema.