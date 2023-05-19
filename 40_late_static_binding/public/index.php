<?php // Late Static Binding

/**
 * Late Static Binding
 * PHP posee dos tipos de binding, el early biding que ocurre en compile time y
 * el late biding que ocurre en runtime.
 * 
 * El problema que resuelve específicamente Late Static Biding es que los métodos
 * y propiedades estáticos tienen un early biding, esto significa una cosas en el
 * contexto de la herencia:
 * 
 * 1. Cuando se declara un método o propiedad static en el padre y se hace el
 * llamado desde la clase hija el resolution operator '::' resuelve a self,
 * el cual representa la clase padre gracias al early biding que se dio en
 * compile time. Esto puede causar problemas accediendo a propiedades o métodos
 * de la clase hija.
 * 
 * Este problema es resuelto por el late static biding que usando el tipo static
 * en vez de self ayuda a que el biding se resuelva en tiempo de ejecución.
 */

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use App\ClassA;
use App\ClassB;
use App\StaticClassA;
use App\StaticClassB;
use App\LateStaticClassA;
use App\LateStaticClassB;

echo '<pre>';

/**
 * El resultado es el experado ya que aunque la clase B extiende la A, la propiedad
 * protected $name es retornada usando un late biding en tiempo de ejecución
 * gracias a que $this hace referencia al objeto que está llamando (calling object).
 */
echo 'Late Biding' . PHP_EOL;
$classA = new ClassA();
$classB = new ClassB();
echo $classA->getName() . PHP_EOL; // A
echo $classB->getName() . PHP_EOL; // B

/**
 * En este caso al ser la propiedad $name en A (clase padre) static al igual que el
 * método, se da un early biding, por lo tanto cuando se hace el llamado desde la
 * clase B al método de clase getName(); este se resuelve desde la StaticClassA y
 * no la StaticClassB que es la herada. self resuelve a la clase padre.
 * 
 * El resultado no es el espardo...
 */
echo 'Early Biding (static)' . PHP_EOL;
echo StaticClassA::getName() . PHP_EOL; // A
echo StaticClassB::getName() . PHP_EOL; // A

/**
 * En este caso al ser la propiedad $name en A (clase padre) static al igual que el
 * método, se da un early biding, por lo tanto cuando se hace el llamado desde la
 * clase B al método de clase getName(); este se resuelve desde la StaticClassA y
 * no la StaticClassB que es la herada. self resuelve a la clase padre.
 * 
 * El resultado no es el espardo...
 */
echo 'Late Biding (late static)' . PHP_EOL;
echo LateStaticClassA::getName() . PHP_EOL; // A
echo LateStaticClassB::getName() . PHP_EOL; // B
