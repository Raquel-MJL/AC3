<!DOCTYPE html>
<html>
	<head>
		<title>Clases Finales | PHP</title>
		<meta charset="UTF-8">

		<?php
		
		/* Clase final. */
	/*
			final class Cliente
			{
				public $nombre;
				public function Saludo()
					{
						print "Hola Cliente<br>";
					}
			}
			class Cliente1 extends Cliente  // Error. No se puede crear la clase Cliente1 a partir de la clase Cliente, por ser esta última final.
			{

			}
	*/	
		/* Clase con método final. */

			
			class Persona
				{
					public $nombre = "Nosferatu";
					
					final public function mostrarNombre()
					{
						print $this->nombre;
					}
					
					public function Saludo()
					{
						print "Hola Persona<br>";
					}
				}
			
				class Amigo extends Persona {
					
				//	public function mostrarNombre() // Error. Método final sobrescrito.
				//	{
				//		echo "Tu nombre es: " .$nombre;
				//	}
					
					public function Saludo() // Método sobrescrito por no ser final.
					{
						print "<br>Hola Vampiro<br>";
					}
				
				}
				
				$vampiro = new Amigo();
				$vampiro->mostrarNombre(); // Error, por haber sobrescrito el metodo mostrarNombre() en la clase hija.
				$vampiro->Saludo(); 

			
		
		/* Clase con propiedades y constantes finales. */
		/*
			class Padre
			{
				//final protected $variable; //A partir de versión 8.4.0.
				final public const CONSTANTE = "PHP"; //A partir de versión 8.1.0.
			}
	
			class Hija extends Padre {
	
				public $variable;
				public const CONSTANTE = "JavaScript";
	
			}
			*/
			?>
	
	</head>
	<body>

	</body>
</html> 