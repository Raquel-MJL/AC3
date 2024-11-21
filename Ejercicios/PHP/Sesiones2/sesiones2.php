
<?php
		session_start();
?>
<!DOCTYPE html>
<html>
	<head>
	
		<title>Sesiones 2 | PHP</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/estilos_sesiones2.css">
		
	</head>
	<body>
		<h2> Ejercicio Sesiones 2</h2>
		<div id ="contenedor">
			<div class ="ejercicios">
				<p> Resultados:</p>
				<?php
		
		
        // Primero, comprobamos su ya existe la variable "numero" en la URL.
        // Si no existe, significa que el usuario tiene que escribir un número: tenemos que mostrarle el formulario.
        // Si ya existe, significa que el usuario ha escrito algún número y tenemos que comprobar si coincide con el aleatorio.
				if (!isset($_REQUEST["numero"])) 
				{
					// La variable "numero" NO existe. Vamos a pedirle que lo escriba en un formulario
					// ¿Y el número aleatorio? Si aún no existe, significa que es LA PRIMERA ejecución y aún tenemos que elegirlo.
					// En cambio, si ya existe, tendremos que recuperarlo para seguir usando el mismo aleatorio y no uno nuevo cada vez.
					//if (!isset($_SESSION["aleatorio"])) 
					{
						$_SESSION["intentos"] = 0;
						$_SESSION["aleatorio"] = rand(1,100);
					}
					
				}
				 else
				{
					// La variable "numero" existe. Eso indica que el usuario escribió un número en el formulario.
					// Vamos a recuperar ese número y a compararlo con el aleatorio.
					$num = $_REQUEST["numero"];
					$_SESSION["intentos"]++;
					?>
					<p>Tu número es el <?php echo $num;?></p>
					<?php
					if ($num > $_SESSION["aleatorio"])
					{
						?>
						<p>Mi número es MENOR.</p>
						<?php
					}
					else if ($num < $_SESSION["aleatorio"])
					{
						?>
						<p>Mi número es MAYOR.</p>
						<?php
					}
					else
					{
						?>
						<p>!ENHORABUENA, HAS ACERTADO¡</p>
						<p>Has necesitado <?php echo $_SESSION["intentos"]." intentos";?></p>
						<?php
						$_SESSION["intentos"] = 0;
						$_SESSION["aleatorio"] = rand(1,100);
					}
					// Volvemos a llamar a este mismo programa, pasándole como variables de URL el aleatorio
					// y el número de intentos, para seguir jugando con el mismo número secreto.
					//echo "<br><a href='numsecreto.php'>Sigue jugando...</a>";
				}	
				?>
					
					<p><a href='formulario.php'>Sigue jugando..........</a></p>
			</div>	
		</div>
	</body>
</html>