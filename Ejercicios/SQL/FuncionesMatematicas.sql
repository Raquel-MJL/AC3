use Literatura;

-- Redondear precio a la alta
SELECT precio, CEIL(precio) AS precio_a_la_alta 
FROM libros;

-- Redondear precio a la baja
SELECT precio, FLOOR(precio) AS precio_a_la_baja 
FROM libros;

--Precio con dos decimales
SELECT precio, ROUND(precio,2) AS precio_dos_decimales
FROM libros;

--Precio sin decimales 
SELECT precio, ROUND(precio) AS precio_sin_decimales
FROM libros; 

--Todo en una consulta
SELECT 
    precio, 
    CEIL(precio) AS precio_a_la_alta,
    FLOOR(precio) AS precio_a_la_baja,
    ROUND(precio, 2) AS precio_dos_decimales,
    ROUND(precio) AS precio_sin_decimales,
    TRUNCATE(precio,0) AS precio_sin_decimales_sin_redondear FROM libros; --Quitar decimales sin redondear


--Precio original, redondeado con 2 decimales usando como separador de decimales coma y renombrar columna

SELECT 
    precio,
    REPLACE(ROUND(precio, 2), '.', ',') AS precio_con_dos_decimales_y_coma
FROM libros;

--Área círculo-- 
SELECT 
    CONCAT(FORMAT(ROUND(PI() * POWER(50, 2)), 0), ' metros cuadrados') AS 'Área de un círculo'
FROM dual;


--Precio original, un nuevo calculado al azar para cada libro de

SELECT 
    precio AS 'Precio original',
    CONCAT(FLOOR(RAND() * 100), '.99') AS 'Nuevo precio'
FROM libros;


SELECT 
    l.*, 
    a.nombre AS 'Nombre del autor', 
    ROUND(l.precio, 2) AS 'Precio con 2 decimales', 
    IF(l.ediciones >= 50, 
        ROUND(l.precio * 0.9, 2), 
        'Sin descuento') AS 'Descuento del 10%'
FROM 
    libros l
JOIN 
    autores a ON l.id_autor = a.id_autor;



