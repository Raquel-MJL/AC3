
<!DOCTYPE html>
<html>
	<head>
		<title>Formulario 6 Resultados 6.2 | PHP</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/estilos.css">
	</head>
	
	<body>
  <div id ="contenedor">
			<div class ="ejercicios">
		  <?php
			  
			  $operacion = $_REQUEST["menu2"];
			  
			  
			  foreach($operacion as $valor)
			  {
				  			  
			  if ($valor == "sum")
				{
				$suma = $_REQUEST["n1"] + $_REQUEST["n2"] + $_REQUEST["n3"];
				$suma = number_format($suma,0,",",".");
				}
			  
			  if ($valor == "res")
				{
				  $resta = $_REQUEST["n1"] - $_REQUEST["n2"] - $_REQUEST["n3"];
				  $resta = number_format($resta,0,",",".");
				}
			  if ($valor == "mul")
				{
				$multiplicacion = $_REQUEST["n1"] * $_REQUEST["n2"] * $_REQUEST["n3"];
				$multiplicacion = number_format($multiplicacion,0,",",".");
				}
			  if ($valor == "div")
				{
				  $division = ($_REQUEST["n1"] / $_REQUEST["n2"])/ $_REQUEST["n3"];
				  $division = number_format($division,0,",",".");
				} 
			  if ($valor == "spot")		
				{
				$potencia = ($_REQUEST["n1"] + $_REQUEST["n2"] + $_REQUEST["n3"])**2;
				$potencia = number_format($potencia,0,",",".");
				} 
			  }
		  ?>
			<h2>Resultados Ejercicio Formularios 6.1.</h2>
			<div id ="contenedor">
				<div class ="ejercicios">
				<table border = "1" cellspacing="0">
				<caption>Cálculos</caption>
					<tr>
						<th>Suma</th>
						<th>Resta</th>
						<th>Multiplicación</th>
						<th>División</th>
						<th>Suma y Potencia</th>
					
					</tr>
					<tr>
						<td><?php if (isset($suma)): echo $suma; else: echo "Operación no calculada"; endif; ?></td>
						<td><?php if (isset($resta)): echo $resta; else: echo "Operación no calculada"; endif;?></td>
						<td><?php if (isset($multiplicacion)): echo $multiplicacion; else: echo "Operación no calculada"; endif; ?></td>
						<td><?php if (isset($division)): echo $division; else: echo "Operación no calculada"; endif; ?></td>
						<td><?php if (isset($potencia)): echo $potencia; else: echo  "Operación no calculada"; endif; ?></td>
					</tr>
				</table>
				</div>
			</div>

	</body>

</html>
    