<!DOCTYPE html>
<html>
	<head>
		<title>Clases. Variables,métodos y constantes de clase o estáticos | PHP</title>
		<meta charset="UTF-8">

			<?php
			
				class miClase
				{
					public static $nombre = "Rosa";
					public static $edad = 30;
					const A = 10.50;
					public const B = "PHP";
					private const C = 20;
					public static function metodo1()
				{
					echo self::B . "<br>"; //Estático. Uso del operador de resolución de alcance.
					echo "Te llamas: " . self::$nombre . "<br>"; //No estático. Uso del operador de resolución de alcance.
					echo self::C . "<br>";//Acceso permitido a la constante C.
					
				}
				
					public function metodo2()
				{
					echo $this::B . "<br>"; //Estático. Uso del operador de resolución de alcance.
					echo "Te llamas: " . $this->nombre . "<br>"; //No estático. Uso del operador de accesoesolución de alcance.
					echo $this::C . "<br>";//Acceso permitido a la constante C.
				}
				}
				$a = new miClase();
				$a->metodo1();//Operador acceso a miembros de una clase ->.
				miClase::metodo1();
				echo miClase::A . "<br>"; //Estático. Uso del operador de resolución de alcance.
				echo $a::A . "<br>"; //Estático. Uso del operador de resolución de alcance.
				//echo $a::C . "<br>"; //Estático. Uso del operador de resolución de alcance. Error de acceso por ser la constante C un miembro privado de la clase.
				echo miClase::$nombre . "<br>";
				echo miClase::$edad . " años<br>";
				echo $a->$nombre . "<br>";;				
				echo $a->$edad. " años<br>";
				
			?>
	
	</head>
	<body>

	</body>
</html> 