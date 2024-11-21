
<!DOCTYPE html>
<html>
  <head>
  
     <title>Resultado de Inserción. Conexión a Base de datos | PHP y MySQL</title>
     <meta charset="UTF-8">
	 <link rel="stylesheet" href="css/estilosBD5.css">
	 
  </head>
	</head>
 
	<body>
						
		<?php
		
		include("conexion.php");
		
	/* Base de datos Productos. Consultas. */
		
		$consulta1 = "select distinct * from fabricantes";
		$consulta2 = "select distinct * from productos";
			
	/* Tabla Fabricantes.*/

	if (isset($_POST["consultarf"]))
	{	
		$resultado1 = mysqli_query($conexion,$consulta1);
		echo "<h2 class = 'mensaje'> Tabla Fabricantes.</h2>";
		?> 
		<div id ="contenedor">
			<div class ="ejercicios">
				<table border="1">
					<tr>
						<th>Código del fabricante</th>
						<th>Nombre del fabricante</th>
					</tr>
		<?php
		
		while ($registro1 = mysqli_fetch_assoc($resultado1))
		{
			
		?> 
				<tr>
					<td><?php echo $registro1["Cod_Fabricante"];?> </td>
					<td><?php echo $registro1["nombre"];?> </td>
				</tr>
			</div>
		</div>
			<?php
						
		}
		echo "<h2 class = 'mensaje'><a href='index.html'> Volver al formulario.</a></h2>";
	}	 
	
	/* Tabla Productos.*/

	if (isset($_POST["consultarp"]))
	{	
		$resultado2 = mysqli_query($conexion,$consulta2);
		echo "<h2 class = 'mensaje'> Tabla Productos.</h2>";
		?> 
		<div id ="contenedor">
			<div class ="ejercicios">
				<table border="1">
					<tr>
						<th>Código del producto</th>
						<th>Nombre del producto</th>
						<th>Precio</th>
						<th>Cantidad en stock</th>
						<th>Código del fabricante</th>
					</tr>
		<?php
		while ($registro2 = mysqli_fetch_assoc($resultado2))
		{
			?> 
					<tr>
						<td><?php echo $registro2["Cod_Producto"];?> </td>
						<td><?php echo $registro2["nombre"];?> </td>
						<td><?php echo $registro2["precio"];?> </td>
						<td><?php echo $registro2["Cantidad_Stock"];?> </td>
						<td><?php echo $registro2["IdFabricante"];?> </td>
					</tr>
				</div>
			</div>
				<?php
							
			}

		 echo "<h2 class = 'mensaje'><a href='index.html'> Volver al formulario.</a></h2>";
	}


	/* Cerrar la conexión. */
	
		mysqli_close($conexion);
		
	?>
		
	</body>

</html>	