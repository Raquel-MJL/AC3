
<?php
    session_start();
    if (count($_SESSION)> 0){
 ?>

<!DOCTYPE html>
<html>
	<head>
	
		<title>Sesiones 1 - Formulario | PHP</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/estilos_sesiones1.css">
		
	</head>
	<body>
		<h2> Ejercicio Sesiones</h2>
		<div id ="contenedor">
			<div class ="ejercicios">
                <table border = "1" width="250px">
                    <tr>
                        <th>Artículo</th>
                        <th>Precio</th>
                    </tr>
                        <?php foreach ($_SESSION as $clave => $valor) { ?>
                    <tr>
                        <td><?php echo ($clave);?> </td>
                        <td><?php echo ($valor);?> </td>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
                <?php
                }
                ?>

            </div>
        </div>
    </body>
</html>