
<!DOCTYPE html>
<html>
    <head>
	
        <meta charset="utf-8">
		<title>Formulario Cookies | PHP</title>		
		<link href ="css/estilos-cookies1.css" rel ="stylesheet">
		
	</head>

	<body <?php if (isset($_COOKIE["color"])) echo " style='background:$_COOKIE[color]'" ?>>
		<h2> Ejercicio Cookies 1</h2>
		<div id ="contenedor">
			<div class ="ejercicios">
				<h3> Ejercicio 3:</h3>
				<form action="cookies1.php" name "f1" method="post">
					<fieldset>
					<p>Selecciona el que color que quieres que se muestre en el fondo de la página de ahora en adelante:</p>
					<p><input type="radio" value="rojo" name="color">Rojo</p>
					<p><input type="radio" value="verde" name="color">Verde</p>
					<p><input type="radio" value="azul" name="color">Azul</p>
					<p><input type="submit" id="boton" name="boton" value="Cambiar color de fondo"></p>
					</fieldset>
				</form>
			</div>
		</div>
	</body>

</html>