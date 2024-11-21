
<!DOCTYPE html >
<html>

	<head>
	
		<title>Formulario 6 | PHP</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/estilos.css">
		
	</head>
	  	
	<body>
		<!-- Ejercicio 1. -->
		<h2>Ejercicio Formularios 6.</h2>
		<div id ="contenedor">
			<div class ="ejercicios">
				<form action="procesarFormulario6.1.php" method="post">
				<fieldset>
					<legend>Formulario Ejercicio 1.</legend>
					
					<p><label>Nombre:</p>
					<input type="text" name="nom">
					<p><label>Ganancias:</p>
					<select name="menu1">
						<option value = "1">1,00 y 800,00 euros</option>
						<option value = "2">801,00 y 1.500,00 euros</option>
						<option value = "3">Más de 1.500,00</option>
					</select>
					</label>
					<p><input type="submit" value="Enviar datos" name ="envio1"></p>
					
					
				</fieldset>
				</form>
			</div>
		<!-- Ejercicio 2. -->
			<div class ="ejercicios">
				<form action="procesarFormulario6.2.php" method="post">
				<fieldset>
					<legend>Formulario Ejercicio 2.</legend>

					<p><label>Introduzca 3 números y a continuación,</label></p>
					<p><label>indique que operaciones quiere realizar.</label></p>
					
					<p><label>Primer número:<br><input type="text" name="n1" value="1"></label></p>
					<p><label>Segundo número:<br><input type="text" name="n2" value="2"></label></p>
					<p><label>Tercer número:<br><input type="text" name="n3" value="3"></label></p>
								
					<p><label>Seleccione operación:<br>
					
						<select name="menu2[]" multiple >
							<option value = "sum">Sumar</option>
							<option value = "res">Restar</option>
							<option value = "mul">Multiplicar</option>
							<option value = "div">Dividir</option>
							<option value = "spot">Suma y Potencia</option>
						</select>
					
					</label></p>
					<p><input type="submit" value="Calcular" name ="envio2"></p>
		 
				</fieldset>
				</form>
			</div>
		<!-- Ejercicio 3. -->
				<div class ="ejercicios">
					<form action="procesarFormulario6.3.php" method="post">
					<fieldset>
						<legend>Formulario Ejercicio 3.</legend>
						
						<p><label>Correo Electrónico:</p>
						<input type="email" name="correoe">
						<p><label>¿Qué te ha parecido el sitio?.</label></p>
						<p><label>Envíanos tus comentarios y sugerencias. Gracias.</label></p>
						<textarea name = "texto" cols="60" rows="4">Escribe aquí tus comentarios.
						</textarea>
						<p><input type="submit" name ="envio3"></p>
								
					</fieldset>
					</form>
				</div>
		</div>
	</body>

</html>
