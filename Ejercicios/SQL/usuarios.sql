create user "raquel@localhost" identified by "0494";

select current_user();

Select user from mysql.user;

grant all privileges on alumnos.* to "raquel@localhost";
show grants for "raquel@localhost";

create user "jose@localhost";
GRANT CREATE ON alumnos.* TO 'jose'@'localhost';

create user "ana@localhost";