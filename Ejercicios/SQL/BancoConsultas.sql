
	/* Base de Datos BancoConjuntos.*/

		create schema BancoConjuntos;
		use BancoConjuntos;

	/*Tablas.*/
		
		create table Clientes		
		(Cod_Cliente varchar(8) primary key,
		Nombre varchar (50) null,
		Ciudad varchar (35) null);
		
		create table Sucursales
		(Cod_Sucursal varchar(4) primary key,
		Nombre varchar (30) null,
		Ciudad varchar (40) null);
		
		create table Prestamos
		(Num_prestamo int(6) primary key,
		Cod_Sucursal varchar(4) null,
		Cod_Cliente varchar(8) null,
		Importe decimal (12,2) null,
		foreign key (Cod_Cliente) references Clientes(Cod_Cliente)
		on update cascade on delete cascade,
		foreign key(Cod_Sucursal) references Sucursales(Cod_Sucursal)
		on update cascade on delete cascade);
		
		create table Depositos
		(Num_cuenta int primary key,
		Cod_Sucursal varchar(4) null,
		Cod_Cliente varchar(8) null,
		Saldo decimal (12,2) null,
		foreign key (Cod_Cliente) references Clientes(Cod_Cliente)
		on update cascade on delete cascade,
		foreign key (Cod_Sucursal) references Sucursales(Cod_Sucursal)
		on update cascade on delete cascade);
	
	/*Registros.*/
	
		insert into Clientes values
		("98TF34R4","Pepe","Getafe"),
		("12568BB5","Juan","Getafe"),
		("09JUH549","Ana","Leganés"),
		("1234564M","Lola","Villaviciosa de Odón"),
		("782A30G5","Cristina","Madrid");
		
		insert into Sucursales values
		("1455","Bankia 1","Getafe"),
		("1456","Bankia 2","Getafe"),
		("2390","Santander 5","Leganés"),
		("5634","ING 1","Móstoles"),
		("9025","ING 2","Madrid");
		
		insert into Prestamos values
		(166455,"1455","98TF34R4",20000.00),
		(901456,"1455","98TF34R4",45000.00),
		(223890,"5634","12568BB5",15456.50),
		(563942,"2390","12568BB5", 10000.00),
		(190348,"1456","09JUH549",45000.00);
		
		insert into Depositos values
		(6645,"1455","98TF34R4",3000.00),
		(9456,"1455","12568BB5",8500.00),
		(2270,"1456","12568BB5",11056.00),
		(5139,"2390","09JUH549",21382.00),
		(9146,"5634","09JUH549",17843.00);
				

--Ejercicios y Consultas-- 

-- 1. Obtener el nombre de clientes y ciudades donde viven, que cumplan con la condición de tener un préstamo.
SELECT C.Nombre, C.Ciudad
FROM Clientes C
JOIN Prestamo P ON C.Cod_Cliente = P.Cod_Cliente;

-- 2. Obtener los códigos de los clientes que tienen, una cuenta, un préstamo o ambas cosas, en la sucursal 1456.
SELECT DISTINCT C.Cod_Cliente
FROM Clientes C
LEFT JOIN Prestamo P ON C.Cod_Cliente = P.Cod_Cliente AND P.Cod_Sucursal = 1456
LEFT JOIN Deposito D ON C.Cod_Cliente = D.Cod_Cliente AND D.Cod_Sucursal = 1456
WHERE P.Num_prestamo IS NOT NULL OR D.Num_cuenta IS NOT NULL;

-- 3. Mostrar el nombre de los clientes que tienen un préstamo en la sucursal 5634, pero que no tienen un depósito en dicha sucursal.
SELECT C.Nombre
FROM Clientes C
JOIN Prestamo P ON C.Cod_Cliente = P.Cod_Cliente
LEFT JOIN Deposito D ON C.Cod_Cliente = D.Cod_Cliente AND D.Cod_Sucursal = 5634
WHERE P.Cod_Sucursal = 5634 AND D.Num_cuenta IS NULL;

-- 4. Mostrar los datos de los clientes que tienen depósito y préstamo al mismo tiempo en la sucursal 1455.
SELECT C.*
FROM Clientes C
JOIN Prestamo P ON C.Cod_Cliente = P.Cod_Cliente AND P.Cod_Sucursal = 1455
JOIN Deposito D ON C.Cod_Cliente = D.Cod_Cliente AND D.Cod_Sucursal = 1455;

-- 5. Obtener los nombres de los clientes que tienen préstamo, depósito o ambas cosas usando INNER JOIN y combinación de conjuntos.
SELECT C.Nombre
FROM Clientes C
JOIN Prestamo P ON C.Cod_Cliente = P.Cod_Cliente
UNION
SELECT C.Nombre
FROM Clientes C
JOIN Deposito D ON C.Cod_Cliente = D.Cod_Cliente;

-- 6. Obtener los nombres de los clientes que tienen préstamo, depósito, o ambas cosas en la sucursal 2390, usando INNER JOIN y combinación de conjuntos.
SELECT C.Nombre
FROM Clientes C
JOIN Prestamo P ON C.Cod_Cliente = P.Cod_Cliente AND P.Cod_Sucursal = 2390
UNION
SELECT C.Nombre
FROM 

		