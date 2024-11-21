
<?php
		/* Ejercicio 3.*/

			if ($_REQUEST["color"] == "rojo")
			{
				setcookie("color", "#ff0000", time() + 60 * 60 * 24 * 365, "/");

			}
			
			elseif ($_REQUEST['color'] == "verde")
			{
				setcookie("color", "#00ff00", time() + 60 * 60 * 24 * 365, "/");
			}
			elseif ($_REQUEST['color'] == "azul")
			{
				setcookie("color", "#0000ff", time() + 60 * 60 * 24 * 365, "/");
			}
			
?>

<!DOCTYPE html>
<html lang="es">

	<head>
		<title>cookies</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/estilos-cookies1.css">
	</head>
	
	<body <?php if (isset($_COOKIE["color"])) echo " style='background:$_COOKIE[color]'" ?>>
		<h2> Ejercicio Cookies 1</h2>
		<div id ="contenedor">
			<div class ="ejercicios">
				<p> Ejercicio 1:</p>
		<?php
		
	/* Ejercicio 1.*/

		if (isset($_COOKIE["nombre"]))
		{ 	//Preguntar si existe la cookie.
			
			$contenido = $_COOKIE["nombre"]; // Si existe, el usuario ya ha visitado la página, de modo que le saludamos.
			?>
			<p>¡Bienvenido <?php echo $contenido; ?>!</p>
			<?php
		}
		else
		{ // Si es la primera visita, creamos la cookie.
			$nombre = "nombre";
			$valor = "Terminator";
			$caducidad = time() + ( 3600 * 24 * 60 ); // Caducidad al mes.
			setcookie($nombre, $valor, $caducidad);
		?>
			<p>Es su primera visita a la aplicación. ¡Bienvenido!</p>
		</div>
		<?php
		}
	
	/* Ejercicio 2.*/

		$nombre = "contador";
		$caducidad = time() +  60 * 60 * 24 * 30;
	
		if (isset($_COOKIE["contador"])) {
			/* Leer el contenido, incrementar el contador y rehacer la cookie. */
			$visitas = $_COOKIE["contador"]; 
			$visitas++;
			setcookie($nombre, $visitas, $caducidad);
		}
		else
		{
			/* Establecer primera visita y crear la cookie. */
			$visitas = 1;
			setcookie($nombre, $visitas, $caducidad);
		}
		
		?>
		<div class ="ejercicios">
			<p> Ejercicio 2:</p>
			<p>Es tu visita número <?php echo $visitas; ?>.</p>
		</div>	
	</div>	
		
	</body>
	
</html>