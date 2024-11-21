
	/* Ejercicio 1. Base de datos y tabla Coches con restricciones a nivel columna */

	create database if not exists coches;
	
	use coches;
	
	create table if not exists coches(
	matricula varchar(10) primary key comment "Campo Clave Primaria",
	marca varchar(20) not null comment "Campo para almacenar cadenas de caracteres de longitud variable que representan la marca de un coche",
	modelo varchar(25) not null comment "Campo para almacenar cadenas de caracteres de longitud variable que representan la modelo de un coche",
	color varchar(25) not null comment "Campo para almacenar cadenas de caracteres de longitud variable que representan la color de un coche",
	precio decimal(8,2) not null comment "Campo numérico real con 2 decimales");

	/* Ejercicio 2. Base de datos y tabla Socios con restricciones a nivel columna */

	create database if not exists socios;
	
	use socios;
	
	create table if not exists socios(
	cod_socio int(5) unsigned zerofill primary key,
	dni varchar(10) not null unique,
	nombre varchar(50) not null,
	email varchar(30) not null default "Sin Correo Electrónico",
	fecha_alta date not null);
	
	/* Ejercicio 1. Base de datos y tabla Coches con restricciones a nivel tabla */
/*
	create database if not exists coches;
	
	use coches;
	
	create table if not exists coches(
	matricula varchar(10)  comment "Campo Clave Primaria",
	marca varchar(20) not null comment "Campo para almacenar cadenas de caracteres de longitud variable que representan la marca de un coche",
	modelo varchar(25) not null comment "Campo para almacenar cadenas de caracteres de longitud variable que representan la modelo de un coche",
	color varchar(25) not null comment "Campo para almacenar cadenas de caracteres de longitud variable que representan la color de un coche",
	precio decimal(8,2) not null comment "Campo numérico real con 2 decimales",
	primary key(matricula));
*/
	/* Ejercicio 2. Base de datos y tabla Socios con restricciones a nivel tabla */
/*
	create database if not exists socios;
	
	use socios;
	
	create table if not exists socios(
	cod_socio int(5) unsigned zerofill,
	dni varchar(10) not null,
	nombre varchar(50) not null ,
	email varchar(30) not null default "Sin Correo Electrónico",
	fecha_alta date not null,
	primary key (cod_socio),
	unique (dni));
	*/
	
	/* Alternativa si se quiere nombrar la restricción.
	constraint primaria	primary key (cod_socio),
	constraint unica unique (dni));*/
	
