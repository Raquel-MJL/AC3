SELECT CURRENT_USER(); 

CREATE USER 'jefazo'@'localhost' IDENTIFIED BY '26gt7x';

GRANT ALL PRIVILEGES ON *.* TO 'jefazo'@'localhost' WITH GRANT OPTION;

REVOKE SUPER ON *.* FROM 'jefazo'@'localhost';

SHOW GRANTS FOR 'jefazo'@'localhost';

USE bd_mundo;

SELECT CodPais, Nombre, Continent FROM country;

DESCRIBE country;

CREATE USER 'operador'@'localhost' IDENTIFIED BY '34ffa4';
USE OperacionesBancarias;

GRANT INSERT, UPDATE, DELETE, SELECT ON OperacionesBancarias.Proveedores TO 'operador'@'localhost';
GRANT SELECT, INSERT, UPDATE ON OperacionesBancarias.Componentes TO 'operador'@'localhost';
GRANT SELECT, INSERT, UPDATE ON OperacionesBancarias.Articulos TO 'operador'@'localhost';
GRANT SELECT ON OperacionesBancarias.Envios TO 'operador'@'localhost';
GRANT EXECUTE ON PROCEDURE OperacionesBancarias.* TO 'operador'@'localhost';

