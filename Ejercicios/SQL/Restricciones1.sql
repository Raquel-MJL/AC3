CREATE DATABASE IF NOT EXISTS Ferreteria;
USE Ferreteria;
CREATE TABLE IF NOT EXISTS Piezas (
    codigo INT NOT NULL,
    NombrePieza VARCHAR(40) NOT NULL,
    ParaComponente VARCHAR(40) NOT NULL,
    CantidadStock INT NOT NULL CHECK (CantidadStock <= 200)
);

-- Paso 3: Añadir la clave primaria a la tabla 'Piezas'
ALTER TABLE Piezas ADD PRIMARY KEY (codigo);

-- Paso 4: Insertar 3 registros en la tabla 'Piezas'
INSERT INTO Piezas (codigo, NombrePieza, ParaComponente, CantidadStock)
VALUES 
(1, 'Tornillo', 'Madera', 50),
(2, 'Tuerca', 'Metal', 100),
(3, 'Arandela', 'Madera', 150);

-- Paso 5: Intentar insertar un registro con un código repetido
-- Se intenta insertar un nuevo registro con un código que ya existe (código 1).
-- Esto debe dar un error debido a la violación de la restricción de la clave primaria.
INSERT INTO Piezas (codigo, NombrePieza, ParaComponente, CantidadStock)
VALUES (1, 'Destornillador', 'Madera', 30);

-- Paso 6: Intentar insertar un valor 'NULL' en el campo 'codigo'
-- Se intenta insertar un registro con 'codigo' como NULL, lo cual debería dar un error
-- debido a la restricción de NOT NULL en la columna 'codigo'.
INSERT INTO Piezas (codigo, NombrePieza, ParaComponente, CantidadStock)
VALUES (NULL, 'Martillo', 'Metal', 50);



-- EJERCICIO 2 -- 

-- Paso 1: Crear la base de datos llamada 'Visitantes' y ponerla en uso.
CREATE DATABASE IF NOT EXISTS Visitantes;
USE Visitantes;

-- Paso 2: Crear la tabla 'Visitantes' con la estructura especificada y PK DNI
CREATE TABLE IF NOT EXISTS Visitantes (
    DNI VARCHAR(10) PRIMARY KEY,           
    Nombre VARCHAR(30),                    
    Edad TINYINT UNSIGNED,                 
    Sexo CHAR(1) DEFAULT 'F',              
    Domicilio VARCHAR(30),                 
    Ciudad VARCHAR(20) DEFAULT 'Córdoba',  
    Telefono VARCHAR(11),                  
    Email VARCHAR(30) DEFAULT 'No tiene',  
    Montocompra DECIMAL(6,2)               
);

-- Paso 3: Añadir un comentario al campo 'Montocompra'.
ALTER TABLE Visitantes MODIFY Montocompra DECIMAL(6,2) COMMENT 'Monto total de la compra realizado por el visitante.';

-- Paso 4: Insertar 3 registros sin especificar valores para algunos campos para ver cómo opera la cláusula 'default'.
-- En estos registros, los campos que no se especifican tomarán su valor por defecto.
INSERT INTO Visitantes (DNI, Nombre, Edad, Sexo, Domicilio, Telefono)
VALUES 
('12345678A', 'Juan Pérez', 25, 'M', 'Calle Falsa 123', '1234567890'),
('87654321B', 'Ana López', 30, NULL, 'Avenida Siempre Viva 456', '0987654321'),
('11223344C', 'Carlos Gómez', 40, 'M', 'Calle de la Luna 789', '1122334455');

-- Los campos 'Ciudad' y 'Email' deberían tomar los valores por defecto 'Córdoba' y 'No tiene' respectivamente.

--Ejercicio 3-- 

-- Paso 1: Crear la base de datos llamada 'Empleados' y ponerla en uso.
-- La base de datos se crea solo si no existe, y luego se selecciona para su uso.
CREATE DATABASE IF NOT EXISTS Empleados;
USE Empleados;

-- Paso 2: Crear la tabla 'Empleados' con la estructura especificada y PK Idempleado
CREATE TABLE Empleados (
    Idempleado VARCHAR(6) PRIMARY KEY,           
    DNI VARCHAR(10) NOT NULL UNIQUE,             
    FechaNacimiento DATE NOT NULL,               
    Antigüedad TINYINT NOT NULL CHECK (Antigüedad <= 2024 - 2010),  
    Hijos TINYINT NOT NULL CHECK (Hijos >= 0),   
    Departamento VARCHAR(20) NOT NULL CHECK (Departamento IN ('Contabilidad', 'Sistemas', 'Administración', 'Ventas')), 
    Sueldo DECIMAL(8,2) NOT NULL CHECK (Sueldo BETWEEN 1000.00 AND 2000.00)
);

-- Paso 3: Introducir registros válidos y un registro que no cumpla las condiciones para probar el funcionamiento de los check.
-- Registro 1: Válido, cumple todas las condiciones.
INSERT INTO Empleados (Idempleado, DNI, FechaNacimiento, Antigüedad, Hijos, Departamento, Sueldo)
VALUES ('EMP001', '12345678A', '1985-06-15', 12, 2, 'Contabilidad', 1500.00);

-- Registro 2: Válido, cumple todas las condiciones.
INSERT INTO Empleados (Idempleado, DNI, FechaNacimiento, Antigüedad, Hijos, Departamento, Sueldo)
VALUES ('EMP002', '87654321B', '1990-03-10', 10, 0, 'Ventas', 1800.00);

-- Registro 3: Inválido, no cumple la condición del sueldo (sueldo fuera del rango).
-- Este registro debería fallar al ser insertado debido a la restricción de sueldos.
INSERT INTO Empleados (Idempleado, DNI, FechaNacimiento, Antigüedad, Hijos, Departamento, Sueldo)
VALUES ('EMP003', '11223344C', '1975-12-01', 15, 3, 'Administración', 2500.00);

