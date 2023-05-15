<?php // Static Properties & methods

/**
 * Static Properties & methods
 * La palabra reservada 'static' permite crear propiedades y métodos de clase,
 * estas propiedades y métodos no están vinculadas al objeto sino a la clase
 * misma por lo que su llamado se hace desde la clase usando el Scope Operator
 * Resolution '::'
 * 
 * Para llamados dentro de la clase se puede usar la palabra reservada 'self'.
 * 
 * El uso generalizado de static properties & methods es considerado MALA PRÁCTICA,
 * sin embargo hay algunos casos donde son pertinentes:
 * - Counters
 * - Cache de algunos datos productos de una rutina costosa
 * - Singleton pattern
 * - Utility methods (Ejemplo: parsers)
 * 
 * Documentación:
 * https://www.php.net/manual/es/language.oop5.static.php
 */

declare(strict_types=1);

namespace App\PaymentGateway\Stripe;

class Transaction
{
    // Se crea una propiedad de clase (estática) con access modifier 'private'
    private static int $count = 0;
    private float $amount;

    public function __construct($amount)
    {
        $this->amount = $amount;
        self::$count++;
    }

    // Static Method
    public static function getCount(): int
    {
        /**
         * Gracias al access modifier que tiene $count se crea un getter para
         * este valor de tipo estático (atado a la clase)
         */
        return self::$count;
    }
}
