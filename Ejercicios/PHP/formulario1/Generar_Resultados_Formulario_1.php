<?php
// Verificar si el formulario fue enviado con el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores del formulario
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];

    // Determinar si es mayor de edad o no
    $esMayorDeEdad = ($edad >= 18) ? "Sí" : "No";
} else {
    // Si no hay datos POST, redirigir al formulario principal
    header("Location: formulario.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados del Formulario</title>
</head>
<body>
    <h2>Resultados del Formulario</h2>
    
    <!-- Mostrar los resultados -->
    <p>Nombre: <?php echo $nombre; ?></p>
    <p>Edad: <?php echo $edad; ?> años</p>
    <p>¿Es mayor de edad? <?php echo $esMayorDeEdad; ?></p>

    <!-- Enlace para volver al formulario -->
    <br><br>
    <a href="formulario1.php">Volver al formulario</a>
</body>
</html>
