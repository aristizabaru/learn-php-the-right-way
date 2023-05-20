<?php

/**
 * Traits
 * Los rasgos («traits» en inglés) son un mecanismo de reutilización de código
 * en lenguajes de herencia simple, como PHP. El objetivo de un rasgo es el de
 * reducir las limitaciones propias de la herencia simple permitiendo que los
 * desarrolladores reutilicen a voluntad conjuntos de métodos sobre varias
 * clases independientes y pertenecientes a clases jerárquicas distintas.
 * La semántica a la hora combinar Traits y clases se define de tal manera
 * que reduzca su complejidad y se eviten los problemas típicos asociados a
 * la herencia múltiple y a los Mixins.
 * 
 * Un Trait es similar a una clase, pero con el único objetivo de agrupar
 * funcionalidades muy específicas y de una manera coherente. No se puede
 * instanciar directamente un Trait. Es por tanto un añadido a la herencia
 * tradicional, y habilita la composición horizontal de comportamientos;
 * es decir, permite combinar miembros de clases sin tener que usar herencia.
 * 
 * Para definir un trait se usa la palabra reservada 'trait NombreTrait' y
 * luego se procede a declarar todos los métodos.
 * 
 * NOTA
 * - Los traits no se pueden instanciar al igual que las interfaces,
 * tan solo se pueden importar dentro de las clases.
 * 
 * - Se debe evitar declarar métodos abstractos en los traits ya que esto
 * va a forzar un contrato y los traits no son contratos, para esto
 * sería mejor declarar una interface
 * 
 * Documentación:
 * https://www.php.net/manual/es/language.oop5.traits.php
 */

declare(strict_types=1);

use App\AllCoffeMaker;
use App\AllCoffeMakerOverride;
use App\AllCoffeMakerConflict;
use App\CapuccinoMaker;
use App\CoffeMaker;
use App\LatteMaker;

require_once __DIR__ . '/../vendor/autoload.php';

echo '<pre>';

echo 'COFFE MACHINE' . PHP_EOL;
$coffeMachine = new CoffeMaker();
echo $coffeMachine->makeCoffe() . PHP_EOL;
echo PHP_EOL;

echo 'LATTE MACHINE' . PHP_EOL;
$latteMachine = new LatteMaker();
echo $latteMachine->makeCoffe() . PHP_EOL;
echo $latteMachine->makeLatte() . PHP_EOL;
echo PHP_EOL;

echo 'CAPUCCINO MACHINE' . PHP_EOL;
$capuccinoMachine = new CapuccinoMaker();
echo $capuccinoMachine->makeCoffe() . PHP_EOL;
echo $capuccinoMachine->makeCapuccino() . PHP_EOL;
echo PHP_EOL;

echo 'ALL IN ONE MACHINE' . PHP_EOL;
$allInOneMachine = new AllCoffeMaker();
echo $allInOneMachine->makeCoffe() . PHP_EOL;
echo $allInOneMachine->makeCapuccino() . PHP_EOL;
echo $allInOneMachine->makeLatte() . PHP_EOL;
echo PHP_EOL;

echo 'ALL IN ONE MACHINE OVERRIDE METHOD' . PHP_EOL;
$allInOneMachineOverride = new AllCoffeMakerOverride();
echo $allInOneMachineOverride->makeCoffe() . PHP_EOL;
echo $allInOneMachineOverride->makeCapuccino() . PHP_EOL;
echo $allInOneMachineOverride->makeLatte() . PHP_EOL;
echo PHP_EOL;

echo 'ALL IN ONE MACHINE CONFLICT' . PHP_EOL;
$allInOneMachineConflict = new AllCoffeMakerConflict();
echo $allInOneMachineConflict->makeCoffe() . PHP_EOL;
echo $allInOneMachineConflict->makeCapuccino() . PHP_EOL;
echo $allInOneMachineConflict->makeLatte() . PHP_EOL;
echo PHP_EOL;
