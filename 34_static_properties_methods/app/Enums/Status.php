<?php // Class constants

/**
 * Class constants
 * Las constantes se diferencian de las variables comunes en que no utilizan
 * el símbolo $ al declararlas o emplearlas. La visibilidad predeterminada
 * de las constantes de clase es public.
 * 
 * Para acceder a una constante de clasa se debe usar el scope resolution
 * operator '::' bien sea referenciando la clase::constante o el objeto::constante
 * 
 * Diferencia entre $this y self
 * La principal diferencia en este constento es que dentro de una clase
 * '$this' se refiere al objeto que está haciendo la invocación y 'self'
 * a la clase
 * 
 * Documentation:
 * https://www.php.net/manual/es/language.oop5.constants.php
 */

namespace App\Enums;

class Status
{
    // Definición de constante de clase
    public const PAID = 'paid';
    public const PENDING = 'pending';
    public const DECLINED = 'declined';

    // Lookup table -> mapea datos de input a un output
    public const ALL_STATUS = [
        self::PAID => 'Paid',
        self::PENDING => 'Pending',
        self::DECLINED => 'Declined'
    ];
}
