<?php

include "formularios2.php";
if ($_SERVER['REQUEST_METHOD']== 'POST'){
    $nombre = htmlspecialchars($_POST['nombre']);
    $apellidos = htmlspecialchars($_POST['apellidos']);
    $escolaridad = htmlspecialchars($_POST['escolaridad']); // Recoger la opción de escolaridad


    echo "Nombre y apellidos:". $nombre . ' ' . $apellidos . '<br>';
    echo "Estudios: " . $escolaridad . '<br>'; // Mostrar la opción de escolaridad seleccionada
}

?>
