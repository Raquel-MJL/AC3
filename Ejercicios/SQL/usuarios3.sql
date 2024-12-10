-- Paso 1: Crear el usuario 'gerente' y asignarle una contraseña
CREATE USER 'gerente'@'localhost' IDENTIFIED BY '123456';

-- Paso 2: Asignar permisos globales al usuario 'gerente'
GRANT ALL PRIVILEGES ON *.* TO 'gerente'@'localhost' WITH GRANT OPTION;
FLUSH PRIVILEGES;

-- Paso 3: Conectar al servidor como el usuario 'gerente'

-- Paso 4: Consultar los permisos del usuario 'gerente'
SHOW GRANTS FOR 'gerente'@'localhost';

-- Paso 5: Crear los usuarios 'cajero1', 'cajero2' y un usuario anónimo
-- Crear cajero1
CREATE USER 'cajero1'@'localhost' IDENTIFIED BY 'abcd1';

-- Asignar permisos a cajero1 sobre la base de datos Operacionesbancarias
GRANT SELECT, INSERT, DELETE, UPDATE ON Operacionesbancarias.* TO 'cajero1'@'localhost';

-- Crear cajero2
CREATE USER 'cajero2'@'localhost' IDENTIFIED BY 'abcd2';

-- Asignar permisos a cajero2 sobre la base de datos Operacionesbancarias
GRANT SELECT, INSERT, DELETE, UPDATE ON Operacionesbancarias.* TO 'cajero2'@'localhost';

-- Crear usuario anónimo
CREATE USER ''@'localhost' IDENTIFIED BY '';

-- Por defecto, asigna el permiso 'USAGE'
GRANT USAGE ON *.* TO ''@'localhost';

-- Paso 6: Conectar con los usuarios 'cajero1', 'cajero2' y el usuario anónimo
-- (Realizar la conexión desde phpMyAdmin, Workbench, HeidiSQL o la consola)

-- Paso 7: Consultar los permisos de cada usuario
-- Para cajero1
SHOW GRANTS FOR 'cajero1'@'localhost';

-- Para cajero2
SHOW GRANTS FOR 'cajero2'@'localhost';

-- Para el usuario anónimo
SHOW GRANTS FOR ''@'localhost';

-- Paso 8: Operaciones con el usuario 'gerente'
-- Pon en uso la base de datos Operacionesbancarias
USE Operacionesbancarias;

-- Crear la vista SaldoClientes
CREATE VIEW SaldoClientes AS
SELECT cliente_codigo, cliente_nombre, cuenta_codigo, saldo, divisa
FROM clientes
JOIN cuentas ON clientes.cliente_codigo = cuentas.cliente_codigo;

-- Paso 9: Operaciones con el usuario 'cajero1'
-- Pon en uso la base de datos Operacionesbancarias para el usuario cajero1
USE Operacionesbancarias;

-- Insertar un nuevo cliente
INSERT INTO clientes (cliente_codigo, cliente_nombre, cliente_apellido1, cliente_apellido2, direccion, localidad, telefono)
VALUES ('45ZB3', 'Luis Miguel', 'Arias', 'Sánchez', 'C\\ Carina 10', 'Fuenlabrada', '123321123');

-- Insertar una cuenta para el cliente
INSERT INTO cuentas (cuenta_codigo, cliente_codigo, saldo, divisa)
VALUES ('478112', '45ZB3', 0, 'euros');

-- Confirmar la inserción
SELECT * FROM clientes WHERE cliente_codigo = '45ZB3';
SELECT * FROM cuentas WHERE cliente_codigo = '45ZB3';

-- Paso 10: Operaciones con el usuario 'cajero2'
-- Pon en uso la base de datos Operacionesbancarias para el usuario cajero2
USE Operacionesbancarias;

-- Eliminar el cliente con código 45A84
DELETE FROM clientes WHERE cliente_codigo = '45A84';

-- Confirmar la eliminación
SELECT * FROM clientes WHERE cliente_codigo = '45A84';
SELECT * FROM cuentas WHERE cliente_codigo = '45A84';
SELECT * FROM movimientos WHERE cliente_codigo = '45A84';

-- Paso 11: Asignar permiso de consulta de la vista al usuario anónimo
GRANT SELECT ON SaldoClientes TO ''@'localhost';

-- Paso 12: Operaciones con el usuario anónimo
-- Pon en uso la base de datos Operacionesbancarias para el usuario anónimo
USE Operacionesbancarias;

-- Consultar la vista SaldoClientes
SELECT * FROM SaldoClientes;

-- Paso 13: Visualizar información sobre los usuarios creados
SELECT host, user FROM mysql.user;

-- Paso 14: Revocar permisos de todos los usuarios
REVOKE ALL PRIVILEGES ON *.* FROM 'gerente'@'localhost';
REVOKE ALL PRIVILEGES ON *.* FROM 'cajero1'@'localhost';
REVOKE ALL PRIVILEGES ON *.* FROM 'cajero2'@'localhost';
REVOKE ALL PRIVILEGES ON *.* FROM ''@'localhost';
FLUSH PRIVILEGES;

-- Paso 15: Eliminar a todos los usuarios
DROP USER 'gerente'@'localhost';
DROP USER 'cajero1'@'localhost';
DROP USER 'cajero2'@'localhost';
DROP USER ''@'localhost';

-- Paso 16: Confirmar la eliminación de los usuarios
SELECT host, user FROM mysql.user;
