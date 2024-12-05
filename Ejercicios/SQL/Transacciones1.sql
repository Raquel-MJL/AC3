

START TRANSACTION;

use residencia;

Select * from ciudades; 

SAVEPOINT punto_guardado1;

INSERT INTO ciudades (Codigo, Nombre) VALUES
(4,'Alicante'),
(5,'Zamora'),
(6,'Guadalajara');

Select * from ciudades; 

SAVEPOINT punto_guardado2; 

UPDATE ciudades
SET Nombre = 'Valencia'
WHERE Nombre = 'Guadalajara';

Select * from ciudades; 

SAVEPOINT punto_guardado3; 

DELETE FROM ciudades
WHERE Nombre = 'Valencia';

SELECT * FROM ciudades;

ROLLBACK TO SAVEPOINT punto_guardado3;

COMMIT;

SELECT * FROM ciudades;