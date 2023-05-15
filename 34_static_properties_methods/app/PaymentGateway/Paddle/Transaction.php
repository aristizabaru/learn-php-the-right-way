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

declare(strict_types=1);

namespace App\PaymentGateway\Paddle;

use App\Enums\Status;

class Transaction
{

    private string $status;

    public function __construct()
    {
        $this->status = Status::PENDING;
    }

    // Method
    public function setStatus($status): self
    {
        // Para evitar asignaciones inválidas se usa una lookup table para validar
        if (!isset(Status::ALL_STATUS[$status]))
            throw new \InvalidArgumentException('Ivalid status');

        $this->status = $status;
        return $this;
    }
}
