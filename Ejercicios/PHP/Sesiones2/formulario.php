
<!DOCTYPE html>
<html>
	<head>
	
		<title>Sesiones 2 - Formulario | PHP</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/estilos_sesiones2.css">
		
	</head>
	<body>
		<h2> Ejercicio Sesiones 2</h2>
		<div id ="contenedor">
			<div class ="ejercicios">
		        <h3>Adivina mi número.</h3>
                <form method="post" action="sesiones2.php" name="formulario_sesion">
                    <fieldset>
                        <p><label>Número:</label>
                        <input type="text" name="numero" placeholder="Números entre 1 y 100"></p>
                        <p><input type="submit" name="adivinar" id="boton" value="Adivinar">
                    </fieldset>
                </form>

            </div>
        </div>
    </body>
</html>