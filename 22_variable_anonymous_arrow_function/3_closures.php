<?php // Closures

/**
 * Closures
 * Las funciones poseen local scope, por lo que si se trata de acceder a una
 * variable por fuera de su local scope arrojará un error. Es posible
 * para una función anónima acceder a variables fuera de su scope pasándolas
 * en su declaración mediante use(), esto es conocido como CLOSURE: cuando
 * una función anónima puede acceder a variables fuera de su local scope
 * 
 * Documentación:
 * https://www.php.net/manual/es/functions.anonymous.php
 */


declare(strict_types=1);

$x = 10; // Gloabl scope

// Se implementa use() para acceder al valor de $x en el local scope y no generar error
$sum = function (int|float ...$numbers) use ($x): int|float {
    echo 'Esta varibale estaba fuera del local scope -> ' . $x . '</br>';
    return array_sum($numbers);
};

echo $sum(1, 2, 3, 4) . '</br>'; // 10

/**
 * Ejemplo de closure
 * Se retorna una anonymous function con una unión al scope padre, por lo
 * que puede acceder al valor de la variable $saludo independientemente
 * que la función ya se haya ejecutado.
 * 
 * La closure es asiganda a una variables.
 */

function generar_saludo(string $saludo): closure
{
    // El valor de $saludo queda unido a la función anónima
    return function () use ($saludo): string {
        return $saludo;
    };
}

$saludo_es = generar_saludo('Hola Amigo');
$saludo_en = generar_saludo('Hello friend');

echo $saludo_en() . '</br>';
echo $saludo_es() . '</br>';
