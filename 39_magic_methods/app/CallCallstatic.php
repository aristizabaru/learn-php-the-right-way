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

namespace App;

class CallCallstatic
{
    /**
     * __call & __callStatic
     * 
     * __call -> se llama cuando se intenta acceder a un método inaccesible
     * o inexistente
     * 
     * __callStatic -> se llama cuando se intenta acceder a un método inaccesible
     * o inexistente estático
     * 
     * La signature de los magic methods se debe respetar para poder declarar
     * su implementación
     */

    /**
     * Estos métodos son muy poderosos en el sentido que pueden procesar información
     * y luego diferirla a otros métodos no necesariamente en la misma clase.
     * 
     * Para enviar los argumentos pasados al el array de __call o __callstatic $arguments
     * se puede usar la función call_user_func_array()
     */
    public function __call($name, $arguments)
    {

        // Nota: el valor $name es sensible a mayúsculas.
        echo "Llamando al método de objeto '$name' "
            . implode(', ', $arguments) . "\n";
    }

    /**  Desde PHP 5.3.0  */
    public static function __callStatic($name, $arguments)
    {
        // Nota: el valor $name es sensible a mayúsculas.
        echo "Llamando al método estático '$name' "
            . implode(', ', $arguments) . "\n";
    }
}
