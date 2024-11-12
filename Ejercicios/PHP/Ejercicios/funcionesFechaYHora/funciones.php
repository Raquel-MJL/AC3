<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function saludo() {
        // Obtener la hora actual (en formato de 24 horas)
        $hora_actual = date("H");
    
        // Determinar el saludo según la hora
        if ($hora_actual >= 6 && $hora_actual < 12) {
            echo "<p>Buenos días.</p>"; // Entre las 6 AM y 12 PM
        } elseif ($hora_actual >= 12 && $hora_actual < 20) {
            echo "<p>Buenas tardes.</p>"; // Entre las 12 PM y 8 PM
        } else {
            echo "<p>Buenas noches.</p>"; // Entre las 8 PM y 6 AM
        }
    }
    ?>
</body>
</html>