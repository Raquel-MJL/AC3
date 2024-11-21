
<!DOCTYPE html>
<html>
	<head>
		<title>Formulario 6 Resultados 6.1 | PHP</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/estilos.css">
	</head>
	
	<body>
		<h2>Resultados Ejercicio Formularios 6.1.</h2>
		<div id ="contenedor">
			<div class ="ejercicios">
			  <?php
			 
			  if ($_REQUEST["menu1"] == 3)	
			  {
				echo "Sr/Sra.: " . $_REQUEST["nom"] . " Debe pagar impuestos por sus ganancias.<br>.";
			  } else
			  {
				echo "Sr/Sra.: " . $_REQUEST["nom"] . " No tiene que pagar impuestos por sus ganancias.<br>.";
			  }

			  ?>
			</div>
		</div>
	</body>

</html>
    