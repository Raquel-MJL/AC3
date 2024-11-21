<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Restaurante Carpanta</h1>
    <?php
   $platos = array(
    "Pasta Carbonara",
    "Paella Valenciana",
    "Pizza Margherita",
    "Ensalada César",
    "Hamburguesa Clásica",
    "Salmón a la Parrilla",
    "Tacos al Pastor",
    "Ratatouille"
    );

    // Array de precios correspondientes a los platos
    $precios = array(
        12.50,
        18.00,
        10.00,
        8.00,
        9.50,
        15.00,
        7.00,
        14.00
    );

    // Combinamos los arrays en un array asociativo
    $platos_con_precio = array_combine($platos, $precios);

    // Ordenamos el array asociativo por las claves (nombres de los platos)
    ksort($platos_con_precio);

    $archivo = 'menu_del_dia.txt'; //Nombre del archivo para guardar el menú 
    $file = fopen($archivo, 'w'); //Lo abrimos en modo escritura (se creará si no existe el archivo )
    fwrite($file, "Menú del Día<br><br>"); //Escribimos en el txt el título 

    // Escribimos los platos y precios en cada línea
    foreach ($platos_con_precio as $plato => $precio) {
        fwrite($file, "$plato - \$$precio<br>");
    }

    fclose($file); // Cerramos el archivo

    // Confirmación
    echo "El menú se ha guardado en '$archivo'.<br><br>";


    //Mostrar Paella Valenciana si hay y si no, imprimir pensaje 
    echo "";
    if (array_key_exists("Paella Valenciana", $platos_con_precio)) {
        echo "<p>¿Hay Paella Valenciana? <strong>Paella Valenciana</strong> - $" . $platos_con_precio["Paella Valenciana"] . "</p>";
    } else {
        echo "<p>¿Hay Paella Valenciana?¡Lo sentimos, no hay!</p>";
    }

    //Sugerir plato aleatorio 
    $plato_aleatorio = array_rand($platos_con_precio); //Selección aleatoria
    echo "<p>Te sugerimos: <strong>$plato_aleatorio</strong> - $" . $platos_con_precio[$plato_aleatorio] . "</p>";
    
    // Mostrar comida más cara combinando 2 platos del menú 
    $costo_maximo = 0;
    $plato_1 = '';
    $plato_2 = '';

    // Recorremos todas las combinaciones posibles de dos platos
    foreach ($platos_con_precio as $plato1 => $precio1) {
        foreach ($platos_con_precio as $plato2 => $precio2) {
            // Aseguramos que no seleccionamos el mismo plato dos veces
            if ($plato1 != $plato2) {
                $costo_total = $precio1 + $precio2;

                // Si encontramos una combinación con un costo mayor, la actualizamos
                if ($costo_total > $costo_maximo) {
                    $costo_maximo = $costo_total;
                    $plato_1 = $plato1;
                    $plato_2 = $plato2;
                }
            }
        }
    }
    echo "<p>La comida más cara del menú compuesta por dos platos diferentes sería:</p>";
    echo "<ul><li><strong>$plato_1</strong></li>  <li><strong>$plato_2</strong></li></ul> con un costo total de \$$costo_maximo</p>";

    //Llevar esta combinación a un archivo .txt 

    $archivo2='combinacion.txt';
    $file = fopen($archivo2, 'w');
    fwrite($file, "Combinación más cara<br>".$plato_1." ".$precio1." y ".$plato_2." ".$precio2."<br>Con un precio total de".$costo_maximo."."); 


    ?>

    <table>
        <caption>Menú del Día</caption>
        <thead>
            <tr>
                <th>Plato</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($platos_con_precio as $plato => $precio) {
                echo "<tr>";
                echo "<td>$plato</td>";
                echo "<td>\$$precio</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    
    
</body>
</html>