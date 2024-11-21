

		/*Inserción de datos en una base de datos desde formulario. Ejercicio Conexión BD 4.*/

			CREATE DATABASE musica;

			USE musica;

			CREATE TABLE musica (
				codigo INT AUTO_INCREMENT PRIMARY KEY,
				titulo VARCHAR(50),
				artista_grupo VARCHAR(50),
				estilo VARCHAR(10),
				fecha_de_compra DATE,
				precio DECIMAL (10,2)
				);
