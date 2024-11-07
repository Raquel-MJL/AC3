<!DOCTYPE html>
<html>
	<head>
		<title>Clases - Herencia | PHP</title>
		<meta charset="UTF-8">

		<?php
		
		
			echo "<br>Herencia con constructor con parámetros.<br><br>";
		
			
			class Superclase
			{
				protected $numero1;
				protected $numero2;
				protected $media;
				public function __construct($n1,$n2)
				{
					$this->numero1 = $n1;
					$this->numero2 = $n2;
				}	
				public function getNumero1()
				{
					return $this->numero1;
				}
				public function getNumero2()
				{
					return $this->numero2;
				}
				
				public function getMedia()
				{
					return $this->media;
				}	
			}
			
			
			class Subclase extends Superclase
			{
				
				//protected $numero3;
				private $numero3;
				
				public function __construct($n1,$n2,$n3) // Propiedades heredadas y propias de la subclase.
				{
					parent::__construct($n1,$n2);// Propiedades heredadas.
					$this->numero3 = $n3;
					
				}
				public function calcular_media()
				{
					$this->media = ($this->numero1 + $this->numero2 + $this->numero3)/3;
				}
				// Método get para acceder a número 3 si su alcance es privado.
				public function getNumero3()
				{
					return $this->numero3;
				}	
					
			}
			class SubclaseHija extends Subclase
			{
				
				private $numero4;
				
				public function __construct($n1,$n2,$n3,$n4) // Propiedades heredadas y propias de la subclase.
				{
					parent::__construct($n1,$n2,$n3);// Propiedades heredadas.
					$this->numero4 = $n4;					
				}
				public function mostrarNumeros()
				{
					echo  "<br>Números: " . $this->numero1 . " y " . $this->numero2 . " y " . $this->numero3 . " y " . $this->numero4. "<br>"; // Acceso a número 3 si su alcance es protegido.
					//echo  "<br>Números: " . $this->numero1 . " y " . $this->numero2 . " y " . $this->getNumero3() . " y " . $this->numero4. "<br>";// Acceso a número 3 si su alcance es privado.
				}
					
			}
			$objetoSuperclase = new Superclase(50,20);
			$objetoSubclase = new Subclase(10,20,30);
			$objetoSubclaseHija = new SubclaseHija(10,20,30,40);
			
			$objetoSubclase->calcular_media();
			echo "Valor del número 1 en la superclase: " . $objetoSuperclase->getNumero1() . "<br>";
			echo "Valor del número 1 en la subclase: " . $objetoSubclase->getNumero1() . "<br>";
			echo "Números en subclase hija: " . $objetoSubclaseHija->mostrarNumeros() . "<br>";
			echo "El resultado de la media es: " . $objetoSuperclase->getMedia() . "<br>";
			echo "El resultado de la media es: " . $objetoSubclase->getMedia() . "<br>";
			
			echo "Propiedades del objeto \$objetoSuperclase: <br>";
			print_r($objetoSuperclase);
			echo "<br>Propiedades del objeto \$objetoSublase: <br>";
			print_r($objetoSubclase);
			
			echo "<br>Herencia con constructor sin parámetros.<br><br>";
						
			class Padre
			{
				protected $nombre;
				
				public function getNombre()
				{
					return $this->nombre;
				}
				public function setNombre($nom)
				{
					$this->nombre = $nom;
				}	
					
				public function mostrar_nombre()
				{
					return "Te llamas: " . $this->nombre . "<br>";
				}	
			}			
			class Hijo1 extends Padre
			{
				protected $colordeojos;
				
				public function getColorOjos()
				{
					return $this->$colordeojos;
				}
				public function setColorOjos($col)
				{
					$this->colordeojos = $col;
				}
					
			}	
			class Hijo2 extends Padre
			{
				private $colordepelo;
				
				public function getColorPelo()
				{
					return $this->colordepelo;
				}
				public function setColorPelo($colpel)
				{
					$this->colordepelo = $colpel;
				}
			}	
			class NietoHijo1 extends Hijo1
			{
				private $edad;
				
				public function getEdad()
				{
					return $this->edad;
				}
				public function setEdad($edad)
				{
					$this->edad = $edad;
				}
			}
			$objetoPadre = new Padre();
			$objetoNieto = new NietoHijo1();
			$objetoPadre->setNombre("Pepe");
			$objetoHijo1->setNombre("Ana");
			$objetoHijo1->setColorOjos("Amarillo");
			$objetoNieto->setNombre("Luis");
			$objetoNieto->setColorOjos("Rojo");
			$objetoNieto->setEdad(15);
			echo "Nombre del abuelo: " . $objetoPadre->getNombre() . "<br>";
			echo "Nombre del hijo1: " . $objetoHijo1->getNombre() . "<br>";
			echo "Nombre del nieto: " . $objetoNieto->getNombre() . "<br>";
			echo "Color de ojos del hijo1: " . $objetoHijo1->getColorOjos() . "<br>";
			echo "Color de ojos del nieto: " . $objetoNieto->getColorOjos() . "<br>";
			echo "Edad del nieto: " . $objetoNieto->getEdad() . "<br>";
			
			
		?>
		</head>
		
	<body>

	</body>
</html>