

-- Creación y puesta en uso de la BD.

  create database deporte;

  use deporte;

-- Creación de Tablas.

  create table socios(
  DNI char(8) primary key,
  nombre varchar(40),
  domicilio varchar(30));

  create table profesores(
  DNI char(8) primary key,
  nombre varchar(40),
  domicilio varchar(30));

  create table cursos(
  Codigo int auto_increment primary key,
  Deporte varchar(20),
  Dia varchar(15)check (dia in('lunes','martes','miercoles','jueves','viernes')),
  DNI_Profesor char(8),
  constraint FK_Pro foreign key (DNI_Profesor) references Profesores(DNI)
  on delete cascade on update CASCADE);

  create table inscripciones(
  DNI_Socio char(8) null,
  Codigo_Curso int null,
  NºMatricula int primary key,
  constraint FK_Soc Foreign key (DNI_Socio) references socios(DNI)
  on delete cascade on update cascade,
  constraint FK_Cur Foreign key (Codigo_Curso) references Cursos (Codigo)
  on delete cascade on update CASCADE);

-- Inserción de Registros.

 insert into socios values('30000000','Fabián Fuentes','Avilés 987');
 insert into socios values('31111111','Antonio Garcia','Mieres 65');
 insert into socios values('32222222','Héctor Huerta','Oviedo 534');
 insert into socios values('33333333','Inés Irala','Bulnes 345');

 insert into profesores values('22222222','Ana Acosta','Teruel 31');
 insert into profesores values('23333333','Carlos Casares','Málaga 45');
 insert into profesores values('24444444','Daniel Duarte','Ávila 87');
 insert into profesores values('25555555','Esteban López','Sevilla 12');

 insert into cursos (Deporte,Dia,DNI_Profesor) values('tenis','lunes','22222222');
 insert into cursos (Deporte,Dia,DNI_Profesor) values('tenis','martes','22222222');
 insert into cursos (Deporte,Dia,DNI_Profesor) values('natación','miercoles','22222222');
 insert into cursos (Deporte,Dia,DNI_Profesor) values('natación','jueves','23333333');
 insert into cursos (Deporte,Dia,DNI_Profesor) values('natación','viernes','23333333');
 insert into cursos (Deporte,Dia,DNI_Profesor) values('fútbol','jueves','24444444');
 insert into cursos (Deporte,Dia,DNI_Profesor) values('fútbol','lunes','24444444');
 insert into cursos (Deporte,Dia,DNI_Profesor) values('baloncesto','martes','24444444');

 insert into inscripciones  values('30000000',1,100);
 insert into inscripciones  values('30000000',3,200);
 insert into inscripciones  values('30000000',6,300);
 insert into inscripciones  values('31111111',1,400);
 insert into inscripciones  values('31111111',4,500);
 insert into inscripciones  values('32222222',8,600);

-- Vistas y Consultas.

-- 1.-----------------------------------------------
	 Create view VistaSocios
	 as
	 select * from Socios;

	 Create view VistaProfesores
	 as
	 select * from Profesores;

	 Create view VistaCursos
	 as
	 select * from Cursos;

	 Create view VistaInscripciones
	 as
	 select * from Inscripciones;

 -- 2. -------------------------

	 Create view Deportes
	 as
	 Select Socios.DNI as DNISocio, Socios.Nombre as 
	 NombreSocio, Socios.Domicilio as DomicilioSocio,
	 Profesores.DNI, Profesores.Nombre, Profesores.Domicilio, 
	 Cursos.*, Inscripciones.*
	 from socios
	   inner join inscripciones
	   on Socios.DNI = DNI_Socio
	   inner join cursos
	   on codigo = Codigo_curso
	   inner join profesores
	   on Profesores.DNI = DNI_Profesor;

-- 3.-----------------------------

	   Create view CursosProfes
	   as
	   Select Nombre, deporte from cursos inner join profesores
	   on DNI = DNI_Profesor;

 -- 4.---------------------------
				
	-- Con left y right (full) join. (Reunión externa completa).

	   Create view ClubDeportivo as 
	   Select Socios.DNI as DNI_Socio, Socios.Nombre as 
	   Nombre_Socio, deporte, dia, Profesores.Nombre as Nombre_Profesor
	   from socios
	   left join inscripciones
	   on Socios.DNI = DNI_Socio
	   left join cursos
	   on codigo = Codigo_curso
	   left join profesores
	   on Profesores.DNI = DNI_Profesor
	   
	   Union
	   
	   Select Socios.DNI as DNI_Socio, Socios.Nombre as 
	   Nombre_Socio, deporte, dia, Profesores.Nombre as Nombre_Profesor
	   from socios
	   right join inscripciones
	   on Socios.DNI = DNI_Socio
	   right join cursos
	   on codigo = Codigo_curso
	   right join profesores
	   on Profesores.DNI = DNI_Profesor;

	-- Con inner join.(Reunión natural).

	   Create view ClubDeportivo2
	   as 
	   Select Socios.DNI as DNI_Socio, Socios.Nombre as 
	   Nombre_Socio, deporte, dia, Profesores.Nombre as Nombre_Profesor
	   from socios
	   inner join inscripciones
	   on Socios.DNI = DNI_Socio
	   inner join cursos
	   on codigo = Codigo_curso
	   inner join profesores
	   on Profesores.DNI = DNI_Profesor;
	   
	   -- Variante con inner join.
	   
	   Create view clubdeportivo3
	   as 
	   Select Socios.DNI as DNI_Socio, Socios.Nombre as 
	   Nombre_Socio, deporte, dia, Profesores.Nombre as Nombre_Profesor
	   FROM socios inner JOIN inscripciones INNER JOIN cursos INNER JOIN profesores
	   on Socios.DNI = inscripciones.DNI_Socio and
	   codigo = Codigo_curso and
	   Profesores.DNI = DNI_Profesor;

-- 5.-----------------------------

	  Select * from Deportes;
	  Select * from ClubDeportivo;
	  Select * from ClubDeportivo2;
	  Select * from CursosProfes;
	  Select * from VistaCursos;
	  Select * from VistaProfesores;
	  Select * from VistaSocios;
	  Select * from VistaInscripciones;
	 
-- 6.------------------------------

	  select deporte,dia,count(Nombre_Socio) as cantidad
	  from ClubDeportivo
	  where deporte is not null
	  group by deporte,dia
	  order by cantidad desc;
	  
	  select deporte,count(Nombre_Socio) as cantidad
	  from ClubDeportivo
	  where deporte is not null
	  group by deporte
	  order by cantidad desc;

-- 7.------------------------------

	  select deporte,dia from ClubDeportivo
	  where Nombre_socio is null and deporte is not null;

-- 8.------------------------------

	  select Nombre_socio from ClubDeportivo
	  where deporte is null and Nombre_socio is not null;

-- 9.-------------------------------

	  select Nombre_profesor from ClubDeportivo 
	  where deporte is null and Nombre_profesor is not null;

-- 10.-------------------------------------

	  select distinct Nombre_socio, DNI_Socio from ClubDeportivo
	  where deporte is not null and Nombre_Socio is not null;

-- 11.-------------------------------------


	  select distinct Nombre_profesor, dia
	  from ClubDeportivo where dia is not NULL -- and Nombre_profesor is not null;

-- 12.-------------------------------------

	  select distinct Nombre_profesor,dia
	  from ClubDeportivo where dia is not null -- and Nombre_profesor is not null;
	  order by dia;

-- 13.------------------------------------
  

	  select Nombre_profesor,substring(dia,1,3)
	  from ClubDeportivo    
	  where dia is not null
	  order by  
		case
		when dia = 'lunes' then 1
		when dia = 'martes' then 2
		when dia = 'miercoles' then 3
		when dia = 'jueves' then 4
		when dia = 'viernes' then 5
			end;

-- 14.-------------------------------------

	select Nombre_socio from ClubDeportivo
	where deporte='tenis' and dia='lunes';

-- 15.--------------------------------------

		create view VistaInscrip
		as
		
	-- Opción a)

	
		
		select codigo, deporte, dia,
		(select count(*)
		from inscripciones 
		where Codigo_Curso = Codigo) as "Cantidad Inscritos"
		from cursos;

	-- Opción b)
	
		select codigo, deporte, dia, count(dni_Socio) as "Cantidad Inscritos" from inscripciones
		right join cursos
		on codigo = codigo_curso
		group by codigo;
            
	-- opcion c)
	
		select codigo, deporte, dia, count(dni_socio) as "Cantidad Inscritos" from cursos
		left join inscripciones
		on codigo = codigo_curso
		group by codigo;

-- 16.-------------------------------------

	  select * from VistaInscrip;
	  -- order by cantidad desc;

-- 17.-------------------------------------

	insert into VistaSocios (DNI, Nombre, Domicilio) values ('12345678','Pilar González','Pontevedra 22');

-- 18.-------------------------------------	

	insert into Deportes(DNISocio, NombreSocio, DomicilioSocio) VALUES ('87654321','Sofía Gómez','Cáceres 22');

-- 19.-------------------------------------	

	-- AL TENER LA VISTA REGISTROS DE VARIAS TABLAS ENLAZADAS, HAY QUE BORRARLOS DESDE LA VISTA DE LA TABLA PRINCIPAL:

	delete from VistaSocios
	where DNI = '87654321';