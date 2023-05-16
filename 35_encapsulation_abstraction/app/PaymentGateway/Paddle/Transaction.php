<?php // Encapsulation & abstraction

declare(strict_types=1);

namespace App\PaymentGateway\Paddle;


class Transaction
{
    // Un access modifier público puede romper el encapsulamiento y abstracción
    private float $amount;

    public function __construct(float $amount)
    {
        $this->amount = $amount;
    }

    public function process(): void
    {
        echo 'Processing $' . $this->amount . ' transaction <br/>';
        $this->generateReceipt();
        $this->sendEmail();
    }
    // hay implementaciones que deberían de permanecer privadas -> encapsulamiento
    private function generateReceipt()
    {
        // Abstracción
        // La implementación no es necesaria conocerla, solo el resultado
    }

    private function sendEmail()
    {
    }

    /**
     * Aunque se pueden establecer setters & getters con validaciones
     * dentro del método, no es recomendable su implementación
     * salvo sea necesario porque pueden llevar a romper el principio
     * de encapsulamiento
     */

    /**
     * Getter
     * No tiene sentido un Setter porque el monto de la transacción
     * es uno solo. Si se necesita otro $amount se debería de crear
     * otra transacción
     */
    public function getAmount(): float
    {
        return $this->amount;
    }
}
