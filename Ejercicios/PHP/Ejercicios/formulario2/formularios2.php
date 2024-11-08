<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 2</title>
</head>
<body>
<h2>Formulario de Información</h2>
    <form action="procesarFormulario21.php" method="POST" target="_blank">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos" required><br><br>

        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" required><br><br>

        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono"  required><br><br>

        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" min="0" required><br><br>

        <button type="submit">Enviar</button>
        <br><br>


        <form action="procesarFormulario22.php" method="POST" target="_blank">
        

        <label>Escolaridad:</label><br>
        <input type="radio" id="sin_estudios" name="escolaridad" value="Sin Estudios" required>
        <label for="sin_estudios">Sin Estudios</label><br>

        <input type="radio" id="primaria" name="escolaridad" value="Primaria" required>
        <label for="primaria">Primaria</label><br>

        <input type="radio" id="secundaria" name="escolaridad" value="Secundaria" required>
        <label for="secundaria">Secundaria</label><br>

        <input type="radio" id="universitarios" name="escolaridad" value="Estudios Universitarios" required>
        <label for="universitarios">Estudios Universitarios</label><br>

        <button type="submit">Enviar</button>
        <br><br>

        </form>
    </form>


</body>
</html>