<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables 5</title>
</head>
<body>
    <?php
    $li1="Material de escritura";
    $precio1= 0.50;
    $precio2= 0.18;
    $li1a="Bolígrafo" . $precio1 . " euros";
    $li1b="Lapicero" . $precio2 . " euros";
    ?>
    <div id=division-datos>
        <h1>Papelería papelitos</h1>
        <ul>
            <li><?php echo $li1; ?>

                <ul></ul>
            </li>
        </ul>
    </div>
    
</body>
</html>