

<!DOCTYPE html>
<html>
	<head>
		<title>JSON Externo y PHP</title>
		<meta charset="UTF-8">

	</head>
	<body>
		<div>
				<!-- Carga de archivo PHP con objeto JSON usando funciones include() o require().-->
				<?php	
					include "archivosJSON/usuario1.php";
					//require "archivosJSON/usuario1.php";
					$user1 = json_decode($usuario1);
				?>
					<h3>Datos del usuario 1:</h3>
					<p><?php echo $user1->nombre;?></p>
					<p><?php echo $user1->password;?></p>
					
		</div>
		<div>	
				<!-- Carga de archivo JSON usando función file_get_contents() .-->
				<?php	
					$persona2 = file_get_contents("archivosJSON/usuario2.json");
					$user2 = json_decode($persona2, false);
				?>
					<h3>Datos del usuario 2:</h3>
					<p><?php echo $user2->nombre;?></p>
					<p><?php echo $user2->password;?></p>
			
		</div>

	</body>
	
</html>