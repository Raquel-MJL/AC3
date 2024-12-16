--2. Creación de bases de datos y tablas -- 

CREATE DATABASE Taller;
use Taller;


CREATE TABLE Mecanicos(
    cod_mecanico VARCHAR(10), 
    Nombre VARCHAR(50) NULL, 
    Puesto VARCHAR(30) NULL
);


CREATE TABLE Coches(
    cod_coche VARCHAR(10), 
    Marca VARCHAR(40) NULL,
    Modelo VARCHAR(30) NULL
);


CREATE TABLE Reparaciones(
    cod_reparacion INT, 
    cod_mecanico VARCHAR(10) NOT NULL, 
    cod_coche VARCHAR(10) NOT NULL, 
    fecha_inicio_reparacion DATE NULL,
    fecha_fin_reparacion DATE NULL,
    horas_reparacion INT NULL, 
    total_factura FLOAT(12,2) NULL, 
    CHECK (cod_reparacion BETWEEN 0 AND 99999)
);

--3.Modificación de bases de datos, Tablas y creación de usuarios-- 

CREATE USER 'Raquel'@'%' IDENTIFIED BY '121224';
GRANT ALL PRIVILEGES ON Taller.* TO 'Raquel'@'%';

    -- Me conecto a este usuario desde HeidiSQL-- 

ALTER TABLE Mecanicos CHANGE Puesto Especialidad VARCHAR(30);

ALTER TABLE Reparaciones 
    MODIFY horas_reparacion INT CHECK (horas_reparacion >= 0),
    MODIFY total_factura FLOAT(12,2) CHECK (total_factura >= 0);

ALTER TABLE Mecanicos ADD CONSTRAINT PK_Mecanicos PRIMARY KEY (cod_mecanico);
ALTER TABLE Coches ADD CONSTRAINT PK_Coches PRIMARY KEY (cod_coche);
ALTER TABLE Reparaciones ADD CONSTRAINT PK_Reparaciones PRIMARY KEY (cod_reparacion);

ALTER TABLE Reparaciones
    ADD CONSTRAINT FK_Reparaciones_Mecanicos FOREIGN KEY (cod_mecanico)
    REFERENCES Mecanicos(cod_mecanico)
    ON UPDATE CASCADE
    ON DELETE CASCADE;

ALTER TABLE Reparaciones
    ADD CONSTRAINT FK_Reparaciones_Coches FOREIGN KEY (cod_coche)
    REFERENCES Coches(cod_coche)
    ON UPDATE CASCADE
    ON DELETE CASCADE;

    -- Vuelvo a conectarme a root desde HeidiSQL-- 

REVOKE ALL PRIVILEGES ON Taller.* FROM 'Raquel'@'%';
DROP USER 'Raquel'@'%';


--4.Operaciones con el Lenguaje de Manipulación de Datos I y Transacciones. 

START TRANSACTION;
SAVEPOINT inser_registros;

INSERT INTO Mecanicos (cod_mecanico, Nombre, Especialidad) 
VALUES 
('001', 'Ana', 'Chapista'),
('002', 'Luis', 'Pintura'),
('003', 'Juan', 'Electricidad');

INSERT INTO Coches (cod_coche, Marca, Modelo) 
VALUES 
('A-240', 'Seat', 'Ibiza'),
('A-141', 'Seat', 'Toledo'),
('A-380', 'Dacia', 'Sandero'),
('Z-441', 'Ford', 'Fiesta'),
('B-121', 'Opel', 'Corsa'),
('B-125', 'Seat', 'Ibiza'),
('A-550', 'Suzuki', 'Vitara');

INSERT INTO Reparaciones (cod_reparacion, cod_mecanico, cod_coche, fecha_inicio_reparacion, fecha_fin_reparacion, horas_reparacion, total_factura)
VALUES
(3465,'001','A-240','2024-7-10','2024-7-12',12,340.50),
(1234,'001','A-141','2024-7-20','2024-7-23',10,260.50),
(7654,'002','A-380','2024-7-08','2024-7-09',5,180.00),
(9283,'003','Z-441','2024-7-24','2024-7-30',57,530.50),
(3402,'002','B-121','2024-7-24','2024-7-26',12,290.60),
(5563,'002','B-121','2024-7-26','2024-7-27',4,98.20),
(7211,'003','Z-441','2024-7-27','2024-7-30',43,682.00),
(6500,'002','Z-441','2024-7-24','2024-7-30',5,150.00);

SAVEPOINT actual_registros;

UPDATE Mecanicos
SET Especialidad = 'Electrónica'
WHERE cod_mecanico = '003' AND Nombre = 'Juan';

SAVEPOINT borrar_registros;

DELETE FROM Reparaciones
WHERE cod_reparacion = 6500;

COMMIT;


-- 5.Operaciones con Lenguaje de Manipulación de Datos II y Copias de Seguridad-- 

SELECT Nombre FROM Mecanicos
WHERE Especialidad = 'Chapista';

SELECT * FROM reparaciones
WHERE fecha_fin_reparacion <= '2024-07-15';


SELECT c.cod_coche, 
       DATE_FORMAT(r.fecha_inicio_reparacion, '%d-%m-%Y') AS fecha_inicio_reparacion
FROM Reparaciones r
JOIN Coches c ON r.cod_coche = c.cod_coche
WHERE c.Marca = 'Seat';

SELECT r.cod_mecanico, 
       SUM(r.total_factura) AS total_facturado
FROM Reparaciones r
GROUP BY r.cod_mecanico;

SELECT r.cod_coche, 
       SUM(r.horas_reparacion) AS total_horas_reparacion
FROM Reparaciones r
GROUP BY r.cod_coche
ORDER BY total_horas_reparacion DESC
LIMIT 3;

SELECT m.Nombre AS nombre_mecanico, 
       c.Modelo AS modelo_coche, 
       r.horas_reparacion
FROM Reparaciones r
JOIN Mecanicos m ON r.cod_mecanico = m.cod_mecanico
JOIN Coches c ON r.cod_coche = c.cod_coche
WHERE r.horas_reparacion > 15;

SELECT c.cod_coche, 
       c.Marca, 
       c.Modelo, 
       r.total_factura
FROM Reparaciones r
JOIN Coches c ON r.cod_coche = c.cod_coche
WHERE r.total_factura > (SELECT AVG(total_factura) FROM Reparaciones);

CREATE VIEW Reparaciones_Seat AS
SELECT m.Nombre AS nombre_mecanico, 
       c.Modelo AS modelo_coche, 
       r.fecha_inicio_reparacion, 
       r.fecha_fin_reparacion
FROM Reparaciones r
JOIN Mecanicos m ON r.cod_mecanico = m.cod_mecanico
JOIN Coches c ON r.cod_coche = c.cod_coche
WHERE c.Marca = 'Seat';

mysqldump -u root -p --databases Taller --routines --comments --create-options > 

