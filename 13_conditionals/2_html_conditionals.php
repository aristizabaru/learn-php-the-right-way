<!DOCTYPE html>
<?php // HTML - PHP Conditionals

/**
 * Aclaración
 * Aunque en el ejemplo se usan estructuras if / else dentro del html lo
 * ideal es siempre separar la lógica de la presentación por lo que se
 * ofrece otra alternativa al presente ejemplo
 */

$score = 85;
$grade = 'Unrated';

// Para ver esta implementación de presentación ver ejemplo 2 en HTML
if ($score <= 90) {
    $grade = 'A';
} elseif ($score <= 80) {
    $grade = 'B';
} elseif ($score <= 70) {
    $grade = 'C';
} elseif ($score <= 60) {
    $grade = 'D';
} elseif ($score <= 50) {
    $grade = 'E';
} else {
    $grade = 'F';
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML - PHP CONDITIONALS</title>
</head>

<body>
    <p style="font-size: 20px;">EJEMPLO 1</p>
    <?php if ($score <= 90) : ?> <!-- El uso de : permite continuar la estructura -->
        <strong>A</strong>
    <?php elseif ($score <= 80) : ?>
        <strong>B</strong>
    <?php elseif ($score <= 70) : ?>
        <strong>C</strong>
    <?php elseif ($score <= 60) : ?>
        <strong>D</strong>
    <?php elseif ($score <= 50) : ?>
        <strong>E</strong>
    <?php else : ?>
        <strong>B</strong>
    <?php endif ?> <!-- Para terminar la estructura condicional se usa endif -->

    <p style="font-size: 20px;">Ejemplo 2</p>
    <p>Esta sintaxis es más clara y separa la lógica de la presentación</p>
    <strong><?= $grade ?></strong>
</body>

</html>