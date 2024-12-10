create database prueba;

use prueba;

create table prueba(
    a int not null check (a >= 100 and a <= 1000),
    b varchar (20) not null Check (b like "A%"),
    c float not null,
    d date not null check (d >= "2022-01-01" and d <= "2022-12-31"),
    e varchar(50) not null check (e in ("Inglés", "Francés","Alemán","Español")),                   
    check (c between 200.0 and 500.0));
	
	/* Ejemplo de registro a insertar */
	
	INSERT INTO PRUEBA VALUES (560,"Avión",350.00,"2022-05-27","Francés");