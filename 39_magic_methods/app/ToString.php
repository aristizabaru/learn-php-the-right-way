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

/**
 * Cuando se declara el magic method __toString desde php 8.0 se implementa
 * under the hood la interface Stringable
 */

class ToString
{
    /**
     * __toString
     * Es invocado cuando se intenta imprimir un objeto
     */

    public function __toString(): string
    {
        return 'Instancia de ToString Class' . PHP_EOL;
    }
}
