
<!DOCTYPE html>
<html>
	<head>
		
		<title>JSON 5 | JSON y PHP</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/estilos.css">
		<?php 
			include "datos.php";

			$codigo = "";
			$nombre = "";
			$apellidos ="" ;
			$antiguedad ="";
			$puesto ="" ;
			$sueldo = "";
			
			$empleado = json_decode($datos,false);
			$error = json_last_error();
		?>
	
	</head>
	
	<body>
		
		<h2>Ejercicio JSON 5</h2>
		<div id ="contenedor">
			
		<div class = "tablas">
			<?php 
				if($error != 0)
				{
					$mensaje = json_last_error_msg();
			?>	
					<h2><?php echo $mensaje;?> </h2>
					<h2>No se puede generar la tabla.</h2>
			<?php 	
				}
				else
				{	$codigo = $empleado->id;
					$nombre = $empleado->nombre;
					$apellidos = $empleado->apellidos;
					$antiguedad = $empleado->antiguedad;
					$puesto = $empleado->categoria;
					$sueldo = $empleado->salario;
			?>
					<table cellspacing="0">
					<caption>Datos de los Empleados</caption>
						<tr>
							<th>Código del Empleado</th>
							<th>Nombre</th>
							<th>Apellidos</th>
							<th>Año de Alta</th>
							<th>Puesto</th>
							<th>Sueldo</th>
						</tr>
						<tr>
							<td><?php echo $codigo; ?></td>
							<td><?php echo $nombre; ?></td>
							<td><?php echo $apellidos; ?></td>
							<td><?php echo $antiguedad; ?></td>
							<td><?php echo $puesto; ?></td>
							<td><?php echo $sueldo; ?></td>
						</tr>
					</table>
			<?php 
				}
			?>
		</div>		
	</div>
	</body>
</html>
