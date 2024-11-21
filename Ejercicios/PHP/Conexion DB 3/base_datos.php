
<?php
  // Sesión iniciada.

    session_start();

  // Datos de conexión.

    $conexion = mysqli_connect("localhost", "root", "", "agenda") or die("hay problemas con la conexión");

  // Consulta por correo electrónico.
		
    
    $vacio=isset($_POST["correo"]) && !empty($_POST["correo"]);
    if($vacio)
    {
      $correo = $_POST["correo"];
    }
    else
    {
      header("location:index.html");
    }
    $consulta =	"select * from agenda where email = '$_POST[correo]'";
    $resultado = mysqli_query($conexion,$consulta);
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
					
						$filas = mysqli_num_rows($resultado);
				
						if($filas == 0)
						{
					?> 
							<p>El correo electrónico buscado no existe. Introduzca uno nuevo.</p>
              </div>
					<?php	
						}
						else
						{			
              $registro = mysqli_fetch_assoc($resultado);
              $_SESSION["nombre"] = $registro["nombre"];
            }
											
						mysqli_close ($conexion);
					
  					?>

			<div class ="ejercicios">
				<a href ="index.html">Escribir un correo electrónico nuevo.</a>
			</div>
      <div class ="ejercicios">
				<a href ="resultado.php">Ir a la página principal.</a>
			</div>
		</div>
	</body>
		
	</html>