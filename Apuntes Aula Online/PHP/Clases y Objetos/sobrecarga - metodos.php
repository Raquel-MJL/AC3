


<?php
	
	/* Sobrecarga de una función / método usando parámetros opcionales. */

	 	echo "<h2 style='color:maroon'> Sobrecarga de una función / método con parámetros opcionales.</h2>";
		function saludo($argumento = null)
		{
			if ($argumento == null):
				echo "<h3>Método/Función sin valor: Hola.</h3>";
			else:
				echo "<h3>Método/Función con 1 valor: Hola, " .$argumento .".</h3>";
			endif;
		}
		
		saludo();
		saludo("Neo");
		
	/* Sobrecarga de una función / método usando parámetros opcionales. */
	
		echo "<h2 style='color:maroon'> Sobrecarga de una función / método con parámetros opcionales.</h2>";
		function calculos2($n1,$n2=null)
			{
				if($n2 != null)
				{
					$suma = $n1+$n2;
					return $suma;
				}
				else
				{
					return $n1;
				}
				
			}
		
		$resultado1 = calculos2(2000,3);
		$resultado2 = calculos2(18);
		echo "<h3>Método/Función con 2 valores: ". $resultado1."</h3>";
		echo "<h3>Método/Función con 1 valor: " .$resultado2."</h3>";
	
	/* Sobrecarga de una función / método usando func_get_args(). */

		function hello()
		{
			$argumentos = func_get_args();
			$numeroDeArgumentos = count($argumentos);

			if ($numeroDeArgumentos == 0)
			{ 
				echo "Hola.<br>";
			}
			else if ($numeroDeArgumentos == 1)
			{
				echo "Hola " .$argumentos[0]. "</br>";
			}
			else if ($numeroDeArgumentos == 2)
			{
				echo "Hola " .$argumentos[0]." ".$argumentos[1]. "</br>";
			}
		}

		hello();
		hello("Mundo");
		hello("Mundo", "Mundial");

		/* Sobrecarga de una función / método usando func_get_args() y un bucle foreach(). */
	
		echo "<h2 style='color:maroon'> Sobrecarga de una función / método.</h2>";
		function sumaVarios()
		{
			$suma = 0;
			foreach( func_get_args() as $parametro)
			{
				$suma = $suma + $parametro;
			}
			return $suma;
		}
		$suma2 = sumaVarios(5,8); 
		$suma3 = sumaVarios(10,11,12);
		$suma10 = sumaVarios(8,4,8,2,3,4,5,-9,4,7); 
		echo "<h3>Método/Función con 2 valores: " .$suma2."</h3>";
		echo "<h3>Método/Función con 3 valores: " .$suma3."</h3>";
		echo "<h3>Método/Función con 10 valores: " .$suma10."</h3>";
	
	/* Sobrecarga de un método en una clase. */
	
		echo "<h2 style='color:maroon'> Sobrecarga de método en una clase.</h2>";
		class Sobrecarga
		{
			public $resultado;
						
			public function calculos1($n1,$n2,$n3=null)
			{
				if($n3 != null)
				{
					$this->resultado=($n1+$n2)*$n3;
				}
				else
				{
					$this->resultado=$n1+$n2;
				}
				return $this->resultado;
			}
		}
		$operacion1 = new Sobrecarga();
		$operacion2 = new Sobrecarga();
		
		echo "<h3>Método de una clase con 2 valores: ". $operacion1->calculos1(45,180)."</h3>";
		echo "<h3>Método de una clase con 3 valores: " .$operacion2->calculos1(45,180,12)."</h3>";
	
	
?>