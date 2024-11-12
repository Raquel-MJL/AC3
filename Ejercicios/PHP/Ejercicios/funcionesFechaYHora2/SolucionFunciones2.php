
<!DOCTYPE html>
<html>
	<head>
	
		<title>Fechas y Horas 2 | PHP</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/estilos_fechas2.css">
		
		<?php
			
			/* Archivo con las funciones de fecha y hora para el ejercicio Fechas y Horas 2.*/
			
			/* Ejercicio 1. */

				if (isset($_POST["zona_horaria"]))
				{
					$zona_horaria = $_POST["zona_horaria"];

					if (!in_array($zona_horaria, timezone_identifiers_list()))
					{
						echo "La zona horaria seleccionada no es válida.";
						exit;
					}
				
				date_default_timezone_set($zona_horaria);

				$fecha = date("d-m-Y");
				$hora = date("H:i:s");
				}

			/* Ejercicio 2. */

				if (isset($_POST["fecha2A"])) 
				{
					$fecha1 = $_POST["fecha2A"];
					$fecha2 = $_POST["fecha2B"];
				
					$fecha1_objeto = new DateTime($fecha1);
					$fecha2_objeto = new DateTime($fecha2);
				
					$diferencia = $fecha2_objeto->diff($fecha1_objeto);
					$numero_dias = $diferencia->format("%d");
				}

			/* Ejercicio 3. */

			if (isset($_POST["fecha3A"])) 
			{
				$fecha3 = $_POST["fecha3A"];

				// Convertir la fecha a un objeto DateTime.
				$fecha_objeto = new DateTime($fecha3);

				// Obtener el mes de la fecha.
				$mes = $fecha_objeto->format("m");

				// Comprobar si la fecha es verano.
				if ($mes >= 6 && $mes <= 9)
				{
					$mensaje3 = "Es verano.";
				}
				else
				{
					$mensaje3 = "No es verano.";
				}
			}

			/* Ejercicio 4. */

			if (isset($_POST["fecha4A"])) 
			{
				$fecha4 = $_POST["fecha4A"];
			
				$fecha_objeto = new DateTime($fecha4);
			
				// Obtener el día de la semana de la fecha.
				$dia_semana = $fecha_objeto->format("w");
			
				// Comprobar si la fecha es fin de semana.
				if ($dia_semana == 0 || $dia_semana == 6)
				{
					$mensaje4 = "Es fin de semana.";
				}
				else
				{
					$mensaje4 = "No es fin de semana.";
				}
			}
	
		?>

	</head>
	<body>
		<h2> Resultados Ejercicio Fechas y Horas 2</h2>
		<div id ="contenedor">
			<div class="ejercicios">
				<table border = "1" cellspacing = "0">
					<tr>
						<th>Zona Horaria</th>
						<th>Fecha Actual</td>
						<th>Hora Actual</td>
					</tr>
					<tr>
						<td><?php echo $zona_horaria; ?></th>
						<td><?php echo $fecha; ?></td>
						<td><?php echo $hora; ?></td>
					</tr>
				</table>
			</div>

			<div class="ejercicios">
				<table border = "1" cellspacing = "0">
					<tr>
						<th>Diferencia entre Fechas</th>
					</tr>
					<tr>
						<td><?php echo $numero_dias. " días"; ?></th>
					</tr>
				</table>
			</div>

			<div class="ejercicios">
				<table border = "1" cellspacing = "0">
					<tr>
						<th>Estación</th>
						</tr>
					<tr>
						<td><?php echo $fecha3. " " .$mensaje3; ?></th>
					</tr>
				</table>
			</div>
			
			<div class="ejercicios">
				<table border = "1" cellspacing = "0">
					<tr>
						<th>Fin de Semana</th>
					</tr>
					<tr>
						<td><?php echo $fecha4. " " .$mensaje4; ?></th>
					</tr>
				</table>
			</div>
		</div>
	</body>
	
</html>