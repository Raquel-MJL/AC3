use alumnos;


SELECT ROUND(AVG(Nota), 2) AS MediaNota
FROM AlumnosFisica;
SELECT Nombre,Apellidos,Nota
FROM AlumnosFisica
WHERE Nota < 5;

SELECT Nombre,Apellidos,Nota
FROM AlumnosMatematicas
WHERE Nota >= 5;

SELECT Nombre,Apellidos FROM AlumnosFisica
UNION DISTINCT
SELECT  Nombre,Apellidos FROM AlumnosQuimica;

SELECT Nombre, Apellidos
FROM AlumnosFisica
INTERSECT
SELECT Nombre, Apellidos
FROM AlumnosQuimica
INTERSECT
SELECT Nombre, Apellidos
FROM AlumnosMatematicas;

SELECT Nombre, Apellidos
FROM AlumnosFisica
EXCEPT
SELECT Nombre, Apellidos
FROM AlumnosQuimica;

SELECT Nombre,Apellidos
FROM AlumnosQuimica WHERE (Nota>=5)
INTERSECT 
SELECT Nombre,Apellidos
FROM AlumnosMatematicas WHERE (Nota>=5)

SELECT Nombre,Apellidos
FROM AlumnosFisica WHERE (Nota>=5)
INTERSECT
SELECT Nombre,Apellidos
From AlumnosQuimica WHERE (Nota<5);
