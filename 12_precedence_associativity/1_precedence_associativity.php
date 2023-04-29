<?php // Precedence & Associativity

/**
 * Precedencia y asociatividad
 * La precedencia de un operador indica qué tan "estrechamente"
 * se unen dos expresiones juntas. Cuando los operadores tienen
 * igual precedencia su asociatividad decide cómo se agrupan.
 * 
 * Documentación: https://www.php.net/manual/es/language.operators.precedence.php
 */
echo '<pre>';

// Precedencia: * tiene mayor precedencia que + y este a su vez mayor que =
$x = 5 + 3 * 5; // 20 -> Primero se multiplica, luego se suma y por último se asigna
var_dump($x);

// Forzar precedecia: se puede forzar la precedencia usando paréntisis ()
$x = (5 + 3) * 5; // 40 -> Primero se suma, luego se multiplica y por último se asigna
var_dump($x);

/**
 * Asociatividad
 * Cuando los operadores tienen la misma precedencia la expresión se resuelve
 * a través de la asociatividad que puede ser izquierda o derecha
 */

// La asociatividad del operador = es derecha
$x = $y = 5; // Primera se resuelve la expresión $y = 5 y luego $x = y

// Otro ejemplo de operadores con misma precedencia con asociativdad izquierda
$x = 5;
$y = 2;
$z = 10;

$result = $x / $y * $z; // Se agrupan de izquierda a derecha por la precedencia
var_dump($result); // 25 -> Primero divide $x y $y, luego multiplca por $z

/**
 * Operadores non-associative o no asociativos
 * Cuando varios operadores comparten la misma precedencia y no tienen
 * asociatividad, no pueden ir juntos en el mismo statement (declaración)
 * porque produce un error de sintaxis
 */

 // $result = $x < $y > $z; -> Parse error: syntax error, unexpected token ">"
