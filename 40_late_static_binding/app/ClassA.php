<?php // Late Static Binding

/**
 * Late Static Binding
 * PHP posee dos tipos de binding, el early biding que ocurre en compile time y
 * el late biding que ocurre en runtime.
 * 
 * El problema que resuelve específicamente Late Static Biding es que los métodos
 * y propiedades estáticos tienen un early biding, esto significa una cosas en el
 * contexto de la herencia:
 * 
 * 1. Cuando se declara un método o propiedad static en el padre y se hace el
 * llamado desde la clase hija el resolution operator '::' resuelve a self,
 * el cual representa la clase padre gracias al early biding que se dio en
 * compile time. Esto puede causar problemas accediendo a propiedades o métodos
 * de la clase hija.
 * 
 * Este problema es resuelto por el late static biding que usando el tipo static
 * en vez de self ayuda a que el biding se resuelva en tiempo de ejecución.
 */

declare(strict_types=1);

namespace App;

class ClassA
{
    protected string $name = 'A';

    public function getName(): string
    {
        /**
         * Gracias a $this, el return resuelve bien en la clase B ya que
         * $this hace referencia al objeto que hace el llamado y esto
         * se resuelve en runtime así tenga un early biding la clase
         * a que $name = 'A';
         */
        return $this->name;
    }
}
