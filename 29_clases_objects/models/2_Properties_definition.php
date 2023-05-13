<?php // Propiedades

/**
 * Propiedades
 * Las variables pertenecientes a una clase se llaman propiedades.
 * También se les puede llamar usando otros términos como
 * atributos, o campos
 * 
 * Documentación:
 * https://www.php.net/manual/en/language.oop5.php
 * 
 * Documentación propiedades:
 * https://www.php.net/manual/es/language.oop5.properties.php
 */

declare(strict_types=1);

class Properties_definition
{
    /**
     * Access modifiers
     * A la hora de declarar propiedades & métodos de una clase es importante
     * determinar su visibilidad que puede ser: public, protected, o private.
     * A estos se les conoce como 'acces modifiers'
     */
    // Camnbiar a private impide el acceso fuera de la clase
    public $amount;
    public $description;
}
