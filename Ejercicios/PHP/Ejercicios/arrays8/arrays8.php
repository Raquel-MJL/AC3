<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays8</title>
    <link rel=stylesheet href=estilos.css>
</head>
<body>
    <h1>Imágenes, Array y PHP</h1>

    <!--EJERCICIO 1 INSERCIÓN DE IMÁGENES A TRAVÉS DE PHP-->
    <?php
    
    $carpetaPlanetas = 'planetas/'; // Definir la ruta a la carpeta de imágenes
    $planetas = array('venus.jpg', 'marte.webp', 'jupiter.jpg', 'saturno.jpg', 'urano.webp', 'neptuno.jpg'); //Array planetas 

    ?>
    <h2>Imágenes de los planetas</h2>
    <?php   //Bucle para mostrar imágenes de los planetas 
    for ($i = 0; $i < count($planetas); $i++) {
    echo '<img src="' . $carpetaPlanetas . $planetas[$i] . '" alt="Planeta ' . $planetas[$i] . '">';
} ?>

    <!--EJERCICIO 2 INSERCIÓN DE IMÁGENES EN TABLAS A TRAVÉS DE PHP-->
    <?php
        $carpetaImg = 'imagenes/'; 
        $imagenes = array('bebida.png','dvd.png','guitarra.png','mariposa.png','prismaticos.png','sol.png');
    ?>

    <div id="contenedor1">
        <table border="1">
            <tbody>
            <?php
            $contador = 0;
            for ($i = 0; $i < 2; $i++) {
                echo "<tr>"; // Imprime una nueva fila
            
                // Bucle para crear las columnas de cada fila. Se ejecuta 3 veces, una vez por cada celda.
                for ($j = 0; $j < 3; $j++) {
                    // Verifica si aún hay imágenes disponibles para mostrar (el índice $contador es menor que el número total de imágenes).
                    if ($contador < count($imagenes)) {
                        // Imprime una celda (<td>) con una imagen. El src de la imagen se genera concatenando la ruta de la carpeta y el nombre de la imagen.
                        // Se establece un tamaño fijo de 100px por 100px.
                        echo "<td><img src='$carpetaImg" . $imagenes[$contador] . "' alt='" . $imagenes[$contador] . "' style='width:100px;height:100px;'></td>";
                        // Incrementa el contador para pasar a la siguiente imagen.
                        $contador++;
                    }
                }
            
                
                echo "</tr>"; // Cierra la fila
            }
            ?>
            </tbody>
        </table>
    </div>
    <!--EJERCICIO 3 INSERCIÓN DE IMÁGENES EN PHP DE UNA LISTA -->

    <?php
    $carpetaIconos='iconos/';
    $iconos =array('actualizar.ico','cancelar.ico','check.ico','deshacer.ico','favicon.ico','flecha.ico','mas.ico');
    ?>

    <ul>
    <?php
    for($i=0;$i<count($iconos);$i++){
        echo '<li><img src="' . $carpetaIconos . $iconos[$i] . '" alt="icono"></li>';
    }
    ?>
    </ul>



    <!--
  


• Con CSS, elimina las viñetas de la lista y coloca sus elementos en línea. 
        -->


    

    

    
</body>
</html>