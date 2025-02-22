


-- 1. Muestra todos los datos de los autores y sus libros publicados.
SELECT a.*, l.*
FROM autores a
JOIN libros l ON a.id_autor = l.id_autor;

-- 2. Muestra todos los datos de los libros con sus títulos en mayúsculas.
SELECT l.*, UPPER(l.titulo) AS titulo_mayusculas
FROM libros l;

-- 3. Muestra nacionalidades y títulos asociados eliminando los espacios en blanco que pudiera haber en algún campo.
SELECT TRIM(a.nacionalidad) AS nacionalidad, TRIM(l.titulo) AS titulo
FROM autores a
JOIN libros l ON a.id_autor = l.id_autor;

-- 4. Muestra el título y su autor de la siguiente forma: titulo-nombre del autor.
SELECT CONCAT(TRIM(l.titulo), '-', TRIM(a.nombre)) AS titulo_autor
FROM libros l
JOIN autores a ON l.id_autor = a.id_autor;

-- 5. Muestra los datos de Cervantes añadiendo la preposición de a su nombre.
SELECT a.id_autor, CONCAT(SUBSTRING_INDEX(a.nombre, ' ', 1), ' de ', SUBSTRING_INDEX(a.nombre, ' ', -1)) AS nombre_modificado, a.nacionalidad
FROM autores a
WHERE a.nombre = 'Miguel Cervantes';


-- 6. Muestra los 4 primeros caracteres de los códigos de los libros.
SELECT LEFT(l.codigo_libro, 4) AS primeros_4_caracteres
FROM libros l;

-- 7. Muestra los 4 primeros caracteres de los códigos de los libros en minúsculas.
SELECT LOWER(LEFT(l.codigo_libro, 4)) AS primeros_4_caracteres_minusculas
FROM libros l;

-- 8. Muestra el título de libro sin espacios vacíos delante o detrás, y los nombres de las editoriales con la abreviatura edit., delante (por ejemplo, edit. Anaya).
SELECT TRIM(l.titulo) AS titulo_sin_espacios, CONCAT('edit. ', TRIM(l.editorial)) AS editorial_abreviada
FROM libros l;

-- 9. ¿Cuántos caracteres tienen los títulos de los libros? Muéstralos en una columna con el texto Número de caracteres en el título, junto con el título del libro.
SELECT LENGTH(l.titulo) AS 'Número de caracteres en el título', l.titulo
FROM libros l;

-- 10. Muestra los códigos de los libros partir de su quinto carácter. Da el nombre que quieras a la columna que los muestre.
SELECT SUBSTRING(l.codigo_libro, 5) AS codigo_desde_quinto_caracter
FROM libros l;

-- 11. Muestra los códigos de los libros partir de su quinto carácter concatenado a los títulos de los libros. Estos últimos deben aparecer sin espacios vacíos delante. Denomina Código - Título a la columna con los resultados.
SELECT CONCAT(SUBSTRING(l.codigo_libro, 5), '-', TRIM(l.titulo)) AS 'Código - Título'
FROM libros l;

-- 12. Muestra el título y la posición a partir de la cual aparece La Mancha en el título de el Quijote. Incluye el valor en una columna con el texto Posición de inicio de la cadena buscada.
SELECT l.titulo, POSITION('La Mancha' IN l.titulo) AS 'Posición de inicio de la cadena buscada'
FROM libros l
WHERE l.titulo = 'El ingenioso hidalgo don Quijote de La Mancha';

-- 13. Muestra en orden inverso los identificadores de autor de la tabla autores y los códigos de los libros que han escrito también invertidos. Incluye títulos alusivos para cada columna.
SELECT REVERSE(a.id_autor) AS 'ID de autor invertido', REVERSE(l.codigo_libro) AS 'Código de libro invertido'
FROM autores a
JOIN libros l ON a.id_autor = l.id_autor;

-- 14. Repite el nombre de los autores 3 veces al revés. Incluye un título para la columna.
SELECT CONCAT(REVERSE(a.nombre), REVERSE(a.nombre), REVERSE(a.nombre)) AS 'Nombre del autor repetido 3 veces al revés'
FROM autores a;

-- 15. Muestra todas las editoriales en una columna con el nombre Editoriales, pero en el caso de Anaya reemplázala por RBA.
SELECT CASE
           WHEN l.editorial = 'Anaya' THEN 'RBA'
           ELSE l.editorial
       END AS 'Editoriales'
FROM libros l;
