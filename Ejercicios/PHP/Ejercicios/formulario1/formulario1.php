<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Datos</title>
</head>
<body>
    <h2>Formulario de Datos</h2>
    
    <!-- Formulario -->
    <form action="Generar_Resultados_Formulario_1.php" method="post">
        <fieldset>
            <legend>Datos</legend>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <br><br>
    
            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad" required>
            <br><br>
    
            <input type="submit" value="Enviar">
        </fieldset>
    </form>
</body>
</html>
