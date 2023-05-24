<?php // Object cloning and __clone magic method

/*
 * Object cloning and __clone magic method 
 * Para crear una copia de un objeto se utiliza la palabra clave clone
 * (que invoca, si fuera posible, al método __clone() del objeto). No se
 * puede llamar al método __clone() de un objeto directamente.
 * 
 * $copia_de_objeto = clone $objeto;
 * 
 * Cuando se clona un objeto, PHP llevará a cabo una copia superficial
 * de las propiedades del objeto. Las propiedades que sean referencias
 * a otras variables, mantendrán las referencias.
 * 
 * __clone(): void
 * 
 * Una vez que la clonación ha finalizado, se llamará al método __clone()
 * del nuevo objeto (si el método __clone() estuviera definido), para
 * permitirle realizar los cambios necesarios sobre sus propiedades.
 * 
 * Documentación:
 * https://www.php.net/manual/es/language.oop5.cloning.php
 */

declare(strict_types=1);

use App\Invoice;

require_once dirname(__DIR__) . '/vendor/autoload.php';

echo '<pre>';

/*
 * Hay varias formas en las que se pueden crear un objecto:
 * 1 usando la palabra reservada 'new'
 * 2 usando la palabra reservada 'new' con la palabra self o static
 *   ver Invoice class
 * 3 Usando la palabra new sobre el objecto   
 */

// Diferentes forma de creación de objetos
$invoice1 = new Invoice();
$invoice2 = Invoice::create();
$invoice3 = new $invoice1();

var_dump($invoice1, $invoice2, $invoice3);

/*
 * clonación de un objeto usando la palabra reservada clone   
 */

echo 'OBJETOS CLONADOS' . PHP_EOL;
$invoiceClone = clone $invoice1;

/* poseen el mismo id hasta que se llama __clone una vez terminada la copia,
 * sin embargo aunque no se tenga método mágico __clone y se haga una copia
 * de las propiedaes y métodos ya los objetos están en espacios diferentes
 * de la memoria
 */
var_dump($invoice1, $invoice2);
