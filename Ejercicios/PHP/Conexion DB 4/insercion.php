
<!DOCTYPE html>
<html>
  <head>
  
     <title>Resultado de Inserción. Conexión a Base de datos | PHP y MySQL</title>
     <meta charset="UTF-8">
	 <link rel="stylesheet" href="css/estilosBD4.css">
	 
  </head>
	</head>
 
	<body>
		<h2>Mensaje de Confirmación o Error</h2>	
				
		<?php
		
		include("conexion.php");
		
		if (isset($_POST["insertar"]))
		{	
		
		
			if (strlen($_POST["titulo"]) <> 0 && strlen($_POST["musico"]) <> 0 && strlen($_POST["estilo"]) <> 0 && strlen($_POST["fecha"]) <> 0 && strlen($_POST["precio"])<>0)
			{
			
				$titulo = $_POST["titulo"] ;
				$musico = $_POST["musico"] ;
				$estilo = $_POST["estilo"];
				$fecha = $_POST["fecha"];
				$precio = (double) $_POST["precio"];
			
				$insertar = "INSERT INTO musica (titulo, artista_grupo, estilo,fecha_de_compra, precio) VALUES ('$titulo','$musico','$estilo', '$fecha','$precio')"; /*Campo codigo no aparece al ser autoincremental.*/
				
				$resultado = mysqli_query($conexion,$insertar);
			
				if($resultado)
					{
						
						echo "<h2 class = 'mensaje'> Registro insertado correctamente.</h2>";
						echo "<h2 class = 'mensaje'><a href='index.html'> Insertar nuevo registro. </a></h2>";
					}
					
					else
					{
						
						echo "<h2 class = 'mensaje'> Error. Registro no insertado.</h2>";
						
					}
			}
	
		
			else
				
			{
		
				echo "<h2 class = 'mensaje'> Faltan datos en algún campo. </h2>";
		
			}
		}
	
	/* Cerrar la conexión. */
	
		mysqli_close($conexion);
		
		?>
		
	</body>

</html>	