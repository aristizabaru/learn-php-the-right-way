<?php // Imprimir PHP en HMTL
/**
 * Atajo para imprimir
 * Para imprimir en html se puede usar el atajo
 * <?= "texto a imprimir" ?>, esto equivale a
 * <?php echo "texto a imprimir" ?>
 */

$sum = 2 + 5; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprimir PHP en HTML</title>
</head>
<body>
    <h1><?= "Hello World" ?></h1>
    <p>La suma de 2 + 5 es <?= $sum ?></p>
</body>
</html>
