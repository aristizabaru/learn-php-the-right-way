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

echo $sum(1, 2, 3, 4); // 10