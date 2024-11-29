
use personal;


SELECT Nombre
FROM empleados
ORDER BY Nombre;

SELECT e.Nombre, e.Oficio, d.Nombre AS NombreDepartamento, d.Localizacion
FROM Empleados e
JOIN Departamentos d ON e.NoDep = d.CodDep;

empleados.
SELECT Nombre
FROM Empleados
WHERE Nombre LIKE '%o';

SELECT e.Nombre, e.Sueldo, d.Localizacion
FROM Empleados e
JOIN Departamentos d ON e.NoDep = d.CodDep
WHERE e.Sueldo BETWEEN 1000.00 AND 1300.00;

SELECT e.Nombre, e.Oficio, e.Sueldo
FROM Empleados e
JOIN Departamentos d ON e.NoDep = d.CodDep
WHERE d.Localizacion = 'Getafe';

SELECT e.Nombre, e.Sueldo, d.Localizacion
FROM Empleados e
JOIN Departamentos d ON e.NoDep = d.CodDep
WHERE e.Sueldo BETWEEN 1000.00 AND 1300.00;

SELECT d.CodDep, d.Nombre, COUNT(e.CodEmp) AS NumeroEmpleados
FROM Departamentos d
JOIN Empleados e ON d.CodDep = e.NoDep
GROUP BY d.CodDep, d.Nombre
HAVING COUNT(e.CodEmp) > 5;

SELECT e.Nombre, e.Sueldo, d.Nombre AS NombreOficina
FROM Empleados e
JOIN Departamentos d ON e.NoDep = d.CodDep
WHERE e.Oficio = (
    SELECT e2.Oficio
    FROM Empleados e2
    WHERE e2.Nombre = 'Luis García Pérez'
);

SELECT e.Nombre, e.Sueldo, d.Nombre AS NombreDepartamento
FROM Empleados e
JOIN Departamentos d ON e.NoDep = d.CodDep
WHERE e.Oficio = (
    SELECT e2.Oficio
    FROM Empleados e2
    WHERE e2.Nombre = 'Antonio González Ruiz'
)
AND e.Comision = 0;

SELECT e.* 
FROM Empleados e
JOIN Departamentos d ON e.NoDep = d.CodDep
WHERE d.Nombre = 'Contabilidad'
ORDER BY e.Nombre;


SELECT e.Nombre
FROM Empleados e
JOIN Departamentos d ON e.NoDep = d.CodDep
WHERE d.Localizacion LIKE 'León'
  AND (e.Oficio LIKE 'Analista' OR e.Oficio LIKE 'Contable');

SELECT AVG(Sueldo)
FROM Empleados;

SELECT MAX(Sueldo)
FROM Empleados
JOIN Departamentos 
WHERE CodDep = 10;

SELECT MIN(Sueldo)
FROM Empleados e
JOIN Departamentos d ON e.NoDep = d.CodDep
WHERE d.Nombre = 'Ventas';

SELECT COUNT (CodEmp)
FROM Empleados e
JOIN Departamentos d ON e.NoDep = d.CodDep
WHERE d.CodDep = 10;

SELECT COUNT (CodEmp)
FROM Empleados WHERE Comision=0;

SELECT Nombre FROM Empleados 
WHERE Nombre LIKE 'A%';

/*

17. Para cada oficio, obtener la suma de salarios.
18. Mostrar los datos de los empleados cuyo salario sea mayor que la media de todos los salarios.
19. Seleccionar el nombre del empleado que tiene máximo salario.
20. Mostrar el nombre del empleado que tiene el salario más bajo.
21. Mostrar los datos del empleado que tiene el salario más alto en el departamento de “Ventas”.
22. Departamento con más empleados.
23. Número del departamento que tenga más empleados cuyo oficio sea “Administrativo”.
24. Mostrar el número de oficios distintos de cada departamento.
25. Mostrar los departamentos que tengan más de dos personas trabajando en la misma profesión.
26. Crear las nuevas tablas Departamento2 y Empleados2.
27. Incrementar un 2% la comisión de los empleados cuyo salario sea superior a la media de sueldos*/