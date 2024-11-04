
<!DOCTYPE html>

<html>

		<head>
		  <title>Variables 0 | PHP</title>
		  <meta charset="UTF-8">
		</head>

		<body>

		  <?php

			//Ejercicio 1.
			
				echo "Ejercicio 1.<br><br>"; //Mostrar por pantalla frase con variable 
				$frase = "¡Hola Mundo!";
				echo $frase;
				echo "<br>";
				echo "¡Hola Mundo!"; //Sin variable 
				echo "<br><br><br>";
				
			//Ejercicio 2 Crear variable de cada tipo e imprimirlas en una linea cada una
			
				echo "Ejercicio 2.<br><br>";
				$a = 20;
				$b = 80.2570;
				$c = "PHP";
				$d = true;
				echo ("El valor de la variable a es " .$a . "<br>");
				echo ("El valor de la variable b es $b <br>");
				echo "El valor de la variable c es $c <br>";
				echo "El valor de la variable d es " .$d . "<br>";
				echo "<br><br>";	
			
			//Ejercicio 3 Mostrar tipo de dato y contenido de cada variable del anterior
			
				echo "Ejercicio 3.<br><br>";
				var_dump($a);
				echo("<br>");
				var_dump($b);
				echo("<br>");
				var_dump($c);
				echo("<br>");
				var_dump($d);
				echo "<br><br><br>";
						
			//Ejercicio 4 Crear string que incorpore  variables sin usar el operador punto(.),
			
				echo "Ejercicio 4.<br><br>";
				$nota1 = 8;
				$nota2 = 6;
				$nota3 = 10;
				echo "Has aprobado la evaluación con las siguientes notas, $nota1, $nota2 y $nota3";

		  ?>

		</body>

</html>