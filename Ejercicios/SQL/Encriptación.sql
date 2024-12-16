-- 1. Crear el usuario 'director' con la contraseña 'abcdef'
CREATE USER 'director'@'localhost' IDENTIFIED BY 'abcdef';

-- 2. Asignar todos los privilegios al usuario 'director' sobre todas las bases
GRANT ALL PRIVILEGES ON *.* TO 'director'@'localhost' WITH GRANT OPTION;
FLUSH PRIVILEGES;

-- 3. Conectar al servidor con el usuario 'director' (esto se hace desde la línea de comandos):
-- mysql -u director -p

-- 4. Crear la base de datos 'Hospital' y seleccionarla
CREATE DATABASE Hospital;
USE Hospital;

-- 5. Crear la tabla 'Medicos'
CREATE TABLE Medicos (
    Idmedico VARBINARY(20) PRIMARY KEY,
    Nombre VARCHAR(30) DEFAULT NULL,
    Apellidos VARCHAR(50) DEFAULT NULL,
    Especialidad VARCHAR(50) DEFAULT NULL
);

-- 6. Crear la tabla 'Pacientes' con la relación con 'Medicos'
CREATE TABLE Pacientes (
    NºSS VARBINARY(20) PRIMARY KEY,
    Idmedico VARBINARY(20),
    Nombre VARCHAR(30) DEFAULT NULL,
    Apellidos VARCHAR(50) DEFAULT NULL,
    Edad INT CHECK (Edad >= 0),
    Habitacion VARBINARY(20) DEFAULT NULL,
    FechaIngreso DATE DEFAULT NULL,
    FOREIGN KEY (Idmedico) REFERENCES Medicos(Idmedico)
    ON UPDATE CASCADE ON DELETE CASCADE
);

-- 7. Insertar datos en la tabla 'Medicos' encriptados
INSERT INTO Medicos (Idmedico, Nombre, Apellidos, Especialidad)
VALUES
(AES_ENCRYPT('23AZ4', 'clave_encriptacion'), 'Antonio', 'Fernández Martín', AES_ENCRYPT('Pediatría', 'clave_encriptacion')),
(AES_ENCRYPT('TU76X', 'clave_encriptacion'), 'Eva', 'López Sanz', AES_ENCRYPT('Cardiología', 'clave_encriptacion')),
(AES_ENCRYPT('56OW9', 'clave_encriptacion'), 'Marta', 'Martín Ruiz', AES_ENCRYPT('Traumatología', 'clave_encriptacion'));

-- 8. Insertar datos en la tabla 'Pacientes' encriptados
INSERT INTO Pacientes (NºSS, Idmedico, Nombre, Apellidos, Edad, Habitacion, FechaIngreso)
VALUES
(AES_ENCRYPT('28/34567899', 'clave_encriptacion'), AES_ENCRYPT('23AZ4', 'clave_encriptacion'), 'Luis', 'Fernández Gómez', 4, AES_ENCRYPT('112', 'clave_encriptacion'), '2023-05-08'),
(AES_ENCRYPT('28/89594239', 'clave_encriptacion'), AES_ENCRYPT('TU76X', 'clave_encriptacion'), 'Ana', 'Hernández Sanz', 52, AES_ENCRYPT('321', 'clave_encriptacion'), '2023-09-02'),
(AES_ENCRYPT('28/49523239', 'clave_encriptacion'), AES_ENCRYPT('TU76X', 'clave_encriptacion'), 'Juan', 'Hernández Sanz', 66, AES_ENCRYPT('311', 'clave_encriptacion'), '2023-07-05'),
(AES_ENCRYPT('28/89823231', 'clave_encriptacion'), AES_ENCRYPT('23AZ4', 'clave_encriptacion'), 'Borja', 'Hernández Sanz', 7, AES_ENCRYPT('121', 'clave_encriptacion'), '2023-01-11'),
(AES_ENCRYPT('28/88735235', 'clave_encriptacion'), AES_ENCRYPT('TU76X', 'clave_encriptacion'), 'Javier', 'López López', 59, AES_ENCRYPT('326', 'clave_encriptacion'), '2023-03-23'),
(AES_ENCRYPT('28/24695243', 'clave_encriptacion'), AES_ENCRYPT('56OW9', 'clave_encriptacion'), 'María José', 'Vidal Padilla', 22, AES_ENCRYPT('278', 'clave_encriptacion'), '2023-09-01'),
(AES_ENCRYPT('28/23784722', 'clave_encriptacion'), AES_ENCRYPT('56OW9', 'clave_encriptacion'), 'Cristina', 'Patiño Gómez', 45, AES_ENCRYPT('269', 'clave_encriptacion'), '2023-08-30'),
(AES_ENCRYPT('28/23381442', 'clave_encriptacion'), AES_ENCRYPT('23AZ4', 'clave_encriptacion'), 'Rosa', 'Martín Sánchez', 5, AES_ENCRYPT('169', 'clave_encriptacion'), '2023-09-27');

-- 9. Consultar los datos de la tabla 'Medicos' sin desencriptar
SELECT * FROM Medicos;

-- 10. Consultar los datos de la tabla 'Pacientes' sin desencriptar
SELECT * FROM Pacientes;

-- 11. Consultar la tabla 'Medicos' con los datos desencriptados
SELECT 
    AES_DECRYPT(Idmedico, 'clave_encriptacion') AS Idmedico,
    Nombre,
    Apellidos,
    AES_DECRYPT(Especialidad, 'clave_encriptacion') AS Especialidad
FROM Medicos;

-- 12. Consultar la tabla 'Pacientes' con los datos desencriptados
SELECT 
    AES_DECRYPT(NºSS, 'clave_encriptacion') AS NºSS,
    AES_DECRYPT(Idmedico, 'clave_encriptacion') AS Idmedico,
    Nombre,
    Apellidos,
    Edad,
    AES_DECRYPT(Habitacion, 'clave_encriptacion') AS Habitacion,
    FechaIngreso
FROM Pacientes;

-- 13. Mostrar datos de médicos y pacientes que están tratando
SELECT 
    m.AES_DECRYPT(Idmedico, 'clave_encriptacion') AS Idmedico,
    m.Nombre AS NombreMedico,
    m.Apellidos AS ApellidosMedico,
    m.AES_DECRYPT(Especialidad, 'clave_encriptacion') AS Especialidad,
    p.AES_DECRYPT(NºSS, 'clave_encriptacion') AS NºSS,
    p.Nombre AS NombrePaciente,
    p.Apellidos AS ApellidosPaciente
FROM Medicos m
JOIN Pacientes p ON m.Idmedico = p.Idmedico;

-- 14. Mostrar pacientes ingresados en septiembre de 2023
SELECT 
    AES_DECRYPT(NºSS, 'clave_encriptacion') AS NºSS,
    Nombre,
    Apellidos,
    AES_DECRYPT(Habitacion, 'clave_encriptacion') AS Habitacion
FROM Pacientes
WHERE FechaIngreso BETWEEN '2023-09-01' AND '2023-09-30';

-- 15. Mostrar el identificador del médico, su nombre, apellidos y el número de pacientes que tiene
SELECT 
    m.AES_DECRYPT(Idmedico, 'clave_encriptacion') AS Idmedico,
    m.Nombre AS NombreMedico,
    m.Apellidos AS ApellidosMedico,
    COUNT(p.NºSS) AS NumeroPacientes
FROM Medicos m
LEFT JOIN Pacientes p ON m.Idmedico = p.Idmedico
GROUP BY m.Idmedico, m.Nombre, m.Apellidos;

-- 16. Hacer una copia de seguridad de la base de datos 'Hospital' usando mysqldump (esto se hace en la terminal o línea de comandos)
-- mysqldump -u root -p --databases Hospital > /ruta/a/BackupsBD/hospital_copia.sql

-- 17. Borrar la base de datos 'Hospital'
DROP DATABASE Hospital;

-- 18. Confirmar la eliminación de la base de datos 'Hospital'
SHOW DATABASES;

-- 19. Eliminar al usuario 'director'
DROP USER 'director'@'localhost';

-- 20. Recuperar la base de datos 'Hospital' usando la copia de seguridad (esto se hace en la terminal o línea de comandos)
-- mysql -u root -p < /ruta/a/BackupsBD/hospital_copia.sql
