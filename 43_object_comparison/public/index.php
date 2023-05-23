<?php // Object Comparison

/*
 * Object Comparison
 * Cuando se comparan dos objetos se puede usar el operador de comparación
 * de igualdad '==' que hace una comparación si son instancias de la misma
 * clase y poseen las mismas propiedades y valores, permitiendo coerción
 * de tipos.
 * 
 * También se puede usar el comparador dede identidad '===' que solo retorna
 * verdadero si ambos objetos apuntan al mismo objeto, si no son el mismo
 * objeto en memoria arrojará 'false'
 */

declare(strict_types=1);

use App\Invoice;

require_once dirname(__DIR__) . '/vendor/autoload.php';

echo '<pre>';

$invoice1 = new Invoice(100, 'Invoice');
$invoice2 = new Invoice(100, 'Invoice');

echo 'invoice 1 == invoice 2' . PHP_EOL;
var_dump($invoice1 == $invoice2); // true
echo 'invoice 1 === invoice 2' . PHP_EOL;
var_dump($invoice1 === $invoice2); // false

$invoice3 = $invoice1;
echo 'invoice 1 == invoice 3' . PHP_EOL;
var_dump($invoice1 == $invoice2); // true
echo 'invoice 1 === invoice 3' . PHP_EOL;
var_dump($invoice1 === $invoice3); // true