
<!DOCTYPE html>
<html>
	<head>
		<title>Arrays 4 | PHP</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/estilos.css">
	</head>
	<body>

	<div id ="contenedor1">
				
		<div class ="ejercicios">
		<h2>Ejercicio 1. </h2>
			<?php	
			
			// Ejercicio 1.
						
				//$numeros = array(5,90,23);
				
				$numeros[0] = 6;
				$numeros[1] = 6;
				$numeros[2] = 5;
				
				/*for($i = 0;$i < 3; $i++)
				{
					$numeros[$i] = $i+40;
				}*/
				
				for($i = 0; $i < count($numeros); $i++)
				{
						
						echo "Los números contenidos en el array son: " . $numeros[$i] . "<br>";				
				}
			
				echo "El producto de los números contenidos en el Array es " . $numeros[0] * $numeros[1] * $numeros[2] . "<br>";
		?>
		</div>			
		<div class ="ejercicios">
		<h2>Ejercicio 2. </h2>
		<?php
		// Ejercicio 2.		
	
			
			if ($numeros[0] == $numeros[1] && $numeros[0] > $numeros[2])
			{
				echo "El número mayor es " . $numeros[0] . " y ocupa las posiciones 0 y 1.<br><br>";
			}
			
			else if ($numeros[0] == $numeros[2] && $numeros[0] > $numeros[1])
			{
				echo "El número mayor es " . $numeros[0] . "y ocupa las posiciones 0 y 2.<br><br>";
			}
			
			else if ($numeros[1] == $numeros[2] && $numeros[1] > $numeros[0])
			{
				echo "El número mayor es " . $numeros[1] . " y ocupa las posiciones 1 y 2.<br><br>";
			}
			
			else if ($numeros[0] == $numeros[1] && $numeros[0] == $numeros[2])
			{
				echo "Todos los números son iguales<br><br>";
			}
			else if ($numeros[0] > $numeros[1] && $numeros[0] > $numeros[2])
			{
				echo "El número mayor es " . $numeros[0] . " y ocupa las posición 0.<br><br>";
			}
			
			else if ($numeros[1] > $numeros[2])
			{
				echo "El número mayor es " . $numeros[1] ." y ocupa las posición 1.<br><br>";
			}
			else 
			{
				echo "El número mayor es " . $numeros[2] . " y ocupa la posición 2.<br><br>";
			}
	?>
	</div>
		<div class ="ejercicios">
		<h2>Ejercicio 3. </h2>		
		<?php					
			// Ejercicio 3.	
					
			$array1 = array (34, 90,2,8,45);
			$array2 = [23,67,1,78,93];
			$tamaño = count($array1);
			for($x = 0; $x < $tamaño; $x++)
				{
					$array3[$x] = $array1[$x] * $array2[$x];
				}
			echo "Valores Array 1. <br><br>";
			
			foreach($array1 as $a1)
			{		
				echo "Valor en \$array1 " . $a1 . "<br>";
			}
			echo "Valores Array 2. <br><br>";
			
			foreach($array2 as $a2)
			{		
				echo "Valor en \$array2 " . $a2 . "<br>";
			}
			echo "<br>Valores Array 3. <br><br>";
			
			foreach($array3 as $a3)
			{		
				echo "Valor en \$array3 " . $a3 . "<br>";
			}
		?>	
		</div>
		<div class ="ejercicios">
		<h2>Ejercicio 4A. </h2>
		<?php
		// Ejercicio 4. Variante A.		
		
			echo "<br>Array A<br><br>";		
			
			for($j = 0; $j < 10; $j++)
				{
					$A[$j] = $j;
					echo "Valor cargado en posición ". $j . " del Array A: " . $A[$j] . "<br>";
				}
			
			echo "<br>Array B<br><br>";
			$x = 0;
			for($k = 9;$k >= 0; $k--)
				{
					
					$B[$k] = $k;
					echo "Valor cargado en posición " . $x++ . " del Array B: " . $B[$k] . "<br>";
					
				}
											
			echo "<br>Array C<br><br>";	
			
			$y = 10;
			for($l = 0; $l < 10; $l++)
				{
					$y--;
					$C[$l] = $A[$l] + $B[$l];
					echo "Resultado: El valor " . $A[$l]. " de la posición " . $A[$l] . " del Array A más el valor " 
					.$B[$l] . " de la posición " . $B[$y] . " del Array B es igual a " . $C[$l] . "<br>";
				}
		?>
		</div>
		<div class ="ejercicios">
		<h2>Ejercicio 4B. </h2>			
		<?php
		// Ejercicio 4. Variante B.
		
				echo "<br>Array A<br><br>";		
				
				for($j = 0; $j < 10; $j++)
					{
						$A[$j] = $j;
						echo "Valor cargado en posición ". $j . " del Array A: " . $A[$j] . "<br>";
					}
				$x = 0;
				echo "<br>Array B<br><br>";
				for($k = 9;$k >= 0; $k--)
					{
						
						$B[$k] = $k;
						echo "Valor cargado en posición " . $x++ . " del Array B: " . $B[$k] . "<br>";
						
					}
												
				echo "<br>Array C<br><br>";	
				$y = 10;
				for($l = 0; $l < 10; $l++)
					{
						$y--;
						$C[$l] = $A[$l] + $B[sizeof($B)-1-$l];
						echo "Resultado: El valor " . $A[$l]. " de la posición " . $A[$l] . " del Array A más el valor " 
						.$B[$y] . " de la posición " . $B[$l] . " del Array B es igual a " . $C[$l] . "<br>";
					}
			
			?>
		</div>
	</div>
	
	</body>
</html>