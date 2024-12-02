
	/* Base de Datos.*/

		Create database Residencia;
		use Residencia;

	/*Tablas.*/

		create table ciudades
		(Codigo int primary key,
		Nombre varchar(30) null);

		create table Personas 
		(DNI varchar (10) primary key,
         Nombre varchar (30) null,
		Ciudad int null,
		Edad int check(edad > 0),
		foreign key (Ciudad) references ciudades(Codigo)
        on update cascade on delete cascade);

	/*Datos.*/

		insert into ciudades values
		(1, "Cuenca"), (2, "Toledo"), (3, "Madrid");

		insert into Personas values
		("12345678P","Pepe", 3, 31),
		("16744278Z","Paco", 3, 19),
		("45634398Q","Lola", 1, 34),
		("76845678R","Mar�a", 2, 17),
		("17892678T","Eva", 1, 24),
		("16745378Y","Juan", 1, 28),
		("25623678G","Ana", 2, 45);


		/*Subconsultas.*/



	-- 1. Seleccionar el nombre de todas las personas que viven en Cuenca.
SELECT Nombre
FROM Personas
WHERE Ciudad = (SELECT Codigo FROM ciudades WHERE Nombre = 'Cuenca');

-- 2. Seleccionar la ciudad donde vive la persona de más edad.
SELECT Nombre
FROM ciudades
WHERE Codigo = (SELECT Ciudad FROM Personas ORDER BY Edad DESC LIMIT 1);

-- 3. Seleccionar el nombre de todas las personas que viven en Cuenca o Toledo.
SELECT Nombre
FROM Personas
WHERE Ciudad IN (SELECT Codigo FROM ciudades WHERE Nombre IN ('Cuenca', 'Toledo'));

-- 4. Seleccionar el nombre de las personas que viven en ciudades donde existen otras personas con más edad.
SELECT P.Nombre
FROM Personas P
WHERE P.Ciudad IN (
    SELECT Ciudad
    FROM Personas
    WHERE Edad > P.Edad
    GROUP BY Ciudad
);

-- 5. Seleccionar el nombre de las personas que tienen una edad mayor que las personas que viven en Madrid.
SELECT Nombre
FROM Personas
WHERE Edad > (SELECT AVG(Edad) FROM Personas WHERE Ciudad = (SELECT Codigo FROM ciudades WHERE Nombre = 'Madrid'));

-- 6. Seleccionar el nombre de las personas que tienen una edad mayor que alguna de las personas que viven en Madrid.
SELECT Nombre
FROM Personas
WHERE Edad > ALL (SELECT Edad FROM Personas WHERE Ciudad = (SELECT Codigo FROM ciudades WHERE Nombre = 'Madrid'));

-- 7. Seleccionar el nombre y la ciudad de alguna persona cuya edad esté por debajo de la media.
SELECT Nombre, (SELECT Nombre FROM ciudades WHERE Codigo = P.Ciudad) AS Ciudad
FROM Personas P
WHERE Edad < (SELECT AVG(Edad) FROM Personas);
