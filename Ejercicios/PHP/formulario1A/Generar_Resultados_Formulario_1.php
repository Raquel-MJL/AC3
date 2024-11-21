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
    
    <!-- Formulario para mostrar los resultados en campos de texto -->
    <form action="Generar_Resultados_Formulario_1.php" method="post">
        <fieldset>
            <legend>Datos Ingresados</legend>

            <!-- Campo para mostrar el nombre -->
            <label for="nombre_resultado">Nombre:</label>
            <input type="text" id="nombre_resultado" name="nombre_resultado" value="<?php echo htmlspecialchars($nombre); ?>" readonly>
            <br><br>

            <!-- Campo para mostrar la edad -->
            <label for="edad_resultado">Edad:</label>
            <input type="text" id="edad_resultado" name="edad_resultado" value="<?php echo htmlspecialchars($edad); ?>" readonly>
            <br><br>

            <!-- Campo para mostrar si es mayor de edad o no -->
            <label for="mayor_edad">¿Es mayor de edad?</label>
            <input type="text" id="mayor_edad" name="mayor_edad" value="<?php echo $esMayorDeEdad; ?>" readonly>
            <br><br>

            <!-- Enlace para volver al formulario -->
            <a href="formulario1.php">Volver al formulario</a>
        </fieldset>
    </form>
</body>
</html>
