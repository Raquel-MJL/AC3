


		/*Subconsultas.*/


	/* 1.*/

		select nombre from Personas
		where ciudad = (Select codigo from ciudades where nombre ='Cuenca');
		
		select Personas.nombre from Personas inner join Ciudades
		on codigo = ciudad
		where Ciudades.nombre = 'Cuenca'; /*Sin subconsulta.*/

	/* 2.*/

		select Ciudades.nombre from Ciudades,Personas
		where Codigo = Ciudad and edad in (Select max(edad) from personas);
		
		select Ciudades.nombre from Ciudades inner join Personas
		on Codigo = Ciudad
		where edad = (Select max(edad) from personas);

	/* 3.*/

		select nombre from Personas
		where ciudad in (Select codigo from ciudades where nombre in ('Cuenca','Toledo'));

		select personas.nombre from ciudades INNER JOIN personas
		ON codigo = ciudad
		where ciudades.nombre in ('Cuenca','Toledo');
	
	/* 4.*/

		select nombre from Personas P1
		where exists (select * from Personas P2 where 
		(P1.Edad < P2.Edad) and (P1.Ciudad = P2.Ciudad)) ;

	/* 5.*/

		select nombre from Personas
		where edad > all (Select edad from Personas,Ciudades 
		where codigo = ciudad and Ciudades.nombre = 'Madrid');
		
				
		SELECT Nombre, Edad FROM personas
		WHERE Edad > (SELECT MAX(edad) FROM personas 
              INNER JOIN ciudades
              ON Ciudad = Codigo
              WHERE Ciudades.Nombre = "Madrid");


	/* 6.*/

		select nombre from Personas
		where edad > any (Select edad from Personas INNER join Ciudades 
		on codigo = ciudad
		where Ciudades.nombre = 'Madrid');
		
			
		SELECT nombre FROM Personas
		WHERE Edad > (SELECT MIN(Edad) FROM Personas INNER JOIN Ciudades
		ON Ciudad = Codigo
		WHERE Ciudades.nombre = "Madrid");
	
	/* 7.*/

		Select Personas.nombre,Ciudades.Nombre from Personas,Ciudades
		where Ciudad = Codigo and Edad <(Select avg(edad) from Personas);
		
		Select Personas.nombre,Ciudades.Nombre from Personas inner join Ciudades
		on Ciudad = Codigo 
		where Edad <(Select avg(edad) from Personas);
		