
<!DOCTYPE html>
<html>
	<head>
	
		<title>Excepciones 1 | PHP</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/estilos_excepciones1.css">
		
	</head>
	<body>
		<h2> Ejercicio Excepciones 1</h2>
		<div id ="contenedor">
			<div class ="ejercicios">
				<p class="parrafo_uno"> Ejercicio 1:</p>
				<?php

				// Ejercicio 1A. Sin lanzar Excepción.
				/*
				class Persona
				{
					private $nombre;
					public function getNombre()
					{
						if($this->nombre)
						{
							return $this->nombre;
						}
						else
						{
							return "No hay un nombre definido";
						}
					}
				}
				$personita = new Persona();
				*/?>
				<!--<p>Te llamas: <?php //$personita->getNombre();?></p>-->
			
				<?php
		
				// Ejercicio 1B. Lanzando Excepción.
				class Persona
				{
					private $nombre;
					public function getNombre()
					{
						try
						{
							if($this->nombre)
							{
								return $this->nombre;
							}
							throw new Exception("No hay un nombre definido");
						}
						catch (Exception $e)
						{
							?>
								<p><?php echo $e->getMessage();?></p>
							<?php
						}
						
					}
				}
				$personita = new Persona();
				echo $personita->getNombre();
				?>

			</div>
		
			<div class ="ejercicios">
				<p> Ejercicio 2:</p>
				<?php

				// Ejercicio 2.

					try
					{
						$archivo = "noexiste_archivo.txt"; // Error al cargar el archivo.
				
						if (!file_exists($archivo))
						{
							throw new Exception("Archivo inexistente.");
						}
					
					
					} catch (Exception $e)

					{
				?>
					<p><?php echo $e->getMessage();?></p>
				<?php
					
				}
				?>	
			</div>	
	
			<div class ="ejercicios">
				<p> Ejercicio 3:</p>
				<?php

				// Ejercicio 3.
				
				try
				{
						$fichero = @fopen("noexisto.txt","r");
						if (!$fichero)
						{
							throw new Exception("Archivo no encontrado.");
						}
						?>
							<p>Archivo abierto con éxito.</p>
						<?php
				} 
				catch (Exception $e)
				{
					?>
						<p><?php echo $e->getMessage();?></p>
						<p>No se pudo abrir el archivo.</p>
					<?php
						die();
				}
					?>	
							
			</div>
		</div>
	</body>
</html>