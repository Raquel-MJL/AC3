

<?php
	session_start();
 ?>

<!DOCTYPE html>
<html>
	<head>
	
		<title>Sesiones 1 - Métodos de sesión | PHP</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/estilos_sesiones1.css">
		
	</head>
	<body>
		<div id ="contenedor">
		<?php

			if( isset( $_POST["crear"]))
			{
				$clave = $_POST["articulo"];
				$_SESSION[$clave] = $_POST["precio"];
			
		?>
				<div class ="ejercicios">
					<h2>Ejercicio Sesiones</h2>
					<p> Sesión creada y variables de sesión cargadas correctamente</p>
					<a href="tabla_variables.php">Mostrar las variables de sesión</a>
				</div>
		<?php
			}
			else if(isset($_POST["borrar"]))
			{
				session_unset();
				session_destroy();
		?>
				<div class ="ejercicios">
				<h2>Ejercicio Sesiones</h2>
				<p>Variables borradas. Sesión cerrada.</p>
		<?php
			}
		?>
		</div>
	</body>
</html>