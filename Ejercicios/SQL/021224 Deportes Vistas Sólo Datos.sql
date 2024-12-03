  create database deporte;

  use deporte;

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