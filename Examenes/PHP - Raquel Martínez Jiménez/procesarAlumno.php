<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];

    $media = ($nota1 + $nota2 + $nota3) / 3;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del Alumno</title>
    <link rel=stylesheet href='estilos.css'>
</head>
<body>

    <table>
        <caption>Resultados Formulario</caption>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Nota Media</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $nombre; ?></td>
                <td><?php echo number_format($media, 2); ?></td>
            </tr>
        </tbody>
    </table>

</body>
</html>
