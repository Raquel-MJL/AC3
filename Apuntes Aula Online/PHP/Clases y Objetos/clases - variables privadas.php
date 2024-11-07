<!DOCTYPE html>
<html>
	<head>
		<title>Clases con variables privadas | PHP</title>
		<meta charset="UTF-8">

			<?php
				
				class Autor
				{
					private $nombre;
					private $email;
					const IVA = 1.10;
					private $precio;
									 
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
									
					public function getNombre()
					{
						return $this->nombre;
					}
				 
					public function getEmail()
					{
						return $this->email;
					}
					
					public function getPrecio()
					{
						return $this->precio;
					}
					
					public function setNombre($n)
					{
						$this->nombre = $n;
					}
				 
					public function setEmail($c)
					{
						 $this->email = $c;
					}
					
					public function setPrecio($p)
					{
						 $this->precio = $p;
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
				
				$autor1->setNombre("Miguel");
				$autor1->setEmail("cervantes@saavedra.com");
				$autor1->setPrecio(30.00);
				
				$autor2->setNombre("Pérez Reverte");
				$autor2->setEmail("alatriste2@gmail.com");
				$autor2->setPrecio(24.00);
						
			// Acceso a datos con variables privadas.
			
			// Dato por dato.
			
				echo "<h3>Datos mostrados sin usar bucles: </h3>";
			
				echo "Nombre del autor 1: " . $autor1->getNombre() . "<br>";
				echo "Correo electrónico del autor 1: " .$autor1->getEmail(). "<br>";
				echo "Precio sin IVA libro autor 1: " . $autor1->getPrecio() . "<br>";
				
				echo "Nombre del autor 2: " . $autor2->getNombre() . "<br>";
				echo "Correo electrónico del autor 2: " .$autor1->getEmail(). "<br>";
				echo "Precio sin IVA libro autor 2: " . $autor1->getPrecio() . "<br>";
				
				echo "Precio con IVA libro autor 1: " . $autor1->calcular_incremento() . "<br>";
				echo "Precio con IVA libro autor 2: " . $autor2->calcular_incremento() . "<br>";
				
			// Con bucles foreach().
			
				echo "<h3>Datos mostrados usando bucles: </h3>";
				
				//Los incluidos en la definición de la clase.
			
					$autor1->iterar1();
					$autor1->iterar2();
					$autor2->iterar1();
					$autor2->iterar2();
			
				// Bucles externos a la clase.					
				/*
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
				*/
			?>

	
	</head>
	<body>

	</body>
</html> 