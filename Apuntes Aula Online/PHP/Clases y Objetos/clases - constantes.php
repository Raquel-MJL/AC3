<!DOCTYPE html>
<html>
	<head>
		<title>Constantes de clase | PHP</title>
		<meta charset="UTF-8">

			<?php
			
				class miClase
				{
					public $nombre = "Rosa";
					const A = 10.50;
					public const B = "PHP";
					private const C = 20;
					public function miMetodo()
				{
					echo $this::B . "<br>"; //Estático. Uso del operador de resolución de alcance.
					echo "Te llamas: " . $this->nombre . "<br>"; //No estático. Uso del operador de accesoesolución de alcance.
					echo $this::C . "<br>";//Acceso permitido a la constante C.
				}
				};
				$a = new miClase();
				echo "nombre " . $a->nombre;
				//echo "nombre " . miClase::$nombre;
				$a->nombre = "Pepe<br>";
				echo "nuevo nombre " .$a->nombre;
				/*$a->miMetodo();//Operador acceso a miembros de una clase ->.
				echo $a::A . "<br>"; //Estático. Uso del operador de resolución de alcance.
				echo $a::C . "<br>"; //Estático. Uso del operador de resolución de alcance. Error de acceso por ser la constante C un miembro privado de la clase.
				*/
			?>
	
	</head>
	<body>

	</body>
</html> 