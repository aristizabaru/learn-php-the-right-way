<?php // Typed properties

/**
 * Typed properties
 * A partir de PHP 7.4.0, las definiciones de propiedades pueden incluirse
 * Declaraciones de tipo, con la excepción de los callable.
 * 
 * Documentación:
 * https://www.php.net/manual/en/language.oop5.php
 * 
 * Documentación propiedades:
 * https://www.php.net/manual/es/language.oop5.properties.php
 * https://www.php.net/manual/es/language.oop5.properties.php#language.oop5.properties.typed-properties
 */

declare(strict_types=1);

class Typed_properties
{
    /**
     * Para incluir declaraciones de tipo se hace luego de la declaración
     * del access modifier.
     * 
     * La declaración de tipos también admiten el nullable type que permite
     * asignar un valor null o el type que se definió
     * 
     * Las propiedades con declaración de tipo no pueden ser accedidas antes
     * de inicializarlas. ES BUENA PRÁCTICA NO INICIALIZARLAS DIRECTAMENTE
     * CON EL OPERADOR DE ASIGNACIÓN EN SU DELCARACIÓN, SINO HACERLO
     * MEDIANTE EL CONSTRUCTOR
     */
    public ?float $amount;
    public string $description;
}
