
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