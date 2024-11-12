<?php
// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : '';
    $sexo = isset($_POST['sexo']) ? $_POST['sexo'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $ciudad = isset($_POST['ciudad']) ? $_POST['ciudad'] : '';
    $comentarios = isset($_POST['comentarios']) ? $_POST['comentarios'] : '';
    $suscripcion = isset($_POST['suscripcion']) ? 'Si' : 'No';
    $normativa = isset($_POST['normativa']) ? 'Si' : 'No';
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Recibidos</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            width: 250px;
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }
        th {
            font-weight: bold;
        }
        caption {
            font-size: 1.5em;
            font-weight: bold;
            margin-bottom: 10px;
        }
        td {
            font-size: 1em;
        }
        table, th, td {
            border: 2px solid #333;
        }
        caption {
            text-align: center;
        }
    </style>
</head>
<body>

    <table>
        <caption>Datos recibidos para registro</caption>
        <tr>
            <th>Nombre</th>
            <td><?php echo htmlspecialchars($nombre); ?></td>
        </tr>
        <tr>
            <th>Apellidos</th>
            <td><?php echo htmlspecialchars($apellidos); ?></td>
        </tr>
        <tr>
            <th>Sexo</th>
            <td><?php echo htmlspecialchars($sexo); ?></td>
        </tr>
        <tr>
            <th>Correo electrónico</th>
            <td><?php echo htmlspecialchars($email); ?></td>
        </tr>
        <tr>
            <th>Población</th>
            <td><?php echo htmlspecialchars($ciudad); ?></td>
        </tr>
        <tr>
            <th>Comentarios</th>
            <td><?php echo htmlspecialchars($comentarios); ?></td>
        </tr>
        <tr>
            <th>Acepta recibir información</th>
            <td><?php echo $suscripcion; ?></td>
        </tr>
        <tr>
            <th>Leída normativa de protección de datos</th>
            <td><?php echo $normativa; ?></td>
        </tr>
    </table>

</body>
</html>
