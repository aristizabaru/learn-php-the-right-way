<?php // Multidemensional array

/**
 * Multidimensional array
 * Las array multidimensionales son aquellas que anidan dentro de sus valores
 * otras array, haciendo que pasen de ser arrays de dos dimensiones a arrays
 * de varias dimensiones
 */
echo '<pre>';

$programingLanguages = [
    'php' => [
        'creator' => 'Rasmus Lerdof',
        'extension' => '.php',
        'website' => 'php.net',
        'versions' => [
            ['version' => '8.0', 'releaseDate' => 'Nov 26, 2020'],
            ['version' => '7.4', 'releaseDate' => 'Nov 28, 2019']
        ]
    ],
    'pyton' => [
        'creator' => 'Guido Van Rossum',
        'extension' => '.py',
        'website' => 'python.org',
        'versions' => [
            ['version' => '3.9', 'releaseDate' => 'Oct 5, 2020'],
            ['version' => '3.8', 'releaseDate' => 'Oc 14, 2019']
        ]
    ]
];

print_r($programingLanguages);

// Para acceder a un valor solo se debe especificar la key
echo <<< HEREDOC
PHP
Creador: {$programingLanguages['php']['creator']}
Website: {$programingLanguages['php']['website']}
Última versión estable: {$programingLanguages['php']['versions'][0]['version']}

Pyton
Creador: {$programingLanguages['pyton']['creator']}
Website: {$programingLanguages['pyton']['website']}
Última versión estable: {$programingLanguages['pyton']['versions'][0]['version']}
HEREDOC;


// Cuando hay varias keys iguales, la última reemplaza a las primeras
$array = [0 => 'foo', 1 => 'bar', '1' => 'baz']; // '1' es casteado a integer
echo '<br/>';
print($array[1]);
