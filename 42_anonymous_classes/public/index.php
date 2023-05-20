<?php // Anonymous Classes

/**
 * Anonymous Classes
 * Las clases anónimas son clases sin nombre, estas son útiles cuando es
 * necesario crear objetos sencillos y únicos.
 * 
 * El anidamiento de una clase anónima dentro de otra clase no le proporciona
 * acceso a ningún método o propiedad privados o protegidos de la clase externa.
 * Para utilizar las propiedades o métodos protegidos de la clase externa, la
 * clase anónima puede extender la clase externa.
 * 
 * La principal utilidad de las clases anónimas es testing
 * 
 * Documentación:
 * https://www.php.net/manual/es/language.oop5.anonymous.php
 */


declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use App\InterfaceStringable;
use App\MakeAnonymous;

echo '<pre>';

// clase anónima
$obj = new class()
{
    # class implementation
};
var_dump($obj);

// clase anónima con constructor
$obj2 = new class(1, 2, 3) // Se pasan los argumentos
{
    // Se usa la promoción de propiedades del constructor
    public function __construct(public int $x, public int $y, public int $z)
    {
    }
};
var_dump($obj2);

/**
 * Las clases anónimas pueden implementar interfaces, traits
 * y extender clases
 */
$obj3 = new class() implements InterfaceStringable
{
    public function __tostring(): string
    {
        return 'Soy una clase anónima';
    }
};
var_dump($obj3);
echo $obj3 . PHP_EOL; // Call magic method __toString();

// get_class -> retorna el nombre de la clase anónima dado por el engine de PHP
var_dump(get_class($obj3));
/**
 * Las clases también pueden tener clases anónimas
 */

$obj4 = MakeAnonymous::getAnonymousObj();
echo $obj4 . PHP_EOL;
