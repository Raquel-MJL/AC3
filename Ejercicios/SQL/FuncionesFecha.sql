use Literatura;

SELECT 
    l.fecha_edicion,
    a.fecha_nacimiento,
    CURDATE() AS fecha_actual
FROM 
    libros l
JOIN 
    autores a ON l.id_autor = a.id_autor;


--Fechas con formato -- 

SELECT 
    DATE_FORMAT(l.fecha_edicion, '%d-%m-%Y') AS fecha_formateada,
    DATE_FORMAT(a.fecha_nacimiento, '%d-%m-%Y') AS fecha_nacimiento_formateada,
    CURDATE() AS fecha_actual
FROM 
    libros l
JOIN 
    autores a ON l.id_autor = a.id_autor;

--Otro formato-- 
SELECT 
    DATE_FORMAT(l.fecha_edicion, '%d/%m/%Y') AS fecha_formateada,
    DATE_FORMAT(a.fecha_nacimiento, '%d/%m/%Y') AS fecha_nacimiento_formateada,
    CURDATE() AS fecha_actual
FROM 
    libros l
JOIN 
    autores a ON l.id_autor = a.id_autor;


--Dia de la semana cuando nacieron autores-- 
SELECT 
    CONCAT('Día: ', DAYNAME(fecha_nacimiento)) AS `Día de Nacimiento`
FROM 
    autores;

--dia y mes completos en letra separado por un guion--

SELECT
    DATE_FORMAT(fecha_nacimiento, '%W-%M') AS fecha_completa
FROM autores;

--mon, a 12 de July de 2022).--

SELECT 
    DATE_FORMAT(l.fecha_edicion, '%a, a %d de %M de %Y') AS fecha_formato,
    DATE_FORMAT(a.fecha_nacimiento, '%a, a %d de %M de %Y') AS fecha_nacimiento_formato
FROM 
    libros l
JOIN 
    autores a ON l.id_autor = a.id_autor;

--Hora actual en formato: Son las hh horas, mm minutos y ss segundos. (Horas de 0 a 12 con AM/PM).

SELECT DATE_FORMAT(NOW(), 'Son las %l horas, %i minutos y %s segundos %p') AS hora_actual;

--

SELECT 
    DAYNAME(l.fecha_edicion) AS `Día de edición del libro`
FROM 
    libros l;

--

SELECT 
    YEAR(a.fecha_nacimiento) AS `Año de nacimiento`,
    MONTH(a.fecha_nacimiento) AS `Mes de nacimiento`,
    DAY(a.fecha_nacimiento) AS `Día de nacimiento`
FROM 
    autores a;


--

SELECT 
    TIMESTAMPDIFF(MONTH, l.fecha_edicion, CURDATE()) AS `Meses transcurridos`
FROM 
    libros l;


SELECT 
    CONCAT(FLOOR(DATEDIFF(CURDATE(), l.fecha_edicion) / 30), ' meses') AS `Meses transcurridos`
FROM 
    libros l;

--

SELECT 
    TIMESTAMPDIFF(YEAR, a.fecha_nacimiento, CURDATE()) AS `Años transcurridos desde nacimiento`
FROM 
    autores a;


SELECT 
    CONCAT(FLOOR(DATEDIFF(CURDATE(), a.fecha_nacimiento) / 365), ' años') AS `Años transcurridos desde nacimiento`
FROM 
    autores a;

--

SELECT 
    a.nombre AS `Nombre`,
    DATE_FORMAT(a.fecha_nacimiento, '%d-%m-%Y') AS `Fecha de nacimiento`,
    DATE_FORMAT(a.fecha_nacimiento + INTERVAL 100 YEAR, '%d-%m-%Y') AS `Aniversario primer centenario`
FROM 
    autores a;


--

SELECT 
    DATE_FORMAT(l.fecha_edicion, '%d/%m/%Y') AS `Fecha incorrecta`,
    DATE_FORMAT(DATE_ADD(l.fecha_edicion, INTERVAL 58 DAY), '%d/%m/%Y') AS `Fecha correcta de edición`
FROM 
    libros l
WHERE 
    l.titulo = 'Rimas y Leyendas';


SELECT 
    DATE_FORMAT(l.fecha_edicion, '%d/%m/%Y') AS `Fecha incorrecta`,
    DATE_FORMAT(l.fecha_edicion + INTERVAL 58 DAY, '%d/%m/%Y') AS `Fecha correcta de edición`
FROM 
    libros l
WHERE 
    l.titulo = 'Rimas y Leyendas';


--

SELECT *
FROM libros l
WHERE YEAR(l.fecha_edicion) = 2022;
