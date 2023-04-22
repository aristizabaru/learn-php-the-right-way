<?php // Análisis variables

/**
 * Análisis de variables
 * En PHP se pueden introducir variables en cadenas con comillas dobles
 * que serán analisadas cuando el escript corra. Existen dos tipos
 * de sintaxis para esto, la simple y compleja.
 */

// Sintaxis simple
$name = "Will";
$apellido = "Smith";
$saludo = "Hola $name $apellido";
echo $saludo . "</br>";

$arr = ["genial", "fantástico", "curioso"];
echo "Esto es $arr[0]" . "</br>";

// Sintaxis compleja: permite el uso de expresiones complejas
$arr2 = ["manzana" => "3.000 COP", "naranja" => "1.000 COP"];
echo "La manzana cuesta: {$arr2['manzana']}";
