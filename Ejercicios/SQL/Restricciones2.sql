--Ejercicio 1-- 
-- Paso 1: Crear la base de datos llamada 'Medicamentos' y ponerla en uso.
CREATE DATABASE IF NOT EXISTS Medicamentos;
USE Medicamentos;

-- Paso 2: Crear las tablas 'Medicamentos' y 'Laboratorios' sin claves primarias y sin relación.

CREATE TABLE IF NOT EXISTS Medicamentos (
    IdMedicamento INT UNSIGNED,             
    Nombre VARCHAR(20) NULL,                 
    IdLaboratorio VARCHAR(20) NOT NULL,      
    Precio FLOAT NULL,                       
    Cantidad INT UNSIGNED NULL               
);
CREATE TABLE IF NOT EXISTS Laboratorios (
    IdLaboratorio VARCHAR(5) NOT NULL,       
    nombreLaboratorio VARCHAR(30) NOT NULL   
);

-- Paso 3: Añadir las claves primarias faltantes a las tablas.
ALTER TABLE Medicamentos ADD PRIMARY KEY (IdMedicamento);
ALTER TABLE Laboratorios ADD PRIMARY KEY (IdLaboratorio);

-- Paso 4: Relacionar ambas tablas con eliminación y actualización en cascada.
-- Se establece una clave foránea en la tabla 'Medicamentos' que referencia la tabla 'Laboratorios'.
ALTER TABLE Medicamentos
ADD CONSTRAINT fk_Laboratorio
FOREIGN KEY (IdLaboratorio) REFERENCES Laboratorios(IdLaboratorio)
ON DELETE CASCADE
ON UPDATE CASCADE;

-- Paso 5: Introducir 2 registros en la tabla 'Laboratorios'.
INSERT INTO Laboratorios (IdLaboratorio, nombreLaboratorio)
VALUES 
('LAB1', 'Laboratorio A'),
('LAB2', 'Laboratorio B');

-- Paso 6: Introducir registros en la tabla 'Medicamentos' asociados a los laboratorios.
INSERT INTO Medicamentos (IdMedicamento, Nombre, IdLaboratorio, Precio, Cantidad)
VALUES 
(1, 'Paracetamol', 'LAB1', 2.50, 100),
(2, 'Ibuprofeno', 'LAB2', 1.80, 50);

-- Paso 7: Intentar introducir un registro en la tabla 'Medicamentos' sin correspondencia con un laboratorio.
-- Este registro debería dar un error porque el 'IdLaboratorio' no existe en la tabla 'Laboratorios'.
INSERT INTO Medicamentos (IdMedicamento, Nombre, IdLaboratorio, Precio, Cantidad)
VALUES 
(3, 'Amoxicilina', 'LAB3', 3.00, 30); -- Error: 'LAB3' no existe en 'Laboratorios'.

-- Paso 8: Introducir 1 registro en la tabla 'Laboratorios' sin correspondencia con un medicamento.
-- Este registro se debe insertar sin problemas, ya que no hay restricción en la tabla 'Laboratorios'.
INSERT INTO Laboratorios (IdLaboratorio, nombreLaboratorio)
VALUES 
('LAB3', 'Laboratorio C');


--Ejercicio 2 -- 

-- Ejercicio 2. Primary Key / Foreign Key.

-- Paso 1: Crear la base de datos llamada 'GabineteAbogados' y ponerla en uso.
CREATE DATABASE IF NOT EXISTS GabineteAbogados;
USE GabineteAbogados;

-- Paso 2: Crear las tablas 'Juicios', 'Clientes' y 'Abogados' sin claves primarias ni relaciones.

-- Tabla 'Clientes'.
CREATE TABLE IF NOT EXISTS Clientes (
    DNI VARCHAR(10) NOT NULL,        
    Nombre VARCHAR(50) NOT NULL,     
    Direccion VARCHAR(100) NOT NULL, 
    PRIMARY KEY (DNI)               
);

-- Tabla 'Abogados'.
CREATE TABLE IF NOT EXISTS Abogados (
    DNI VARCHAR(10) NOT NULL,        
    Nombre VARCHAR(50) NOT NULL,     
    Direccion VARCHAR(100) NOT NULL, 
    PRIMARY KEY (DNI)               
);

-- Tabla 'Juicios'.
CREATE TABLE IF NOT EXISTS Juicios (
    Num_Expediente INT UNSIGNED NOT NULL,  
    Fecha_inicio DATE NOT NULL,            
    Fecha_archivo DATE,                   
    Estado VARCHAR(20) NOT NULL,           
    Cliente VARCHAR(10) NOT NULL,          
    Abogado VARCHAR(10) NOT NULL,          
    PRIMARY KEY (Num_Expediente)           
);

-- Paso 3: Crear las relaciones entre las tablas.

-- Relación entre 'Clientes' y 'Juicios', clave foránea en 'Juicios' que referencia a 'Clientes'.
ALTER TABLE Juicios
ADD CONSTRAINT fk_Cliente
FOREIGN KEY (Cliente) REFERENCES Clientes(DNI)
ON DELETE CASCADE
ON UPDATE CASCADE;

-- Relación entre 'Abogados' y 'Juicios', clave foránea en 'Juicios' que referencia a 'Abogados'.
ALTER TABLE Juicios
ADD CONSTRAINT fk_Abogado
FOREIGN KEY (Abogado) REFERENCES Abogados(DNI)
ON DELETE CASCADE
ON UPDATE CASCADE;


