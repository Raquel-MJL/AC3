--Crear una vista para cada tabla-- 
CREATE VIEW vista_socios AS SELECT * FROM socios;
CREATE VIEW vista_profesores AS SELECT * FROM profesores;
CREATE VIEW vista_cursos AS SELECT * FROM cursos;
CREATE VIEW vista_inscripciones AS SELECT * FROM inscripciones;


--Una vista que unifique todas las tablas-- 

CREATE VIEW vista_todas_las_tablas AS
SELECT 
    s.DNI AS DNI_Socio,
    s.nombre AS Nombre_Socio,
    s.domicilio AS Domicilio_Socio,
    p.DNI AS DNI_Profesor,
    p.nombre AS Nombre_Profesor,
    p.domicilio AS Domicilio_Profesor,
    c.Codigo AS Codigo_Curso,
    c.Deporte,
    c.Dia,
    i.NºMatricula
FROM 
    socios s
JOIN 
    inscripciones i ON s.DNI = i.DNI_Socio
JOIN 
    cursos c ON i.Codigo_Curso = c.Codigo
JOIN 
    profesores p ON c.DNI_Profesor = p.DNI;




-- Una vista que muestre el nombre del profesor y el del curso que imparte --
CREATE VIEW vista_profesor_curso AS
SELECT 
    p.nombre AS Nombre_Profesor,
    c.Deporte AS Curso
FROM 
    profesores p
JOIN 
    cursos c ON p.DNI = c.DNI_Profesor;





CREATE VIEW vista_socios_cursos_natural AS
SELECT 
    s.nombre AS Nombre_Socio,
    s.DNI AS DNI_Socio,
    c.Deporte,
    c.Dia,
    p.nombre AS Nombre_Profesor
FROM 
    socios s
NATURAL JOIN inscripciones i
NATURAL JOIN cursos c
NATURAL JOIN profesores p;



--Mostrar la información contenida en las vistas--
SELECT * FROM vista_socios_cursos_natural;
SELECT * FROM vista_socios_cursos_outer;


--Muestre la cantidad de socios inscritosen cada deporte ordenados por cantidad--
SELECT 
    Deporte, 
    COUNT(DNI_Socio) AS Cantidad_Socios
FROM 
    vista_socios_cursos_outer
GROUP BY 
    Deporte
ORDER BY 
    Cantidad_Socios DESC;


--cursos  (deporte  y  día)  para  los  cuales  no  hay inscritos--
SELECT 
    Deporte, 
    Dia
FROM 
    vista_cursos
WHERE 
    Codigo NOT IN (SELECT Codigo_Curso FROM inscripciones);


--Muestra  los  nombres  de  los  socios  que  no  se  han  matriculado  en  ningún  curso--
SELECT 
    Nombre_Socio
FROM 
    vista_socios_outer
WHERE 
    DNI_Socio NOT IN (SELECT DNI_Socio FROM inscripciones);




SELECT 
    Nombre_Profesor
FROM 
    vista_profesores
WHERE 
    DNI NOT IN (SELECT DNI_Profesor FROM cursos);



SELECT 
    Nombre_Socio, 
    DNI_Socio
FROM 
    vista_socios_outer
WHERE 
    DNI_Socio IN (SELECT DNI_Socio FROM inscripciones);



SELECT 
    Nombre_Profesor, 
    Dia
FROM 
    vista_socios_cursos_outer
WHERE 
    Nombre_Profesor IS NOT NULL;



SELECT 
    Nombre_Profesor, 
    Dia
FROM 
    vista_socios_cursos_outer
WHERE 
    Nombre_Profesor IS NOT NULL
ORDER BY 
    Dia;


SELECT 
    s1.Nombre_Socio
FROM 
    vista_socios_cursos_outer s1
JOIN 
    vista_socios_cursos_outer s2 ON s1.DNI_Socio = s2.DNI_Socio
WHERE 
    s1.Deporte = 'tenis' AND s1.Dia = 'lunes' AND s1.DNI_Socio <> s2.DNI_Socio;




CREATE VIEW vista_cantidad_inscritos_por_curso AS
SELECT 
    c.Codigo,
    c.Deporte,
    c.Dia,
    IFNULL(COUNT(i.DNI_Socio), 0) AS Cantidad_Inscritos
FROM 
    cursos c
LEFT JOIN 
    inscripciones i ON c.Codigo = i.Codigo_Curso
GROUP BY 
    c.Codigo, c.Deporte, c.Dia;




SELECT * FROM vista_cantidad_inscritos_por_curso;




-- No se puede insertar directamente en la vista, se inserta en la tabla base
INSERT INTO socios (DNI, nombre, domicilio) VALUES ('12345678', 'Juan Pérez', 'Calle Falsa 123');




DELETE FROM socios WHERE DNI = '12345678';


