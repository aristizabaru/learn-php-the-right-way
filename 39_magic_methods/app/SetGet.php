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

class SetGet
{
    /**
     * __get & __set
     * 
     * __get -> se llama cuando se intenta acceder a una propiedad inaccesible
     * o inexistente
     * 
     * __set -> se llama cuando se intenta asignar valor a una propiedad inaccesible
     * o inexistente
     * 
     * La signature de los magic methods se debe respetar para poder declarar
     * su implementación
     */

    // $name es el nombre de la propiedad que se está accediendo como argumento
    public function __get($name)
    {
        var_dump($name);
    }

    // $name es el nombre de la propiedad y $value el valor que se quiere asignar
    public function __set($name, $value)
    {
        /**
         * Antes de crear la propiedad si no existe o es private/protected dentro
         * de la clase se llama a este método mágico. Se pueden hacer validaciones
         * o impedir su creación desde aquí
         */
        echo 'Es prohibido crear propiedades nuevas en este objeto';
    }
}
