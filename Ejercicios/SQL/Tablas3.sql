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

ALTER TABLE Discos
ADD CONSTRAINT pk_Codigo PRIMARY KEY (Codigo);

ALTER TABLE Discos
ALTER COLUMN Pistas SET DEFAULT 0;

ALTER TABLE Discos
ALTER COLUMN Comentarios SET DEFAULT "Sin comentarios";

ALTER TABLE Discos
DROP CONSTRAINT pk_Codigo;

ALTER TABLE Discos
DROP CONSTRAINT pk_idDisco;
ALTER TABLE Discos
ADD CONSTRAINT pk_Codigo PRIMARY KEY (Codigo);

--Ejercicio2-- 

CREATE DATABASE IF NOT EXISTS Colegio;
USE Colegio;

CREATE TABLE IF NOT EXISTS Alumno (
    IdAlumno VARCHAR(5) PRIMARY KEY,
    Nombre VARCHAR(50) NOT NULL
);

CREATE TABLE Asignatura (
    IdAsignatura VARCHAR(5) PRIMARY KEY,
    IdAlumno VARCHAR(5) NOT NULL,
    Nombre_asignatura VARCHAR(25) NOT NULL,
    Nota TINYINT UNSIGNED CHECK (Nota BETWEEN 0 AND 10),
    FOREIGN KEY (IdAlumno) REFERENCES Alumno(IdAlumno)
);

ALTER TABLE Alumno
ADD COLUMN Curso VARCHAR(10) NOT NULL;

-- Modificar la tabla Asignatura para agregar el campo Profesor
ALTER TABLE Asignatura
ADD COLUMN Profesor VARCHAR(45) NOT NULL;

-- Definir la clave primaria en la tabla Alumno con un nombre específico
ALTER TABLE Alumno
ADD CONSTRAINT pk_Alumno PRIMARY KEY (IdAlumno);

-- Definir la clave primaria en la tabla Asignatura con un nombre específico
ALTER TABLE Asignatura
ADD CONSTRAINT pk_Asignatura PRIMARY KEY (IdAsignatura);

-- Crear la relación de clave foránea entre Asignatura e Alumno
ALTER TABLE Asignatura
ADD CONSTRAINT fk_Asignatura_Alumno
FOREIGN KEY (IdAlumno) REFERENCES Alumno(IdAlumno)
ON UPDATE CASCADE
ON DELETE CASCADE;

