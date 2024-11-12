<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Formulario de Incrementar / Decrementar Días</h1>
    <form method='post' action='funciones.php'>

    <fieldset >
        <legend>Incrementar / Decrementar Días</legend>

        <p>Selecciona una fecha:</p>
        <input type="date" id="fecha" name="fecha">

        <p>Selecciona intervalo:</p>
        <select id="intervalo" name="intervalo">
            <option value="dias">Días</option>
            <option value="meses">Meses</option>
            <option value="años">Años</option>
        </select>

        <p>Selecciona el intervalo de tiempo a añadir / restar a la fecha:</p>
        <input type="number" id="numero" name="numeroIntervalo" min="1" placeholder="Número">

        <br><br>
        <input type="submit" value="Añadir / Restar Días">

    </fieldset>
    </form>

</body>
</html>