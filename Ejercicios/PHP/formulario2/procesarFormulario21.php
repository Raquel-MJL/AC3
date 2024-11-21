<?php

include 'formularios2.php';

        // Verificar si se ha enviado el formulario
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Obtener los datos del formulario
            $nombre = htmlspecialchars($_POST['nombre']);
            $apellidos = htmlspecialchars($_POST['apellidos']);
            $direccion = htmlspecialchars($_POST['direccion']);
            $telefono = htmlspecialchars($_POST['telefono']);
            $edad = htmlspecialchars($_POST['edad']);

            // Mostrar los datos en una tabla
            echo '<h3>Datos Introducidos</h3>';
            echo '<table>';
            echo '<table border="1">';
            echo '<thead>';
            echo '<tr>';
            echo '<th>Nombre</th>';
            echo '<th>Apellidos</th>';
            echo '<th>Dirección</th>';
            echo '<th>Teléfono</th>';
            echo '<th>Edad</th>';
            echo '<th>Año de nacimiento</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            echo '<tr>';
            echo '<td>' . $nombre . '</td>';
            echo '<td>' . $apellidos . '</td>';
            echo '<td>' . $direccion . '</td>';
            echo '<td>' . $telefono . '</td>';
            echo '<td>' . $edad . '</td>';
            echo '<td>' . (2024-$edad).'</td>';
            echo '</tbody>';
            echo '</table>';
        }

    ?>