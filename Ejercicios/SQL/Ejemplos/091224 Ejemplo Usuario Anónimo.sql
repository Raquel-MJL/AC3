

	CREATE USER ''@'localhost';

	SELECT USER,host FROM mysql.user;

	SHOW GRANTS FOR ""@"localhost";

	SELECT * FROM information_schema.files;
	GRANT SELECT ON operacionesbancarias.* TO ""@"localhost";