use OperacionesBancarias;

-- 01. Consultar los datos personales de los clientes que vivan en una avenida.
SELECT * 
FROM Clientes 
WHERE Dirección LIKE 'Avda.%';  -- Selecciona todos los datos de los clientes cuyo campo 'Dirección' comienza con 'Avda.'

-- 02. Mostrar los clientes de Coslada.
SELECT * 
FROM Clientes 
WHERE Localidad = 'Coslada';  -- Muestra todos los clientes que viven en la localidad 'Coslada'

-- 03. Consultar las cuentas de los clientes cuyo segundo apellido empiece por "G".
SELECT * 
FROM Cuentas 
WHERE IDCliente IN (
    SELECT IDCliente 
    FROM Clientes 
    WHERE Apellido2 LIKE 'G%'  -- Busca los clientes cuyo segundo apellido empieza con 'G'
); 

-- 04. Mostrar el código de las cuentas abiertas en dólares.
SELECT IDCuenta 
FROM Cuentas 
WHERE Divisa = 'Dólares';  -- Muestra los códigos de cuentas con divisa 'Dólares'

-- 05. Mostrar los datos de las cuentas que acumulen más de 2.000 euros.
SELECT * 
FROM Cuentas 
WHERE Saldo > 2000 AND Divisa = 'Euros';  -- Muestra todas las cuentas con saldo superior a 2.000 euros

-- 06. Mostrar los detalles de todos los ingresos realizados.
SELECT * 
FROM Movimientos 
WHERE Tipo = 'Ingreso';  -- Muestra todos los movimientos que sean de tipo 'Ingreso'

-- 07. Mostrar el identificador de movimiento de todos los ingresos realizados en el mes de mayo.
SELECT IDMovimiento 
FROM Movimientos 
WHERE Tipo = 'Ingreso' AND MONTH(FechaOperacion) = 5;  -- Muestra los ID de los movimientos de tipo 'Ingreso' en mayo

-- 08. Mostrar los datos de todas las operaciones realizadas en marzo.
SELECT * 
FROM Movimientos 
WHERE MONTH(FechaOperacion) = 3;  -- Muestra todos los movimientos realizados en marzo

-- 09. Mostrar los datos de los 3 movimientos realizados hasta el momento cuyas operaciones incluyen las mayores cantidades.
SELECT * 
FROM Movimientos 
ORDER BY Cantidad DESC 
LIMIT 3;  -- Muestra los 3 movimientos con mayores cantidades

-- 10. Consultar las cuentas de Fernando Vidal González.
SELECT * 
FROM Cuentas 
WHERE IDCliente = (SELECT IDCliente FROM Clientes WHERE Nombre = 'Fernando' AND Apellido1 = 'Vidal' AND Apellido2 = 'González');
-- Muestra todas las cuentas asociadas al cliente 'Fernando Vidal González'

-- 11. Consultar los movimientos de ingreso o transferencia realizados en el primer trimestre del año.
SELECT * 
FROM Movimientos 
WHERE (Tipo = 'Ingreso' OR Tipo = 'Transferencia') AND MONTH(FechaOperacion) BETWEEN 1 AND 3;
-- Muestra los movimientos de tipo 'Ingreso' o 'Transferencia' realizados en el primer trimestre

-- 12. Consultar todos los movimientos de las cuentas en divisa euros de los clientes cuyo primer apellido es “Pérez”.
SELECT * 
FROM Movimientos 
WHERE IDCuenta IN (
    SELECT IDCuenta 
    FROM Cuentas 
    WHERE IDCliente IN (
        SELECT IDCliente 
        FROM Clientes 
        WHERE Apellido1 = 'Pérez'  -- Busca clientes cuyo primer apellido es 'Pérez'
    ) AND Divisa = 'Euros'
);

-- 13. Consultar todos los movimientos de las cuentas del cliente “Eva Álvarez García” en euros (aunque tenga cuentas en otras divisas), ordenados por el número de cuenta.
SELECT * 
FROM Movimientos 
WHERE IDCuenta IN (
    SELECT IDCuenta 
    FROM Cuentas 
    WHERE IDCliente = (SELECT IDCliente FROM Clientes WHERE Nombre = 'Eva' AND Apellido1 = 'Álvarez' AND Apellido2 = 'García')
)
ORDER BY IDCuenta;  -- Muestra los movimientos de cuentas de 'Eva Álvarez García' ordenados por ID de cuenta

-- 14. Mostrar el nombre, saldo y fecha de los movimientos realizados por todos los clientes hasta la fecha.
SELECT c.Nombre, c.Apellido1, c.Apellido2, cu.Saldo, m.FechaOperacion 
FROM Clientes c 
JOIN Cuentas cu ON c.IDCliente = cu.IDCliente 
JOIN Movimientos m ON cu.IDCuenta = m.IDCuenta;  -- Muestra el nombre de los clientes, saldo de la cuenta y fecha de los movimientos

-- 15. Obtener el nombre de clientes y ciudades donde viven, que cumplan con la condición de tener una cuenta.
SELECT c.Nombre, c.Localidad 
FROM Clientes c 
WHERE c.IDCliente IN (SELECT IDCliente FROM Cuentas);  -- Muestra clientes que tienen al menos una cuenta

-- 16. Mostrar los detalles de aquellos clientes que no tienen cuenta.
SELECT * 
FROM Clientes 
WHERE IDCliente NOT IN (SELECT IDCliente FROM Cuentas);  -- Muestra clientes que no tienen cuenta

-- 17. Mostrar la cantidad media agrupada por tipo de operación.
SELECT Tipo, AVG(Cantidad) AS MediaCantidad 
FROM Movimientos 
GROUP BY Tipo;  -- Muestra la cantidad media de cada tipo de operación

-- 18. Saldo total por cada divisa.
SELECT Divisa, SUM(Saldo) AS TotalSaldo 
FROM Cuentas 
GROUP BY Divisa;  -- Muestra la suma total de los saldos agrupados por divisa

-- 19. Todas las operaciones tienen una comisión de un 1%. Mostrar ésta en una nueva columna llamada comisión, así como el tipo de operación, la cantidad real y la cuenta afectada.
SELECT IDMovimiento, Tipo, Cantidad, Cantidad * 0.01 AS Comisión, IDCuenta 
FROM Movimientos;  -- Muestra los detalles de los movimientos y una columna adicional de comisión

-- 20. ¿Cuántas cuentas hay abiertas cuya divisa es el dólar?
SELECT COUNT(*) 
FROM Cuentas 
WHERE Divisa = 'Dólares';  -- Muestra el número de cuentas que tienen la divisa 'Dólares'

-- 21. ¿Cuántas cuentas tiene cada cliente? Mostrar nombre y apellidos, así como el número de cuentas que posee.
SELECT c.Nombre, c.Apellido1, c.Apellido2, COUNT(co.IDCuenta) AS NumeroDeCuentas 
FROM Clientes c 
JOIN Cuentas co ON c.IDCliente = co.IDCliente 
GROUP BY c.IDCliente;  -- Muestra el número de cuentas que tiene cada cliente

-- 22. (Subconsulta). Seleccionar aquellos movimientos cuyas cantidades sean mayores que la cantidad media de todas las operaciones.
SELECT * 
FROM Movimientos 
WHERE Cantidad > (SELECT AVG(Cantidad) FROM Movimientos);  -- Muestra los movimientos con cantidad mayor a la media de todas las operaciones

-- 23. (Subconsulta). Mostrar la localidad sin repeticiones de aquellos clientes que tienen cuenta en dólares.
SELECT DISTINCT c.Localidad 
FROM Clientes c 
WHERE c.IDCliente IN (
    SELECT IDCliente 
    FROM Cuentas 
    WHERE Divisa = 'Dólares'
);  -- Muestra la localidad de clientes que tienen cuenta en dólares

-- 24. (Subconsulta). Mostrar nombre, apellidos y teléfono de los clientes que no tengan cuentas abiertas en divisa dólar.
SELECT Nombre, Apellido1, Apellido2, Teléfono 
FROM Clientes 
WHERE IDCliente NOT IN (
    SELECT IDCliente 
    FROM Cuentas 
    WHERE Divisa = 'Dólares'
);  -- Muestra los detalles de clientes que no tienen cuentas en dólares

-- 25. (Subconsulta). Mostrar saldos menores que alguna de las cantidades sacadas en operaciones de retirada de efectivo.
SELECT * 
FROM Cuentas 
WHERE Saldo < (SELECT MAX(Cantidad) 
               FROM Movimientos 
               WHERE Tipo = 'Retirada Efectivo');  -- Muestra cuentas con saldo menor al máximo de las retiradas de efectivo

-- 26. Crear la tabla Clientes2 a partir de Clientes.
CREATE TABLE Clientes2 AS SELECT * FROM Clientes;  -- Crea una tabla duplicada de la tabla Clientes

-- 27. Introducir un nuevo cliente en Clientes2.
INSERT INTO Clientes2 VALUES ('45M99', 'Carlos', 'López', 'Martínez', 'Calle Nuevo 10', 'Madrid', '123456789');  -- Inserta un nuevo cliente en la tabla Clientes2

-- 28. Transferir el registro nuevo de Clientes2 a Clientes.
INSERT INTO Clientes SELECT * FROM Clientes2 WHERE IDCliente = '45M99';  -- Inserta el nuevo cliente de Clientes2 a Clientes

-- 29. Cambiar, en la tabla Clientes, el código de cliente a Luis Pérez Sánchez, que pasa de ser el 45A67 al nuevo de 45M22. Confirmar actualización en cascada.
UPDATE Clientes 
SET IDCliente = '45M22' 
WHERE IDCliente = '45A67';  -- Actualiza el código de cliente de '45A67' a '45M22'

-- 30. Eliminar la cuenta 754456 de Eva Álvarez García. Confirmar eliminación en cascada.
DELETE FROM Cuentas 
WHERE IDCuenta = 754456;  -- Elimina la cuenta con ID 754456 y la eliminación se propaga a la tabla Movimientos

-- 31. Crear una vista para cada tabla.
CREATE VIEW VistaClientes AS SELECT * FROM Clientes;
CREATE VIEW VistaCuentas AS SELECT * FROM Cuentas;
CREATE VIEW VistaMovimientos
