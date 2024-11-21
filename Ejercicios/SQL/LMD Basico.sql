	
	
	
	/* Base de datos Socias. */


		create database if not exists Socios; 
			
		use Socios;
			
	/* Tabla Socios */

		create table Socios(
		NOrden int auto_increment primary key,
		DNI varchar(10) null,
		Nombre varchar (40) null,
		Domicilio varchar (50) null,
		Cuota decimal (8,2) null);
		
	/* Inserción de registros */	
	
		insert into Socios values ("30000000T", "Fabián Fuentes", "C/ Avilés 7", 30.0);
		insert into Socios values ("31111111A", "Antonio García", "C/ Mieres 5", 50.0);
		insert into Socios values ("32222222B", "Héctor Huerta", "C/ Oviedo 4", 30.0);
		insert into Socios values ("33333333N", "Inés Irala", "C/ Bulnes 3", 45.0);
		
		select * from Socios;
		
	/* Actualizaciones.*/	
	
		Update Socios
		set Domicilio = "C/ Gijón 5"
		where Nombre = "Antonio García";
		
		select * from Socios;
	
		Update Socios
		set Cuota = 35.00
		where cuota = 30.00;
		
		select * from Socios;
		
		
		Update Socios
		set Cuota = 00.00;
		
		select * from Socios;
		
				
	/* Eliminaciones*/	
	
		delete from Socios
		where DNI = "33333333N";
		
		select * from Socios;
		
		
		delete from Socios;
		
		select * from Socios;
		
		truncate table Socios;
		
		select * from Socios;
