

<?php

	// Datos de conexión.
		try
			{
				$conexion = mysqli_connect("localhost", "root", "", "Agenda");
			}
		catch (Exception $e)
			{
				echo "Error al establecer una conexión con la base de datos Agenda";
			}
	// Consulta por código.
		
		$vacio=isset($_POST["code"]) && !empty($_POST["code"]);
		if($vacio)
		{
			$codigo = $_POST["code"];
		}
		else{
			header("location:formulario.php");
		?>
			
		<?php
		
		}
	
?>

<!DOCTYPE html>
	<html>
		<head>
		
			<title>Base de datos y PHP 2</title>
			<meta charset="UTF-8">
			<link rel="stylesheet" href="css/estilos_agenda.css">
						
		</head>
		<body>
			
		<h2>Ejercicio Conexión 2: Consultas.</h2>
		<div id ="contenedor">
			<div class ="ejercicios">
			
					<?php
							$consulta =	"select * from agenda where codigo = " .$codigo;			
						$resultado = mysqli_query($conexion,$consulta);
						$filas = mysqli_num_rows($resultado);
				
						if($filas == 0)
						{
					?> 
							<p>Este código no existe. Introduzca uno nuevo.</p>
					<?php	
						}
						else
						{			
							while ($registro = mysqli_fetch_assoc($resultado))
							{//Empieza código del bucle while.
															
					?> 
									<p><?php echo $registro["codigo"].", " .$registro["nombre"].", ".$registro["apellidos"].", ".$registro["email"].", ".$registro["telefono"]; ?></p>
					<?php		
							} // Termina while.
							
						} //Termina else.	
								
						mysqli_close ($conexion);
					
  					?>

			</div>
			<div class ="ejercicios">
				<a href ="formulario.php">Escribir un código nuevo</a>
			</div>
		</div>
	</body>
		
	</html>