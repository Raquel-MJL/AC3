<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    echo "Resultados Ejercicio Fechas y Horas 3";
    $fechaOriginal = isset($_POST['fecha']) ? $_POST['fecha'] : '';
    $intervalo = isset($_POST['intervalo']) ? $_POST['intervalo'] : '';
    $cantidad = isset($_POST['numeroIntervalo']) ? $_POST['numeroIntervalo'] : '';

    
    // Creamos un objeto DateTime con la fecha seleccionada
    $fechaFinal = new DateTime($fechaOriginal);
        
    // Según el intervalo elegido, agregamos o restamos unidades a la fecha
    if ($intervalo == 'dias') {
        // Sumar o restar días
        $fechaFinal->modify(($cantidad > 0 ? '+' : '-') . abs($cantidad) . ' days');
    } elseif ($intervalo == 'meses') {
        // Sumar o restar meses
        $fechaFinal->modify(($cantidad > 0 ? '+' : '-') . abs($cantidad) . ' months');
    } elseif ($intervalo == 'años') {
        // Sumar o restar años
        $fechaFinal->modify(($cantidad > 0 ? '+' : '-') . abs($cantidad) . ' years');
    }
    
    
      
    
    echo '<table border=1>';
    echo '<tr><th>Intervalo</th><th>Número de Periodos</th><th>Fecha Seleccionada</th><th>Fecha Resultante</th></tr>';
    echo '<tr>';
    echo '<td>'.$intervalo.'</td>';
    echo '<td>'.$cantidad.'</td>';
    echo '<td>'.$fechaOriginal.'</td>';
    echo '<td>'.$fechaFinal->format('Y-m-d').'</td>';
    echo '</tr>';




};

/*
• Fila 2.

o En la 4 celda, aparecerá la fecha resultante de
añadir o quitar los periodos seleccionados a la
fecha actual.
*/?>