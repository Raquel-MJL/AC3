<!DOCTYPE html>
<html>
	<head>
		<title>Clases Abstractas  | PHP</title>
		<meta charset="UTF-8">

			<?php
			
			/* Clases Abstractas. */
			
				abstract class CocheAbstract
				{
					public function getMotor($motor)
					{
						return $motor;
					}
					abstract public function setPotencia($potencia);
					abstract public function getPotencia();
				}
				class Coche extends CocheAbstract
				{
					public $marca;
					protected $potencia;
					
					public function __construct($marca)
					{
						$this->marca = $marca;
					}
					public function setPotencia($potencia)
					{
						$this->potencia = $potencia;
					}
					public function getPotencia()
					{
						return $this->potencia;
					}
				}
				$seat = new Coche("Seat");
				$motorSeat = $seat->getMotor("Diesel");
				$seat->setPotencia(100);
				$potenciaSeat = $seat->getPotencia();

				$tesla = new Coche("Tesla");
				$marcaTesla = $tesla->marca;
				$motorTesla = $seat->getMotor("Eléctrico");
				$tesla->setPotencia(120);
				$potenciaTesla = $tesla->getPotencia();

				echo "Coche de la marca " . $seat->marca . ", con motor " . $motorSeat . " y " . $potenciaSeat . " caballos de potencia.<br>";
				echo "Coche de la marca " . $marcaTesla . ", con motor " . $motorTesla . " y " . $potenciaTesla . " caballos de potencia.";

			?>
	
	</head>
	<body>

	</body>
</html> 