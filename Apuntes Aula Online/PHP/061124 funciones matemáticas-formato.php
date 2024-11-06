
<?php

	/* Funciones matemáticas y de formato.*/
	
	// number_format(número a redondear, número de decimales tras redondeo, separador de decimales, separador de millares).
	
		$n1=34.980;
		$n2=34534634.72;
		
		$n3 = $n1+$n2;
		echo 'Resultado de sumar $n1 y $n2: ' .$n3 ."<br>";
		echo 'Valor de $n3 formateado: ' .number_format($n3,2,",",".") ."<br>";
		
		echo 'Valor de un número literal formateado: ' .number_format(239423972305623.8998,2,",",".") ."<br>";
		
		$n4 = number_format($n1+$n2,2,",","."); // Número a formatear resultado de una suma previa.
		echo 'Valor de $n4 formateado: ' .$n4 ."<br>";
		echo 'Tipo y dato de la variable $n4 <br>';
		var_dump($n4);
		echo '<br>';
	
	// abs(número) - Muestra el valor absoluto de un número.
	
		$n0 = -56;
		echo 'El valor absoluto de $n0 es: ' .abs($n0) ."<br>";
	
	// pow(base,exponente) - Eleva un número a una potencia.
	
		$n5=pow(5,2);
		$n6=pow($n1,3);
			
		echo 'Potencia de $n5 sin formatear: ' .$n5. "<br>";
		echo 'Potencia de $n6 formateado: ' .number_format($n6,0,",",".") ."<br>";
	
	
	// pi() - Muestra el número pi.
	
		echo 'El valor del número pi: ' .pi() ."<br>";
		echo 'Área de un círculo de radio 20: ' .round(pi()* pow(20,2),0)." metros <br>";
		
	// max(número 1, número2, ... , numero N) - Muestra el máximo valor de un conjunto de numeros.
	
		$n7 =200;
		$n8 = 400;
		$n9 = 600;
		$numeros = array(3,7,1,4,8,5,3,8,4,9,23);
		
		echo 'Máximo valor del conjunto de variables: ' .max($n7,$n8,$n9). "<br>";
		echo 'Máximo valor del conjunto de números literales: ' .max(6,2,7,8,3,4,9,3,2). "<br>";
		echo 'Máximo valor del conjunto de números cargados en un array: ' .max($numeros). "<br>";
	
	// min(número 1, número2, ... , numero N) - Muestra el máximo valor de un conjunto de números.
		
		echo 'Máximo valor del conjunto de variables: ' .min($n7,$n8,$n9). "<br>";
		echo 'Mínimo valor del conjunto de números literales: ' .min(6,2,7,8,3,4,9,3,2). "<br>";
		echo 'Mínimo valor del conjunto de números cargados en un array: ' .min($numeros). "<br>";
	
	// rand() - Muestra un número al azar.
	// rand(límite inferior, límite superior) - Muestra un número al azar comprendido entre 2 valores.
	
		echo 'Número al azar con rand(): ' .rand() . "<br>";
		
		for ($x=1;$x<=6;$x++)
		{
			echo "Número " .$x. " para la primitiva: " .rand(1,49) . "<br>";
		}	
	
	// round(número, número de decimales a mostrar tras redondear) - Redondea un número con decimales.
	
		echo 'Valor de $n2 redondeado sin decimales: ' .round($n2,0) ."<br>";
		echo 'Valor de $n4: ' .round((float)$n4,3) ."<br>"; // Conversión a entero de $n4.
		//echo 'Valor de $n4: ' .round($n4,3) ."<br>"; // Error porque $n4 se ha convertido en un cadena de caracteres que no se puede redondear.
		
	?>