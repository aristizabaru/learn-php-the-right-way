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

class Invoke
{
    /**
     * __invoke
     * Es invocado cuando se intenta llamar al objeto directamente y no a uno
     * de sus métodos o propiedades
     * 
     * __invoke es buena práctica para aplicar en clases de una sola responsabilidad
     * ya que solo implemetnando el método mágico __invoke se puede ejecutar
     * la instancia y funcionaría como si fuera una función. -> ver ejemplo en index.php
     */

    public function __invoke()
    {
        echo 'Lógica ejecutada invocando instancia de Invoke class' . PHP_EOL;
    }
}
