

<?php
	// Datos de conexión.
		$conexion = mysqli_connect("localhost", "root", "", "Agenda");
	// Consultas.
		//$consulta =	"select * from agenda";	
		//$consulta =	"select * from agenda where codigo = '1234'";// Ejemplo de consulta con condiciones.
		$consulta =	"select nombre, email from agenda"; // Ejemplo de consulta con condiciones.
?>

<!DOCTYPE html>
	<html>
		<head>
		
			<title>Base de datos y PHP 1</title>
			<meta charset="UTF-8">
			<link rel="stylesheet" href="css/estilos_agenda.css">
		
		</head>
		<body>
			
		<h2>Ejercicio Conexión 1: Consultas.</h2>
		<div id ="contenedor">
			<div class ="ejercicios">
			
					<?php
						$resultado = mysqli_query($conexion,$consulta);	
						while ($registro = mysqli_fetch_assoc($resultado))
						{ //Empieza código del bucle while.
					?> 
					
						<!--<p><?php //echo $registro["codigo"].", " .$registro["nombre"].", ".$registro["apellidos"].", ".$registro["email"].", ".$registro["telefono"]; ?></p>-->
						<p><?php echo $registro["nombre"].", ".$registro["email"]; ?></p>	
					<?php }//Termina código del bucle while.
					
					mysqli_close ($conexion);
					
					?>
					
				 </table>
			</div>
		</div>
		</body>
		
	</html>