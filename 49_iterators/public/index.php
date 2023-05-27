<?php // Iterators & Iterable

/*
 * Iterators & Iterable
 * En PHP se puede iterar sobre objetos o generar colecciones de los mismos
 * para iterar sobre los mismos
 * 
 * Documentación:
 * https://www.php.net/manual/es/language.oop5.iterations.php
 * https://www.php.net/manual/es/language.types.iterable.php
 * https://www.php.net/manual/es/class.iterator.php
 * https://www.php.net/manual/es/spl.iterators.php
 * https://www.php.net/manual/es/class.iteratoraggregate.php
 */

declare(strict_types=1);

use App\Invoice;
use App\InvoiceCollection;
use App\InvoiceCollectionAggregate;

require_once dirname(__DIR__) . '/vendor/autoload.php';

echo '<pre>';

/*
 * En PHP se puede iterar por defecto sobre objetos, la iteración sucede sobre
 * las propiedades visibles del mismo 
 */
echo 'TRAVERSE ARRAY' . PHP_EOL;
foreach ([1, 2, 3, 4]  as $key => $value) {
    echo $key . ' = ' . $value . PHP_EOL;
}
echo PHP_EOL;

// Iterate sobre an object. Solo itera sobre las propiedades visibles
echo 'TRAVERSE OBJECT' . PHP_EOL;
foreach (new Invoice(250) as $key => $value) {
    echo $key . ' = ' . $value . PHP_EOL;
}
echo PHP_EOL;

/*
 * Iterate sobre una lista de objetos -> La clase debe implementar Iterator o IteratorAggregate
 * para poder controlar como los objetos serán iterados sobre el array en el que se han
 * guardado en la propiedad de InvoiceCollection
 */
// Este ejemplo extiende la interfaz Iterator
echo 'TRAVERSE OBJECT COLLECTION' . PHP_EOL;
$invoiceCollection = new InvoiceCollection([new Invoice(100), new Invoice(240), new Invoice(400)]);
foreach ($invoiceCollection as $invoice) {
    echo 'ID: ' . $invoice->id . ' - ' . 'AMOUNT: ' . $invoice->amount . PHP_EOL;
}
echo PHP_EOL;

// Este ejemplo extiende la interfaz IteratorAggregate
echo 'TRAVERSE OBJECT COLLECTION AGGREGATE' . PHP_EOL;
$invoiceCollectionAggregate = new InvoiceCollectionAggregate([new Invoice(100), new Invoice(240), new Invoice(400)]);
foreach ($invoiceCollection as $invoice) {
    echo 'ID: ' . $invoice->id . ' - ' . 'AMOUNT: ' . $invoice->amount . PHP_EOL;
}
echo PHP_EOL;

// Typehint iterable -> se puede usar para typehint cualquier iterable
foo($invoiceCollection);
foo([1, 2, 3]);

function foo(iterable $iterable)
{
    foreach ($iterable as $i => $item) {
        // ...
        echo $i . PHP_EOL;
    }
}
