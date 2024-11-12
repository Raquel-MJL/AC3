<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $zonaHoraria = isset($_POST['zona_horaria_1']) ? $_POST['zona_horaria_1'] : '';
    $fecha1 = isset($_POST['fecha_1']) ? $_POST['fecha_1'] : '';
    $fecha2 = isset($_POST['fecha_2']) ? $_POST['fecha_2'] : '';
    $fechaVerano = isset($_POST['fecha_verano']) ? $_POST['fecha_verano'] : '';
    $fechaFinde = isset($_POST['fecha_fin_semana']) ? $_POST['fecha_fin_semana'] : '';

    // Establecer la zona horaria en PHP
    date_default_timezone_set($zonaHoraria);
    $fechaZona = date("d/m/Y");
    $horaZona = date("H:i:s");

    // Cálculo de la diferencia entre las fechas
    $date1 = new DateTime($fecha1);
    $date2 = new DateTime($fecha2);
    $diferenciaDias = $date1->diff($date2);

    // Verificación de si es verano
    $dateVerano = new DateTime($fechaVerano);
    $isVerano = $dateVerano->format('I'); // 'I' devuelve 1 si es verano, 0 si no lo es

    // Obtener el día de la semana para verificar si es fin de semana
    $diaFinde = date('w', strtotime($fechaFinde));

    // Mostrar los resultados en una tabla
    echo "<h2>Resultados - Ejercicio Fechas y Horas</h2>";
    echo "<table border='1' style='width: 50%; text-align: center;'>";
    echo "<tr><th>Zona Horaria</th><th>Fecha Actual</th><th>Hora Actual</th></tr>";
    echo "<tr>";
    echo "<td>" . $zonaHoraria . "</td>";
    echo "<td>" . $fechaZona . "</td>";
    echo "<td>" . $horaZona . "</td>";
    echo "</tr>";
    echo "</table><br>";

    // Mostrar la diferencia de días entre las dos fechas
    echo "<table border='1' style='text-align: center;'>";
    echo "<tr><th>Diferencia</th></tr>";
    echo "<tr><td>" . $diferenciaDias->days . " días</td></tr>";
    echo "</table><br>";

    // Mostrar si la fecha es de verano o no
    echo "<table border='1' style='text-align: center;'>";
    echo "<tr><th>Estación</th></tr>";
    echo "<tr>";
    if ($isVerano) {
        echo "<td>" . $dateVerano->format('d/m/Y') . " es verano.</td></tr>";
    } else {
        echo "<td>" . $dateVerano->format('d/m/Y') . " no es verano.</td></tr>";
    }
    echo "</table><br>";

    // Mostrar si la fecha es fin de semana o no
    echo "<table border='1' style='text-align: center;'>";
    echo "<tr><th>Fin de Semana</th></tr>";
    echo "<tr>";
    if ($diaFinde == 0 || $diaFinde == 6) {
        echo "<td>" . $fechaFinde . " es fin de semana.</td></tr>";
    } else {
        echo "<td>" . $fechaFinde . " no es fin de semana.</td></tr>";
    }
    echo "</table>";
}
?>
