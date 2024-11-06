<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas</title>
    <link rel=stylesheet href=estilos.css>
</head>
<body>
    <h1>Ejercicio Arrays 9</h1>

    <!--EJERCICIO 1 -->
    <?php
    require 'arrays9.php';
    ksort($amigos); //Ordenar por nombre ascendente
    arsort($vendedores); //Ordenar por importe de ventas descendente
    ?>
    <div id=contenedor1>
    <table id="tablaContactos" border="1">
        <figcaption>Contactos</figcaption>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Bucle foreach para recorrer el array de amigos y mostrar en la tabla
            foreach ($amigos as $nombre => $telefono) {
                echo "<tr>
                        <td>$nombre</td>
                        <td>$telefono</td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>
    <br><br>

    <table id="tablaVendedores" border="1">
        <figcaption>Vendedores</figcaption>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Importe de Ventas</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Bucle foreach para recorrer el array de vendedores y mostrar en la tabla
            foreach ($vendedores as $nombre => $venta) {
                // Formateamos el importe de ventas
                $venta_formateada = number_format($venta, 2, ',', '.');
                echo "<tr>
                        <td>$nombre</td>
                        <td>$venta_formateada €</td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>
    </div>
    <br><br>

    <!--EJERCICIO 1 -->

    <?php
    // Cálculos para las estadísticas
    $ventas_totales = array_sum($vendedores); //Suma de vendedores 
    $venta_mayor = max($vendedores); //Valor máximo de vendedores
    $venta_menor = min($vendedores); //Valor mínimo de vendedores 
    $vendedor_destacado = array_search($venta_mayor, $vendedores); //Devuelve la Clave o Key del valor encontrado
    $promedio_ventas = $ventas_totales / count($vendedores); //Ventas totales entre count (número de índices) de vendedores

    // Formatear las cifras
    $venta_mayor_formateada = number_format($venta_mayor, 2, ',', '.');
    $venta_menor_formateada = number_format($venta_menor, 2, ',', '.');
    $ventas_totales_formateadas = number_format($ventas_totales, 2, ',', '.');
    $promedio_ventas_formateado = number_format($promedio_ventas, 2, ',', '.');
    ?>

    <div id=contenedor2>
    <table id="tablaEstadisticas" border="1">
            <thead>
                <tr>
                    <th>Importe de Ventas Mayor</th>
                    <th>Importe de Ventas Menor</th>
                    <th>Promedio de Ventas</th>
                    <th>Ventas Totales</th>
                    <th>Vendedor Destacado</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $venta_mayor_formateada; ?>€</td>
                    <td><?php echo $venta_menor_formateada; ?>€</td>
                    <td><?php echo $promedio_ventas_formateado; ?>€</td>
                    <td><?php echo $ventas_totales_formateadas; ?>€</td>
                    <td><?php echo $vendedor_destacado; ?></td>
                </tr>
            </tbody>
        </table>




    </div>
    
</body>
</html>