use literatura;

SELECT DISTINCT 
    CASE 
        WHEN EXISTS (SELECT 1 FROM libros WHERE editorial = 'Espasa') THEN 'Espasa'
        ELSE 'Esta editorial no existe en la base de datos'
    END AS Editoriales;

SELECT id_autor, nombre, COALESCE(nacionalidad, 'Desconocida') AS nacionalidad, fecha_nacimiento
FROM autores
WHERE nacionalidad IS NULL OR nacionalidad = 'Desconocida';


SELECT codigo_libro, titulo, NULL AS precio_error
FROM libros
WHERE codigo_libro = 'T12DQuix' AND precio = 40.5619;

SELECT SYSTEM_USER AS UsuarioActual;

INSERT INTO libros (codigo_libro, id_autor, titulo, editorial, precio, fecha_edicion)
VALUES ('TRG3Sol', 3982, 'Soledades', 'Planeta', 22.9923, 67, '2023-05-17');

SELECT COUNT(*) AS TotalRegistros FROM libros;

DELETE FROM libros
WHERE id_autor = (SELECT id_autor FROM autores WHERE nombre = 'Miguel de Cervantes');

SELECT ROW_COUNT() AS RegistrosBorrados;

SELECT DATABASE() AS BaseDeDatosActual;

SELECT VERSION() AS VersionMySQL;
