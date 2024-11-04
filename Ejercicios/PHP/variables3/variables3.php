			 
<!DOCTYPE html>
<html>
	<head>
		<title>Variables 3 | PHP</title>
		<meta charset="UTF-8">
	</head>
	<body>

		<?php
		
		//Ejercicio 1.
		/*
				$numero1 = "4.9";
				$numero2 = "2.5"; 
				$numero3 = $numero1 * $numero2; // Conversión implícita.
				echo("Resultado de la multiplicación: " . $numero3 ."<br>");
				$numero3 = (float)$numero1 * (float)$numero2;// Conversión forzada.
				echo("Resultado de la multiplicación: " . $numero3 ."<br>");
		*/
		//Ejercicio 2. 
		/*
				 include "datos_cliente.php";
				 echo("Código del cliente: $codcliente <br>");
				 echo("Nombre del cliente: $nombre <br>");
				 echo("Apellidos del cliente: $apellidos <br>");
				 echo("Teléfono del cliente: $telefono <br>");
				 echo("Correo electrónico del cliente: $correo_electronico <br>");
		*/
				
		//Ejercicio 3. 
		/*
			$numero1 = 8.6; 
			function sumar()
			{ 
		
				global $numero1;
				$numero2 = 34; 			
				$numero3 = (int)$numero1 + $numero2;
				echo("Variable global a en ámbito local: " . $numero1 ."<br>"); 
				echo("Variable b en ámbito local: " . $numero2 ."<br>");
				echo("Resultado de la suma: " . $numero3 ."<br>");
				
			} 
			sumar();
			echo("Variable global: " . $numero1);
		*/
		
		//Ejericio 4.
		
				$texto = "París";
				$entero = 18; 
				$real = 196.50;
				$booleano = false;
				$nada;
				
				echo("1.Tipo de la variable texto: ". gettype($texto) ."<br>");
				define ("FIJO","PHP");
				echo("1.Tipo de la variable texto: ". gettype($texto) ."<br>");
				echo("2.Tipo de la variable entero: ". gettype($entero) ."<br>");
				echo("3.Tipo de la variable real: ". gettype($real) ."<br>");
				echo("4.Tipo de la variable booleana: ". gettype($booleano) ."<br>");
				echo("5.Tipo de la variable booleana: ". gettype($nada) ."<br>"); //La variable no tiene valor, ni en consecuencia tipo, por lo que saltará un aviso, pero el script seguirá en ejecución.
				echo("6.¿Existe la variable texto?: ". isset($texto) ."<br>"); //Devuelve 1, true, porque existe.
				echo("7.¿Existe la variable entero?: ". isset($entero) ."<br>"); //Devuelve 1, true, porque existe.
				echo("8.¿Existe la variable fecha?: ". isset($fecha) ."<br>"); //No devuelve nada, false, porque no existe.
				echo("9.¿Existe la constante FIJO?: ". defined("FIJO") ."<br>"); //Devuelve 1, true, porque existe.
				echo("10.¿Existe la constante IVA?: ". defined("IVA") ."<br>"); //No devuelve nada, false, porque no existe.
				unset($booleano);
				echo("11.¿Existe la variable boolena?: ". isset($booleano) ."<br>");//No devuelve nada, false, porque ha sido borrada.
				strval($entero);
				echo("12.Tipo de la variable entero: ". gettype($entero) ."<br>");//Variable de tipo entero, se ha cambiado el tipo del dato, no el de la variable.
				settype($entero, "string");
				echo("13.Tipo de la variable entero: ". gettype($entero) ."<br>");//Variable de tipo string, se ha cambiado el tipo de la variable.
				echo("14.Estás usando la siguiente versión de PHP: ". PHP_VERSION ."<br>");
				echo("15.Tu Sistema Operativo es: ". PHP_OS ."<br>");
				echo("16.Servidor web usado: ". PHP_SAPI ."<br>");
				echo("17.Ruta de acceso al archivo actual: ". __DIR__ ."<br>");
				
				
				
		 ?>
		
	</body>
</html>