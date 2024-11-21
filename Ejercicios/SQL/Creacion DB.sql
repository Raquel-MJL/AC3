-- Crear base de datos Prueba1 si no existe
create database if not exists Prueba1;

-- Crear base de datos Prueba2 con juego de caracteres latin1 y colación latin1_swedish_ci si no existe
create schema if not exists Prueba2 character set latin1 collate latin1_swedish_ci;

-- Crear base de datos Prueba3 con colación big5_bin (esto debe hacerse con la interfaz gráfica de phpMyAdmin u otro SGBD)

-- Crear base de datos Prueba4 con colación latin5_bin si no existe
create database if not exists Prueba4 collate latin5_bin;

-- Actualizar el panel de bases de datos para visualizar la base Prueba4 (esto se hace en la interfaz gráfica)

-- Usar la base de datos Prueba4 desde la consola
use Prueba4;

-- Mostrar todas las bases de datos
show databases;

-- Modificar base de datos Prueba2 para cambiar su juego de caracteres a utf8 y colación a utf8_general_ci
alter schema Prueba2 character set utf8 collate utf8_general_ci;

-- Modificar base de datos Prueba4 para cambiar su juego de caracteres a utf8 y colación a utf8_unicode_ci desde la consola
alter schema Prueba4 character set utf8 collate utf8_unicode_ci;

-- Borrar las bases de datos Prueba1 y Prueba2 si existen
drop database if exists Prueba1;
drop database if exists Prueba2;

-- Borrar la base de datos Prueba3 desde el entorno visual de phpMyAdmin u otro SGBD (seleccionar y eliminar manualmente)

-- Borrar la base de datos Prueba4 desde la consola
drop database if exists Prueba4;

-- Confirmar que las 4 bases de datos han sido borradas
show databases;
-- Crear base de datos Prueba1 si no existe
create database if not exists Prueba1;

-- Crear base de datos Prueba2 con juego de caracteres latin1 y colación latin1_swedish_ci si no existe
create schema if not exists Prueba2 character set latin1 collate latin1_swedish_ci;

-- Crear base de datos Prueba3 con colación big5_bin (esto debe hacerse con la interfaz gráfica de phpMyAdmin u otro SGBD)

-- Crear base de datos Prueba4 con colación latin5_bin si no existe
create database if not exists Prueba4 collate latin5_bin;

-- Actualizar el panel de bases de datos para visualizar la base Prueba4 (esto se hace en la interfaz gráfica)

-- Usar la base de datos Prueba4 desde la consola
use Prueba4;

-- Mostrar todas las bases de datos
show databases;

-- Modificar base de datos Prueba2 para cambiar su juego de caracteres a utf8 y colación a utf8_general_ci
alter schema Prueba2 character set utf8 collate utf8_general_ci;

-- Modificar base de datos Prueba4 para cambiar su juego de caracteres a utf8 y colación a utf8_unicode_ci desde la consola
alter schema Prueba4 character set utf8 collate utf8_unicode_ci;

-- Borrar las bases de datos Prueba1 y Prueba2 si existen
drop database if exists Prueba1;
drop database if exists Prueba2;

-- Borrar la base de datos Prueba3 desde el entorno visual de phpMyAdmin u otro SGBD (seleccionar y eliminar manualmente)

-- Borrar la base de datos Prueba4 desde la consola
drop database if exists Prueba4;

-- Confirmar que las 4 bases de datos han sido borradas
show databases;
