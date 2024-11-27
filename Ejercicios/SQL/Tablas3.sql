CREATE DATABASE IF NOT EXISTS Musica;
Use Musica;
CREATE TABLE IF NOT EXISTS Discos(
    IdDisco INT(5) PRIMARY KEY,
    Autor VARCHAR(55) NOT NULL,
    Titulo VARCHAR(40) NULL,
    Estilo VARCHAR(130) NOT NULL,
    Numero_canciones INT NOT NULL,
    Fecha_Salida DATETIME,
    CONSTRAINT constraint_IdDisco CHECK (IdDisco >= 0 AND IdDisco <= 99999),
    CONSTRAINT constraint_Numero_canciones CHECK (Numero_canciones >= 0 AND Numero_canciones <= 99)
); 

SELECT * FROM Discos; --Visualización--

ALTER TABLE Discos
CHANGE COLUMN Autor Artista_Grupo VARCHAR(55) NOT NULL; --Renombrar columna--

ALTER TABLE Discos
MODIFY COLUMN Titulo VARCHAR(40) NOT NULL;

ALTER TABLE Discos
MODIFY COLUMN Estilo VARCHAR(30);

ALTER TABLE Discos
CHANGE COLUMN Numero_canciones Pistas INT NOT NULL;
ALTER TABLE Discos
MODIFY COLUMN Pistas INT UNSIGNED NOT NULL;

ALTER TABLE Discos
MODIFY COLUMN Fecha_Salida DATE;

ALTER TABLE Discos
ADD COLUMN Comentarios VARCHAR(255) NOT NULL;

ALTER TABLE Discos
ADD COLUMN Soporte CHAR(5) NOT NULL AFTER Estilo;

ALTER TABLE Discos
ADD COLUMN IF NOT EXISTS Codigo INT(5) NOT NULL CHECK (Codigo >= 0 AND Codigo <= 99999) AFTER IdDisco;



/* Establece una clave única en el campo Codigo. Especifica un nombre
para la restricción.
 Añade el valor por defecto 0 en el campo Pistas.
 Añade el valor por defecto “Sin comentarios” en el campo Comentarios.
 Elimina la clave única del campo Codigo.
 Cambia la clave primaria del campo idDisco al campo Codigo.

