CREATE DATABASE IF NOT EXISTS Socios2DB;
USE Socios2DB;
CREATE TABLE IF NOT EXISTS Socios(
	NOrden int auto_increment primary key,
	DNI varchar(10) NULL UNIQUE,
	Nombre varchar (40) null,
	Domicilio varchar (50) null,
	Cuota decimal (8,2) null
	);

INSERT IGNORE INTO Socios (DNI, Nombre, Domicilio, Cuota) VALUES
('30000000T', 'Fabián Fuentes', 'C/ Avilés 7', 30.0),
('31111111A', 'Antonio García', 'C/ Mieres 5', 50.0),
('32222222B', 'Héctor Huerta', 'C/ Oviedo 4', 30.0),
('33333333N', 'Inés Irala', 'C/ Bulnes 3', 45.0);



UPDATE Socios 
SET Domicilio = 'C/ Gijón 15'
WHERE DNI = '31111111A';



UPDATE Socios
SET Cuota = 35.0
WHERE Cuota = 30.0;

DELETE FROM socios
WHERE DNI = '33333333N';


DELETE FROM socios; 



INSERT IGNORE INTO Socios (DNI, Nombre, Domicilio, Cuota) VALUES
('30000000T', 'Fabián Fuentes', 'C/ Avilés 7', 30.0),
('31111111A', 'Antonio García', 'C/ Mieres 5', 50.0),
('32222222B', 'Héctor Huerta', 'C/ Oviedo 4', 30.0),
('33333333N', 'Inés Irala', 'C/ Bulnes 3', 45.0);

TRUNCATE TABLE socios;


INSERT IGNORE INTO Socios (DNI, Nombre, Domicilio, Cuota) VALUES
('30000000T', 'Fabián Fuentes', 'C/ Avilés 7', 30.0),
('31111111A', 'Antonio García', 'C/ Mieres 5', 50.0),
('32222222B', 'Héctor Huerta', 'C/ Oviedo 4', 30.0),
('33333333N', 'Inés Irala', 'C/ Bulnes 3', 45.0);

UPDATE Socios
SET Cuota = 0.0;



SELECT * FROM socios;
