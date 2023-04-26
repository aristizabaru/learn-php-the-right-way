<?php // Associative Array

/**
 * Associative Array
 * Las array asociativas funcionan como hash tables donde se puede establer
 * una key para acceder a un valor 'x'
 * 
 * Documentación: https://www.php.net/manual/es/language.types.array.php
 */

echo '<pre>';

$programingLanguages = [
    'PHP' => 8.1,
    'Python' => 3.10
];

print_r($programingLanguages);
echo $programingLanguages['PHP'];

// Se puede agregar un nuevo elemento especificando una key
$programingLanguages['Go'] = 1.15;
print_r($programingLanguages);
