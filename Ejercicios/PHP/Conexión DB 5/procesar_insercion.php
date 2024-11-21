
<!DOCTYPE html>
<html>
  <head>
  
     <title>Resultado de Inserción. Conexión a Base de datos | PHP y MySQL</title>
     <meta charset="UTF-8">
	 <link rel="stylesheet" href="css/estilosBD5.css">
	 
  </head>
	</head>
 
	<body>
		<h2>Mensaje de Confirmación o Error</h2>	
				
		<?php
		
		include("conexion.php");
		
		/* Base de datos Productos. Inserción*/
		
		/* Tabla Fabricantes.*/

		if (isset($_POST["insertarf"]))
		{	
		
		
			if (strlen($_POST["nombref"]))
			{
			
				$nombref = $_POST["nombref"] ;
							
				$insertarf = "INSERT INTO fabricantes (nombre) VALUES ('$nombref')"; /*Campo Cod_Fabricante no aparece al ser autoincremental.*/
				
				$resultadof = mysqli_query($conexion,$insertarf);
			
				if($resultadof)
					{
						
						echo "<h2 class = 'mensaje'> Registro insertado correctamente en la tabla Fabricantes.</h2>";
						echo "<h2 class = 'mensaje'><a href='index.html'> Volver al formulario.</a></h2>";
					}
					
					else
					{
						
						echo "<h2 class = 'mensaje'> Error. Registro no insertado en la tabla Fabricantes.</h2>";
						
					}
			}
	
		
			else
				
			{
		
				echo "<h2 class = 'mensaje'> Faltan datos en algún campo por incluir en la tabla Fabricantes. </h2>";
				echo "<h2 class = 'mensaje'><a href='index.html'> Volver al formulario.</a></h2>";
		
			}
		}

	/* Tabla Productos.*/

	if (isset($_POST["insertarp"]))
	{	
	
	
		if (strlen($_POST["nombrep"]) <> 0 && strlen($_POST["preciop"]) <> 0 && strlen($_POST["cantidadp"]) <> 0 && strlen($_POST["codigofp"])<> 0 )
		{
		
			$nombrep = $_POST["nombrep"] ;
			$preciop = (double) $_POST["preciop"] ;
			$cantidadp = (int) $_POST["cantidadp"] ;
			$codigofp = $_POST["codigofp"];
					
			$insertarp = "INSERT INTO productos (nombre, precio, cantidad_stock, idfabricante) VALUES ('$nombrep', '$preciop', '$cantidadp','$codigofp')"; /*Campo Cod_Producto no aparece al ser autoincremental.*/
			
			$resultadop = mysqli_query($conexion,$insertarp);
		
			if($resultadop)
				{
					
					echo "<h2 class = 'mensaje'> Registro insertado correctamente en la tabla Productos.</h2>";
					echo "<h2 class = 'mensaje'><a href='index.html'> Volver al formulario.</a></h2>";
				}
				
				else
				{
					
					echo "<h2 class = 'mensaje'> Error. Registro no insertado en la tabla Productos.</h2>";
					
				}
		}

	
		else
			
		{
	
			echo "<h2 class = 'mensaje'> Faltan datos en algún campo por incluir en la tabla Productos. </h2>";
			echo "<h2 class = 'mensaje'><a href='index.html'> Volver al formulario.</a></h2>";
	
		}
	}

	/* Cerrar la conexión. */
	
		mysqli_close($conexion);
		
	?>
		
	</body>

</html>	