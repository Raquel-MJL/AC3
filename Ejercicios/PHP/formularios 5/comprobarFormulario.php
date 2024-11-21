<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $nombre = isset($_POST['no']) ? $_POST['no'] : '';
    $apellidos = isset($_POST['ap']) ? $_POST['ap'] : '';
    $email = isset($_POST['co']) ? $_POST['co'] : '';
    $sexo = isset($_POST['se']) ? $_POST['se'] : '';
    $estudios = isset($_POST['estudios'])? $_POST['estudios']:'';
    $musica = isset($_POST['mus'])? 'Si' : 'No';
    $deportes = isset($_POST['dep'])? 'Si' : 'No';
    $cine = isset($_POST['cin'])? 'Si' : 'No';
    $libros = isset($_POST['lib'])? 'Si' : 'No';
    $ciencia = isset($_POST['cie'])? 'Si' : 'No';
    $dia = isset($_POST['dia']) ? $_POST['dia']:'';
    $comentarios = isset($_POST['comentario']) ? $_POST['comentario'] : '';
   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Formulario5</title>
    <link rel="stylesheet" href="estilos.css">
    
</head>
<body>
    <h2>Comprobación de datos recibidos</h2><br>
    <p>Estos son los datos que nos has enviado</p><br>
    <p>Apellidos: <?php echo $nombre .'<br>' ?></p>
    <p>Email: <?php echo $apellidos .'<br>' ?></p>
    <p>Sexo: <?php echo $sexo .'<br>' ?></p>
    <p>Estudios: <?php echo $estudios.'<br>' ?></p>
    <p>Interés en Música: <?php echo $musica .'<br>' ?></p>
    <p>Interés en Deportes:<?php echo $deportes .'<br>' ?></p>
    <p>Interés en Cine: <?php echo $cine .'<br>' ?></p>
    <p>Interés en Libros: <?php echo $libros .'<br>' ?></p>
    <p>Interés en Ciencia: <?php echo $ciencia.'<br>' ?></p>
    <p>Día para recibir el boletín: <?php echo $dia .'<br>' ?></p>
    <p>Su comentario: <?php echo $comentarios .'<br>' ?></p>
    <p>Comprueba  tus  datos  antes  de  enviarlos,  si  no  están  bien,  vuelve  a 
    escribirlos.</p><br>

    <p>Los datos son correctos</p><br>
    <a href="enviar.html" >Enviar</a><br><br>
    <p>Los datos no son correctos</p><br>
    <a href="Formulario 5.html">Volver a escribirlos</a>
    

    
</body>
</html>