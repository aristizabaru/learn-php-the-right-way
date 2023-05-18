<?php // Interface

/**
 * Interface
 * Las interfaces de objetos permiten crear código con el cual especificar qué métodos
 * deben ser implementados por una clase, sin tener que definir cómo estos métodos son
 * manipulados.
 * 
 * Las interfaces se definen de la misma manera que una clase, aunque reemplazando la
 * palabra reservada class por la palabra reservada interface y sin que ninguno de sus
 * métodos tenga su contenido definido.
 * 
 * Todos los métodos declarados en una interfaz deben ser públicos, ya que ésta es la
 * naturaleza de una interfaz.
 * 
 * Documentación:
 * https://www.php.net/manual/es/language.oop5.interfaces.php
 */

declare(strict_types=1);

namespace App;


// Para declarar una interface se usa la keyword interface
// Una interface puede extender una o más interfaces: interface Debt extends Inter1, Inter2
interface DebtCollector
{
    /**
     * Propiedades & constantes
     * Dentro de las interfaces no se pueden tener propiedades pero sí constantes.
     * Las constantes dentro de las interfaces no pueden ser sobre escritas ni
     * tampoco re asignadas.
     */

    // Toda clase que implemente una inerface debe implementar los métodos de la interfaz
    // Todo método dentro de una interfaz debe ser público
    public function collect(float $owedAmount): float;
}
