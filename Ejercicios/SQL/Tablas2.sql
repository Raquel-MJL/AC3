	
	/* Ejercicio 1. Base de datos Productos. */


			create database if not exists Productos; 
			
			use Productos;
			
		/* Tabla Fabricantes con restricciones a nivel de tabla */
		
			create table if not exists Fabricantes (
			Cod_Fabricante int unsigned auto_increment,
			nombre VARCHAR(80) not null,
			primary key (Cod_Fabricante));
			
		/* Tabla Productos con restricciones a nivel de tabla */
		
			create table if not exists Productos (
			Cod_Producto int unsigned auto_increment,
			nombre varchar(100) not null,
			precio float not null,
			Cantidad_Stock int unsigned not null,
			IdFabricante int unsigned not null,
			primary key (Cod_Producto),
			foreign key (IdFabricante) references Fabricantes(Cod_Fabricante)
			on update cascade on delete cascade);
			
	/* Ejercicio 2. Base de datos Literatura. */

			create database if not exists Literatura; 
			
			use Literatura;
			
		/* Tabla Autores. */
		
			create table if not exists Autores (
			IdAutor char(5) primary key,
			Nombre varchar(40) not null default "",
			Apellido1 varchar(30) not null default "",
			Apellido2 varchar(30) not null default "",
			Pseudonimo varchar(25) not null default "");
			
		/* Tabla Editoriales. */
		
			create table if not exists Editoriales (
			Cod_Editorial int unsigned auto_increment primary key,
			Nombre varchar(30) not null,
			Direccion varchar(50) not null default "Dirección desconocida");	
				
		/* Tabla Libros. */
		
			create table if not exists Libros (
			ISBN varchar(20) primary key,
			IdAutor char (5) not null,
			Titulo varchar(50) not null,
			Estilo varchar(50) not null,
			IdEditorial int unsigned not null,
			Fecha_Edicion date not null,
			foreign key (IdAutor) references Autores(IdAutor)
			on update cascade on delete cascade,		
			foreign key (IdEditorial) references Editoriales(Cod_Editorial)
			on update cascade on delete cascade);
			
		
					
				
			