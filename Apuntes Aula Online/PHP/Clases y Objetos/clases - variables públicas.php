<!DOCTYPE html>
<html>
	<head>
		<title>Clases con variables públicas | PHP</title>
		<meta charset="UTF-8">

			<?php
				
				class Autor
				{
					 public $nombre;
					 public $email;
					 const IVA = 1.10;
					 public $precio;
									 
					public function __construct($nom, $correo_e, $precio)
					{
						$this->nombre = $nom;
						$this->email = $correo_e;
						$this->precio = $precio;
					}
					public function __destruct()
					{
						echo "Objeto destruido<br>";
					}			 
									
					public function calcular_incremento()
					{
						// $total =  $this->precio*self::IVA;
						// return $total;
						 return  $this->precio*self::IVA;
					}
					
					public function iterar1()
					
					{
						echo "Autor:<br> ";
						foreach ($this as $clave => $valor)
						{
							echo $clave . ": " . $valor. "<br>";
						}
						echo "<br>";
					}	
					public function iterar2()
					{
						echo "Autor:<br> ";
						foreach ($this as $valor)
						{
							echo $valor. "<br>";
						}
						echo "<br>";
					}
					
				}
						
			// Creación de objetos con constructor con parámetros.
			
				$autor1 = new Autor("Miguel", "cervantes@saavedra.com",30.00);
				$autor2 = new Autor("Pérez Reverte","alatriste@gmail.com",24.00);
				
			// Creación de objetos con constructor sin parámetros o inexistente.
			
				//$autor1 = new Autor();
				//$autor2 = new Autor();
				
			// Carga de datos en las propiedades si el constructor no tiene parámetros o no existe.
				
				/*$autor1->nombre = "Miguel";
				$autor1->email = "cervantes@saavedra.com";
				$autor2->nombre = "Pérez Reverte";
				$autor2->email = "alatriste@gmail.com";*/
			
			// Acceso a datos con variables públicas.
			
				// Dato por dato.
			
					echo "<h3>Datos mostrados sin usar bucles: </h3>";
					
					echo "Nombre del autor 1: " . $autor1->nombre. "<br>";
					echo "Correo electrónico del autor 1: " .$autor1->email. "<br>";
					echo "Precio sin IVA libro autor 1: " . $autor1->precio . "<br>";
					
					echo "Nombre del autor 2: " . $autor2->nombre. "<br>";
					echo "Correo electrónico del autor 2: " .$autor2->email. "<br>";
					echo "Precio sin IVA libro autor 2: " .$autor2->precio . "<br>";
					
					echo "Precio con IVA libro autor 1: " . $autor1->calcular_incremento() . "<br>";
					echo "Precio con IVA libro autor 2: " . $autor2->calcular_incremento() . "<br>";
				
				// Con bucles foreach().
				
					echo "<h3>Datos mostrados usando bucles: </h3>";
								
					//Los incluidos en la definición de la clase.
				/*
						$autor1->iterar1();
						$autor1->iterar2();
						$autor2->iterar1();
						$autor2->iterar2();
				*/
					// Bucles externos a la clase.					
					
						foreach($autor1 as $valor)
						{
							echo "Autor 1: " . $valor. "<br>";
						}
						
						echo "<br>";
						
						foreach($autor2 as $valor)
						{
							echo "Autor 2: " . $valor. "<br>";
						}
						
						echo "<br>";
						
						$i =1; // Variable para controlar las vueltas o iteraciones en un bucle foreach().
										
						foreach($autor1 as $clave => $valor)
						{
							
							echo "Vuelta" .$i; // Forma de mostrar el índice en cada vuelta con foreach y objetos o arrays asociativos.
							echo $clave . ": " . $valor. "<br>";
							$i++;
						}
						
						echo "<br>";
						
						foreach($autor2 as $clave => $valor)
						{
							echo $clave . ": " . $valor. "<br>";
						}
					
						echo "<br>";
				
			?>
	</head>
	<body>

	</body>
</html> 