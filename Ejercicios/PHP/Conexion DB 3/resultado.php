<?php
session_start();
?>

<!DOCTYPE html>
	<html>
		<head>
		
			<title>Base de datos y PHP 2</title>
			<meta charset="UTF-8">
			<link rel="stylesheet" href="css/estilosBD3.css">
						
		</head>
		<body>
			
		<h2>Ejercicio Conexión 2: Consultas.</h2>
		<div id ="contenedor">
			<div class ="ejercicios">
            <?php
            if (isset($_SESSION["nombre"]))
            {
            ?>  
                <p><?php echo "Bienvenido/a " . $_SESSION["nombre"];?></p>
            <?php   
            }
            else
            {
            ?>  
                <p><?php echo "No tiene permiso para visitar esta página";?></p>
            <?php 
            }

         ?>
            </div>
		</div>
    </body>
</html>