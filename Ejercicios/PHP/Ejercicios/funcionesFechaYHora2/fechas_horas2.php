<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method='post' action='funciones.php'>
    <h1>Formulario de Zonas Horarias</h1>
    
    <!-- Ejercicio 1: Zona Horaria -->
    <fieldset>
        <legend>Zona Horaria</legend>
        <p>Selecciona una zona horaria.</p>
        <select name="zona_horaria_1">
            <option value="America/New_York">America/New_York</option>
            <option value="Europe/London">Europe/London</option>
            <option value="Asia/Tokyo">Asia/Tokyo</option>
            <option value="Australia/Sydney">Australia/Sydney</option>
            <option value="Europe/Istanbul">Europe/Istanbul</option>
            <option value="America/Los_Angeles">America/Los_Angeles</option>
        </select>
    </fieldset>
    
    <!-- Ejercicio 2: Diferencia de Fechas -->
    <fieldset>
        <legend>Diferencia de Fechas</legend>
        <p>Selecciona dos fechas.</p>
        <label for="fecha_1">Fecha 1:</label>
        <input type="date" name="fecha_1" id="fecha_1" required>
        <br>
        <label for="fecha_2">Fecha 2:</label>
        <input type="date" name="fecha_2" id="fecha_2" required>
    </fieldset>
    
   <!-- Ejercicio 3: Verano -->
    <fieldset>
        <legend>Verano</legend>
        <p>Selecciona una fecha.</p>
        <label for="fecha_verano">Fecha:</label>
        <input type="date" name="fecha_verano" id="fecha_verano" required>
    </fieldset> 
    
    <!-- Ejercicio 4: Fin de Semana -->
    <fieldset>
        <legend>Fin de Semana</legend>
        <p>Selecciona una fecha.</p>
        <label for="fecha_fin_semana">Fecha:</label>
        <input type="date" name="fecha_fin_semana" id="fecha_fin_semana" required>
    </fieldset>
    
    <!-- Botón de comprobación -->
    <fieldset>
        <legend>Comprobaciones</legend>
        <button type="submit" >Comprobar Funciones de Fecha</button>
    </fieldset>
</form>

</body>
</html>