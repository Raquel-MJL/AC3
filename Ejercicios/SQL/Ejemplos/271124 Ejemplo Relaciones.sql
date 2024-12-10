	
	
	
	/* Claves foránea y principal simple.*/
	
	create database if not exists enlaces1;
	
	use enlaces1;
	
	create table if not exists a(
	uno int primary key ,
	dos varchar(20) not null,
	tres varchar(25) not null);
	
	create table if not exists b(
	cuatro int ,
	cinco varchar(20) not null,
	seis varchar(25) not null,
	primary key(cuatro),
	FOREIGN key(cuatro) references a(uno));
	
	
	/* Clave foránea compuesta, con el mismo número de campos que la principal con la que enlaza,
	pero con nombres diferentes.*/
	
	create database if not exists enlaces2;
	
	use enlaces2;
	
	create table if not exists a(
	uno int ,
	dos varchar(20) not null,
	tres varchar(25) not null,
	primary key(uno,dos));
	
	create table if not exists b(
	cuatro int ,
	cinco varchar(20) not null,
	seis varchar(25) not null,
	primary key(cuatro,cinco),
	FOREIGN key(cuatro,cinco) references a(uno,dos));