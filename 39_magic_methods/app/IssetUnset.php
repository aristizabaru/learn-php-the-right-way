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

class IssetUnset
{

    /**
     * __isset & __unset
     * 
     * __isset -> se llama cuando se usa isset en funciones vacias o en propiedades
     * innacesibles o no declaradas
     * 
     * __unset -> se llama cuando se usa unset en propiedades innacesibles o no
     * declaradas
     * 
     * La signature de los magic methods se debe respetar para poder declarar
     * su implementación
     */

    public function __isset($name)
    {
        // Se usa corchetes para poder usar una expresión con el object operator
        return isset($this->{$name});
    }

    public function __unset($name)
    {
        var_dump("No existe");
    }
}
