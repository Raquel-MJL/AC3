
	/* Uso con la Base de Dtos Ventas.*/
	
	/*Duplicar Tablas.*/

	/*Sólo Estructura a la misma base. */

		create table VendedoresCopia like Vendedores;
		create table VendedoresCopia4 like Vendedores;
		
	/*Sólo Estructura a otra base distinta. */
		
		create table Ventas2.Vendedores2 like Ventas.Vendedores;
	
	/*Inserción de registros en tablas de la misma base.*/

		insert into VendedoresCopia4
		SELECT * FROM Vendedores;

		insert into VendedoresCopia4
		SELECT * FROM Vendedores
		where seccion = "moda";

	/*Inserción de registros en tablas de distintas bases.*/

		insert into Ventas2.Vendedores2
		SELECT * FROM Ventas.Vendedores;

		insert into Ventas2.Vendedores2
		SELECT * FROM Ventas.Vendedores
		where seccion = "moda";

	/*Estructura y datos. */

		CREATE TABLE VendedoresCopia2
		SELECT * FROM Vendedores;

		CREATE TABLE VendedoresCopia3
		SELECT * FROM Vendedores
		where codven >= 3;

	/*Copiar Estructura y datos en una base diferente.*/

		CREATE TABLE Ventas2.Vendedores2
		SELECT * FROM Ventas.Vendedores;
		
		CREATE TABLE Ventas2.Vendedores2
		SELECT * FROM Ventas.Vendedores;
		where codven >= 3;


		

