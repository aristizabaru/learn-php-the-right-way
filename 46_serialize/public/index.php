<?php // Serialize & unserialize

/* Serialize & unserialize
 * El proceso de seralizar y deserializar se usa para poder convertir estructuras
 * de datos dentro de PHP a cadenas de texto que pueden ser compartidas o guardadas
 * en BD para su percistencia, cadenas de texto que luego serán recuperadas a las
 * estructuras de datos originales
 * 
 * Serializar(serialize) -> convertir a cadena
 * Deserializar(unserialize) -> recuperar estructura de datos a partir de la cadena
 * 
 * Para estos proceso PHP posee dos funciones incorporadas:
 * serialize(mixed $value): string
 * unserialize(string $str, array $options = ?): mixed
 * 
 * Dentro de la definición de las clases se pueden usar los métodos mágicos
 * __serialize() y __unserialize() para controlar el proceso de serialización
 * y deserealización. SIEMPRE SE SERIALIZAN LAS PROPIEDAES EN LAS CLASES, LOS
 * MÉTODOS NO SON SERIALIZABLES.
 * 
 * La serialización y deserialización crea copias profundas a diferencia de clone
 * que crea copias superficiales (shallow copies vs deep copies)
 * 
 * Documentación:
 * https://www.php.net/manual/es/function.serialize.php
 * https://www.php.net/manual/es/function.unserialize.php
 * https://www.php.net/manual/es/language.oop5.magic.php#object.serialize
 * https://www.php.net/manual/es/language.oop5.magic.php#object.unserialize
 */

declare(strict_types=1);

use App\Invoice;
use App\InvoiceComplex;

require_once dirname(__DIR__) . '/vendor/autoload.php';

echo '<pre>';

// Ejemplos de serialización de datos
echo serialize(true) . PHP_EOL;
echo serialize(1) . PHP_EOL;
echo serialize(2.5) . PHP_EOL;
echo serialize('hello world') . PHP_EOL;
echo serialize([1, 2, 3]) . PHP_EOL;
echo serialize('hello world') . PHP_EOL;
$associativeArr = serialize(['a' => 1, 'b' => 2]);
echo $associativeArr . PHP_EOL;

// Ejemplos de deserialización
print_r(unserialize($associativeArr));

// Ejemplo de serializar & deserializar objeto -> solo serializa propiedades

$invoice = new Invoice();
var_dump($invoice);
$serializeInvoice = serialize($invoice);
echo $serializeInvoice . PHP_EOL;
$deserializeInvoice = unserialize($serializeInvoice);
// Esta nueva versión deserializada ocupa otro espacio en memoria diferente de $invoice
// serialize & unserialize crean 'deep copy' & clone crea 'shallow copy'
var_dump($deserializeInvoice);

// Ejemplo de serializar y deserializar con magic methods as middleware

$invoiceMagic = new InvoiceComplex(205.5, 'Invoice Magic Methods', '9875-3456765-8976');

$serializeInvoiceComplex = serialize($invoiceMagic);
echo $serializeInvoiceComplex . PHP_EOL;
$unserializeInvoiceComplex = unserialize($serializeInvoiceComplex);
var_dump($unserializeInvoiceComplex);
