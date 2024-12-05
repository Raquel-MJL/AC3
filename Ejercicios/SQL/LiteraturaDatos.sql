CREATE DATABASE Literatura;
Use Literatura;



-- Crear la tabla "autores"
CREATE TABLE IF NOT EXISTS autores (
    id_autor INT UNSIGNED PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    nacionalidad VARCHAR(40) NULL
);

-- Crear la tabla "libros"
CREATE TABLE IF NOT EXISTS libros (
    codigo_libro VARCHAR(20) PRIMARY KEY,
    id_autor INT UNSIGNED NOT NULL,
    titulo VARCHAR(60) NOT NULL,
    editorial VARCHAR(40) NOT NULL,
    precio DECIMAL(8, 4) NULL,
    numero_edicion INT NULL,
    fecha_edicion DATE NULL,
    -- Definición de la clave foránea para vincular libros con autores
    FOREIGN KEY (id_autor) REFERENCES autores(id_autor)
);

-- Insertar registros en la tabla "autores"
INSERT INTO autores (id_autor, nombre, nacionalidad) VALUES
(1234, 'Miguel Cervantes', 'Española'),
(1435, 'Lewis Carroll', 'Británica'),
(8754, 'Gustavo A. Bécquer', 'Española'),
(7340, 'Jorge Luis Borges', 'Argentina');

-- Insertar registros en la tabla "libros"
INSERT INTO libros (codigo_libro, id_autor, titulo, editorial, precio, numero_edicion, fecha_edicion) VALUES
('AAC7Alice', 1435, 'Alicia en el país de las maravillas', 'Aguilar', 20.4537, 23, '2022-09-14'),
('ZD55Aleph', 7340, 'El Aleph', 'Planeta', 15.3856, 52, '2019-02-24'),
('T12DQuix', 1234, 'El ingenioso hidalgo don Quijote de La Mancha', 'Aguilar', 40.5619, 89, '2023-04-11'),
('AAC7Ficc', 7340, 'Ficciones', 'Planeta', 15.5615, 34, '2023-11-02'),
('KXR4Galat', 1234, 'La Galatea', 'Anaya', 24.4593, 56, '2022-06-23'),
('AZBGLeyend', 8754, 'Rimas y Leyendas', 'Planeta', 18.9999, 44, '2023-12-27');

UPDATE libros
SET precio = ROUND(5 + (RAND() * 95), 4);

INSERT INTO autores (id_autor, nombre, fecha_nacimiento)
VALUES (3982, 'Luis de Góngora', '1561-07-11');



SELECT*from libros;