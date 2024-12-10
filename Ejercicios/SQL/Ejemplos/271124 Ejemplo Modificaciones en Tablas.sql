		
	/*Modificaciones con Alter en una tabla*/
	
		create database modificaciones;

		use modificaciones;

		create table modificaciones(
			a int not null,
			b varchar (20) not null,
			c float not null,
			d date not null,
			e varchar(50) not null );   

		/*Modificaciones*/

		/* Cambiar nombre a la tabla. */
		
		ALTER TABLE modificaciones RENAME modificaciones2;
		
		SHOW TABLES;
		
		/* Cambiar al nombre original. */
		
		ALTER TABLE modificaciones2 RENAME modificaciones;
		
		SHOW TABLES;
		
		/* Cambiar juego de caracteres. */
		
		ALTER TABLE modificaciones CHARACTER SET LATIN1;

		/* Cambiar motor de base de datos. */
		
		ALTER TABLE modificaciones Engine MyISAM;

		/*Añadir campo al final de la tabla*/
			
		alter table modificaciones
		ADD f varchar(40) not null;		

		/*Añadir campo al principio de la tabla*/

		alter table modificaciones
		add aa int not null first;	

		/*Añadir un campo intercalado entre otros*/

		alter table modificaciones
		add cc date not null after c;	

		/*Añadir varios campos al final*/

		alter table modificaciones
		add g decimal(4,2) NOT null,
		add h char(12) not NULL;

		/*Añadir varios campos al principio*/

		alter table modificaciones
		add j decimal(4,2) NOT null first,
		add k char(12) not NULL first;

		/*Añadir varios campos intercalados*/

		alter table modificaciones
		add m decimal(4,2) NOT null AFTER a,
		add n char(12) not NULL AFTER d;
		
		/*Añadir varios campos en distintas posiciones*/

		alter table modificaciones
		add o decimal(4,2) NOT null AFTER b,
		add p char(12) not NULL,
		add q char(12) not NULL first;
		
		/*Cambiar el nombre a un campo*/

		alter table modificaciones
		change aa a0 int;

		/*Cambiar el tipo de datos a un campo*/
		
		alter table modificaciones
		modify a double;

		/* Cambiar el nombre y el tipo a un campo */

		alter table modificaciones
		change cc c0 double;

		/* Borrar una(uno sólo drop) o varias columnas (varios drop) */

		alter table modificaciones
		drop column a0,
		drop column c0;

		/* Añadir una clave primaria*/

		alter table modificaciones
		add primary key (a);

		/* Añadir una clave única*/

		alter table modificaciones
		add constraint unica unique (d);

		/* Añadir valor por defecto*/

		alter table modificaciones
		alter f set default "Comentarios";

		/* Añadir una condición para un campo*/

		alter table modificaciones
		add CHECK(g <5000.00);

		/*Borrar clave primaria*/

		alter table modificaciones
		drop primary key;

		/*Borrar clave única*/
		alter table modificaciones
		drop index unica;




