
	/* Ejercicio Copias de Seguridad 2. */

		-- 1. Creación en Windows de la carpeta BackupsBD.
		
		-- 2. Creación en Windows de la carpeta CopiasEjercicios2.
		
		-- 3. Poner en uso la base cuyo contenido se va a exportar o copiar.

				USE Suministros;

		-- 4. Copia de seguridad textual de las tablas:
			-- (Puede ser necesario cambiar el valor de la variable 'secure-file-priv' en el archivo my.ini y reiniciar servidor).

			-- a. Proveedores.
	
				SELECT * INTO OUTFILE 'c:\\backupsBD\\copiasejercicio2\\copiaproveedores.txt'
				FIELDS TERMINATED BY ','
				LINES TERMINATED BY '\n\r'
				FROM proveedores;
				
			-- b. Componentes.
	
				SELECT * INTO OUTFILE 'c:\\backupsBD\\copiasejercicio2\\copiacomponentes.txt'
				FIELDS TERMINATED BY ','
				LINES TERMINATED BY '\n\r'
				FROM componentes;
				
			-- c. Articulos.
	
				SELECT * INTO OUTFILE 'c:\\backupsBD\\copiasejercicio2\\copiaarticulos.txt'
				FIELDS TERMINATED BY ','
				LINES TERMINATED BY '\n\r'
				FROM articulos;
			
			-- d. Envios.
	
				SELECT * INTO OUTFILE 'c:\\backupsBD\\copiasejercicio2\\copiaenvios.txt'
				FIELDS TERMINATED BY ','
				LINES TERMINATED BY '\n\r'
				FROM envios;
				
				
		-- 5. Abrir los archivos de texto y comprobar que están los datos de las tablas copiados.
		
		-- 6. Borrado de la base de datos suministros.
		
				DROP DATABASE IF EXISTS Suministros;

		-- 7. Creación de la base de datos Suministros y sus tablas sin registros de datos.
		
			-- Base de datos Suministros y puesta en uso.*/
		
				CREATE DATABASE SUMINISTROS;
		
			-- Puesta en uso.
		
				USE SUMINISTROS;
		
			-- Tablas.

				CREATE TABLE PROVEEDORES
				(CODPRO VARCHAR(2) PRIMARY KEY,
				NOMBRE VARCHAR(10) NULL,
				CATEGORIA INT NULL CHECK (CATEGORIA>=0),
				CIUDAD VARCHAR(10) NULL);

				CREATE TABLE COMPONENTES
				(CODCO VARCHAR(2) PRIMARY KEY,
				NOMBRE VARCHAR(3) NULL,
				COLOR VARCHAR(10) NULL,
				PESO INT NULL CHECK (PESO>=0),
				CIUDAD VARCHAR(10) NULL,
				FECHA DATE NULL);

				CREATE TABLE ARTICULOS
				(CODAR VARCHAR(2) PRIMARY KEY,
				NOMBRE VARCHAR(15) NULL,
				CIUDAD VARCHAR(10) NULL,
				FECHA DATE NULL);

				CREATE TABLE ENVIOS
				(CODPRO VARCHAR(2) NOT NULL,
				CODCO VARCHAR(2) NOT NULL,
				CODAR VARCHAR(2) NOT NULL,
				CANTIDAD INT NOT NULL CHECK (CANTIDAD>=0),
				FOREIGN KEY (CODPRO) REFERENCES PROVEEDORES (CODPRO)
				ON UPDATE CASCADE ON DELETE CASCADE,
				FOREIGN KEY (CODCO) REFERENCES COMPONENTES (CODCO)
				ON UPDATE CASCADE ON DELETE CASCADE,
				FOREIGN KEY (CODAR)REFERENCES ARTICULOS (CODAR)
				ON UPDATE CASCADE ON DELETE CASCADE);

		-- 8. Restauración o recuperación de los datos de cada tabla. 

				LOAD DATA INFILE 'c:\\backupsBD\\copiasejercicio2\\copiaproveedores.txt'
				INTO TABLE proveedores
				FIELDS TERMINATED BY ','
				LINES TERMINATED BY '\n\r';
				-- (codpro, nombre, categoria, ciudad); -- Opcional.
				
				LOAD DATA INFILE 'c:\\backupsBD\\copiasejercicio2\\copiacomponentes.txt'
				INTO TABLE componentes
				FIELDS TERMINATED BY ','
				LINES TERMINATED BY '\n\r';
				-- (codco, nombre, color, peso, ciudad, fecha); -- Opcional.
				 
				LOAD DATA INFILE 'c:\\backupsBD\\copiasejercicio2\\copiaarticulos.txt'
				INTO TABLE articulos
				FIELDS TERMINATED BY ','
				LINES TERMINATED BY '\n\r';
				-- (codar, nombre, ciudad, fecha); -- Opcional.
				
				LOAD DATA INFILE 'c:\\backupsBD\\copiasejercicio2\\copiaenvios.txt'
				INTO TABLE envios
				FIELDS TERMINATED BY ','
				LINES TERMINATED BY '\n\r';
				-- (codpro, codco, codar, cantidad); -- Opcional.

		-- 9. Confirmación de datos recuperados.

				SELECT * FROM proveedores;
				SELECT * FROM componentes;
				SELECT * FROM articulos;
				SELECT * FROM envios;