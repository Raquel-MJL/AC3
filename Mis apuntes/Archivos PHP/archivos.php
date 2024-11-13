<!DOCTYPE html>
<html>
	<head>
		<title>Ejemplo Funciones para archivos.</title>
		<meta charset="UTF-8">

		<?php
		/* Verificar existencia de un archivo con file_exists(). */	
			
			if (file_exists("datos1.txt"))
			{
				echo "El archivo datos1.txt si existe.<br>";
			}
			else
			{
				echo "El archivo datos1.txt no existe.<br>";
			};
			
			if (file_exists("otros_archivos/datos2.txt"))
			{
				echo "El archivo datos2.txt si existe.<br>";
			}
			else
			{
				echo "El archivo datos2.txt no existe.<br>";
			};
			
		/* Función fopen(), die(), get_resource_type() y archivo para escritura (borrado del contenido). */
		
			$fichero1 = fopen("archivo.txt", 'w') or die("Se produjo un error al crear el archivo<br>");
			  
			$texto1 = <<<TEXTO
			Esta es la primera línea,
			esta la segunda línea y
			la última es la línea 3.
			TEXTO;
		
		/* Función fwrite() y fclose(). */	

			fwrite($fichero1, $texto1) or die("No se pudo escribir en el archivo<br>");

			echo "Tipo de dato: " .gettype($fichero1)."<br>";
			echo "Tipo de recurso: " .get_resource_type($fichero1);
			fclose($fichero1);
			echo "<br>Se ha creado el archivo y se ha escrito sin problemas<br>";

		/* Función fopen(), die() y archivo para escritura (añadido de contenido). */
				
			$fichero2 = fopen("archivo.txt", 'a+') or die("Se produjo un error al crear el archivo<br>");
			$texto2 = "<br>Nueva línea añadida al final del archivo.";
		
			/* Función fwrite() y fclose(). */	

			fwrite($fichero2, $texto2) or die("No se pudo escribir en el archivo<br>");
			fclose($fichero2);
			echo "Se ha añadido una nueva línea al archivo sin problemas<br>";

		/* Función fopen(), fgets(), fclose() y archivo de sólo lectura. */	
		
			echo "<br> Contenido del archivo original, con nueva línea añadida:<br><br>";
			$archivo1 = fopen("archivo.txt", "r");
			//$archivo = fopen("usuario.json", "r");
			//$archivo = fopen("clientes.xml", "r");
			//$archivo1 = fopen("estilos.css", "r");

			if ($archivo1) {
				while (($linea1 = fgets($archivo1)) != false) {
					echo $linea1."<br>";
				}
				fclose($archivo1);
			} else {
				echo "No se pudo abrir el archivo.";
			}	

		/* Función fopen(), fgets(), feof(), fclose() y archivo de sólo lectura. */	
				
			echo "<br> Contenido del archivo original, con nueva línea añadida y uso de feof():<br><br>";
			$archivo2 = fopen("archivo.txt", "r");
			
				while (!feof($archivo2))
				{
					$linea2 = fgets($archivo2);
					echo $linea2."<br>";
				}
			fclose($archivo2);
		
		/* Función fopen(), fread(), filesize(), fclose() y archivo de sólo lectura. */

			echo "<br> Archivo leído con fread():<br><br>";
			$archivo3 = fopen("archivo.txt","r");
			$nombre_archivo = "archivo.txt";
			echo fread($archivo3,"10")."<br>"; // Sólo 10 bytes/caracteres leídos.
			echo "<br>" .fread($archivo3,filesize("archivo.txt"))."<br>"; // Todo el archivo leído.
			echo "<br>Tamaño del archivo con nombre como cadena: " .filesize("archivo.txt")."<br>"; // Tamaño el archivo.
			echo "Tamaño del archivo con nombre en una variable: " .filesize($nombre_archivo)."<br>"; // Tamaño el archivo.
			fclose($archivo3);
		
		/* Función fopen(), die() y archivo para escritura (añadido de contenido). Otros formatos de archivo - otra forma de cargar contenido.*/
				
		/*	$fichero3 = fopen("clientes.xml", 'a+') or die("Se produjo un error al crear el archivo<br>"); 		
			$texto3 = <<<PERSONA
			<persona>
				<nombre>
					Juan
				</nombre>
				<apellido>
					Fernández
				</apellido>
				<teléfono>
					111122223
				</teléfono>
			</persona>
			PERSONA;
		
			fwrite($fichero3, $texto3) or die("No se pudo escribir en el archivo<br>");
			fclose($fichero3);
			echo "Se ha añadido una nueva línea al archivo sin problemas<br>";
		*/
		/* Función file().*/
			
			//$fichero_personas= fopen("personas.txt", "r");
			$cadenas = file("personas.txt");
			echo "Contenido del array: " .count($cadenas)."<br>";
			echo print_r($cadenas)."<br>";

			foreach($cadenas as $clave => $valor){
				echo $clave. "=>" . $valor. "<br>";
			}

	?>

	</head>
	<body>

	</body>
</html> 