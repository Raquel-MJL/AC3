

	
		/*Base de datos Productos para ejercicio Conexión BD 5. */


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
