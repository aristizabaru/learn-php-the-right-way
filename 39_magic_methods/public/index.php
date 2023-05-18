<?php // Magic Methods

/**
 * Magic Methods
 * Los métodos mágicos son métodos especiales que sobreescriben acciones
 * por defecto cuando se realizan ciertas acciones sobre un objeto.
 * 
 * Los siguientes nombres de métodos se consideran mágicos:
 * __construct(), __destruct(), __call(), __callStatic(), __get(),
 * __set(), __isset(), __unset(), __sleep(), __wakeup(), __serialize(),
 * __unserialize(), __toString(), __invoke(), __set_state(), __clone(),
 * y __debugInfo().
 * 
 * Documentación:
 * https://www.php.net/manual/es/language.oop5.magic.php
 */

declare(strict_types=1);

use App\CallCallstatic;
use App\DebugInfo;
use App\Invoke;
use App\SetGet;
use App\IssetUnset;
use App\ToString;

require_once __DIR__ . '/../vendor/autoload.php';

echo '<pre>';

// Revisar la clase SetGet para ver funcionamiento de __get & __set
$invoice = new SetGet();
$invoice->amount; // string(6) "amount"
$invoice->amount = 15; // Es prohibido crear propiedades nuevas en este objeto

echo '<br/>';
// Revisar la clase IssetUnse para ver funcionamiento de __isset & __unset
$invoice2 = new IssetUnset();
var_dump(isset($invoice2->amount)); // false
unset($invoice2->amount); // string(9) "No existe"

// Revisar la clase CallCallstatic para ver funcionamiento de __call & __callstatu
$obj = new CallCallstatic();
$obj->runTest('en contexto de objeto');

CallCallstatic::runTest('en contexto estático');  // Desde PHP 5.3.0

// Revisar la clase ToString para ver funcionamiento de __toString
echo new ToString();

// Revisar la clase Invoke para ver funcionamiento de __toString
$singleResponsabilityClass =  new Invoke();
$singleResponsabilityClass(); // calls __invoke

// Revisar la clase Debug para ver funcionamiento de __debugInfo
$debugInfo = new DebugInfo();
// Expondría todas las propiedades privadas, con __debugInfo se puede controlar esto
var_dump($debugInfo);
