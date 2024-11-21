
<!DOCTYPE html>
<html>
	<head>
	
		<title>Base de datos y PHP 2 |Formulario</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/estilos_agenda.css">
		
	</head>
		
	<body>

		<h2>Ejercicio Conexión 2: Consultas.</h2>
        <h2> Agenda- Búsqueda por código</h2>
		<div id ="contenedor">
			<div class ="ejercicios">
				
				<form id="f1" method="post" action="consulta_agenda.php" name ="for1">
				  	
					<p><label for ="no">Introduce el código de la persona que buscas:</label>
					<input type="text" id ="cod"name="code"></p>
					<p><input type="submit" id ="boton" value="Buscar"></p>
				  
				</form>
			</div>
		
		</div>
	</body>
</html>