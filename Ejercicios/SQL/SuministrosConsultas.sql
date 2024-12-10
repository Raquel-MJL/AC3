use Suministros;

-- 05. Copiar la tabla Envíos en otra nueva llamada Envíos2.
CREATE TABLE ENVIOS2 AS SELECT * FROM ENVIOS;

-- 06. Crear una tabla nueva con los proveedores de SEVILLA y llamarla ProveedoresSevilla.
CREATE TABLE PROVEEDORESSEVILLA AS 
SELECT * FROM PROVEEDORES
WHERE CIUDAD = 'SEVILLA';

-- 07. Obtener todos los detalles de todos los artículos de CÁCERES.
SELECT * FROM ARTICULOS
WHERE CIUDAD = 'CACERES';

-- 08. Obtener, de la tabla de artículos, el código del artículo y la ciudad donde el nombre de ésta
-- acabe en "D" o contenga al menos una "E".
SELECT CODAR, CIUDAD FROM ARTICULOS
WHERE NOMBRE LIKE '%D' OR NOMBRE LIKE '%E%';

-- 09. Obtener los códigos de los proveedores que suministran para el artículo A2 el componente C3.
SELECT DISTINCT CODPRO FROM ENVIOS
WHERE CODAR = 'A2' AND CODCO = 'C3';

-- 10. Obtener el nombre de los artículos en orden alfabético suministrados por el proveedor P1.
SELECT A.NOMBRE FROM ARTICULOS A
JOIN ENVIOS E ON A.CODAR = E.CODAR
WHERE E.CODPRO = 'P1'
ORDER BY A.NOMBRE;

-- 11. Mostrar el código sin repetir para aquellos componentes suministrados para cualquier artículo de MADRID.
SELECT DISTINCT CODCO FROM ENVIOS E
JOIN ARTICULOS A ON E.CODAR = A.CODAR
WHERE A.CIUDAD = 'MADRID';

-- 12. Obtener todos los datos de aquellos componentes tales que ningún otro componente tenga un valor de peso inferior.
SELECT * FROM COMPONENTES C
WHERE PESO >= ALL (SELECT PESO FROM COMPONENTES);

-- 13. Obtener los códigos de los proveedores que suministran, para un artículo de SEVILLA o MADRID, un componente ROJO.
SELECT DISTINCT CODPRO FROM ENVIOS E
JOIN ARTICULOS A ON E.CODAR = A.CODAR
JOIN COMPONENTES C ON E.CODCO = C.CODCO
WHERE (A.CIUDAD = 'SEVILLA' OR A.CIUDAD = 'MADRID') AND C.COLOR = 'ROJO';

-- 14. Obtener el número de suministros, el de artículos fabricados y la cantidad total de componentes suministrados por el proveedor P2. 
-- Todas las columnas deben aparecer con un título identificativo.
SELECT 
    COUNT(E.CODAR) AS NUMERO_DE_SUMINISTROS,
    COUNT(DISTINCT E.CODAR) AS NUMERO_DE_ARTICULOS_FABRICADOS,
    SUM(E.CANTIDAD) AS CANTIDAD_TOTAL_COMPONENTES
FROM ENVIOS E
WHERE E.CODPRO = 'P2';

-- 15. ¿Cuáles son los códigos de artículos para los que se ha suministrado algún componente cuya media de abastecimiento es superior a 320 artículos?
SELECT CODAR FROM ENVIOS
GROUP BY CODAR
HAVING AVG(CANTIDAD) > 320;

-- 16. Seleccionar los colores de los componentes suministrados por el proveedor P3.
SELECT DISTINCT C.COLOR FROM COMPONENTES C
JOIN ENVIOS E ON C.CODCO = E.CODCO
WHERE E.CODPRO = 'P3';

-- 17. Seleccionar los datos de envío y nombre de la ciudad de aquellos envíos que cumplan que el artículo, proveedor y componente son de la misma ciudad.
SELECT E.*, A.CIUDAD FROM ENVIOS E
JOIN ARTICULOS A ON E.CODAR = A.CODAR
JOIN COMPONENTES C ON E.CODCO = C.CODCO
WHERE A.CIUDAD = C.CIUDAD AND A.CIUDAD = E.CIUDAD AND C.CIUDAD = E.CIUDAD;

-- 18. Seleccionar todos los datos de los 7 primeros envíos realizados de componentes cuyo color no sea ROJO y sus cantidades suministradas sean las menores.
SELECT * FROM ENVIOS E
JOIN COMPONENTES C ON E.CODCO = C.CODCO
WHERE C.COLOR <> 'ROJO'
ORDER BY E.CANTIDAD ASC
LIMIT 7;

-- 19. Eliminar, en la tabla Envíos2, los registros del proveedor P5.
DELETE FROM ENVIOS2
WHERE CODPRO = 'P5';

-- 20. A día de hoy, ¿cuántos meses han pasado desde que se fabricaron los componentes en la fábrica de MÁLAGA? Nombrar la columna del resultado.
SELECT TIMESTAMPDIFF(MONTH, MIN(FECHA), CURDATE()) AS MESES_DESDE_FABRICACION
FROM COMPONENTES
WHERE CIUDAD = 'MALAGA';
