<?php // Static variables

/**
 * Static variables
 * Otra característica importante del ámbito de las variables es la variable estática.
 * Una variable estática existe sólo en el ámbito local de la función, pero no pierde
 * su valor cuando la ejecución del programa abandona este ámbito.
 * 
 * Cuando se declara una varibale estática, el valor asignado puede ser un escalar,
 * el resultado de una expresión pero nunca el llamado a una función. Para esto
 * primero se debe declarar como null y luego asignar la variable al resultado
 * del llamado de una función
 * 
 * Documentación:
 * https://www.php.net/manual/es/language.variables.scope.php#language.variables.scope.static
 */


// Ejemplo de implementación

function getValue()
{
    static $value = null; // se declara la variable estatica para que no se destruya

    if (!isset($value)) // verifica que la variable no está definida
    {
        $value = some_very_expensive_function(); // se almacena el valor
    }

    // Algunos procesos adicionales con $value

    return $value;
}

function some_very_expensive_function()
{
    sleep(2);

    return 10;
}

// Gracias a la static variable no ejecuta la función costosa 3 veces
echo getValue() . '</br>';
echo getValue() . '</br>';
echo getValue() . '</br>';
