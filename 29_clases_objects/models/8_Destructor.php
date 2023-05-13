<?php // Destructor

/**
 * Destructor
 * PHP posee un concepto de destructor similar al de otros lenguajes orientados
 * a objetos, tal como C++. El método destructor será llamado tan pronto como
 * no hayan otras referencias a un objeto determinado, o en cualquier otra
 * circunstancia de finalización.
 * 
 * Al igual que el constructor __construct, el destructor __destruct pertenece
 * a los Magic Methods
 * 
 * Documentación:
 * https://www.php.net/manual/en/language.oop5.php
 * 
 * Documentación métodos:
 * https://www.php.net/manual/es/language.oop5.decon.php
 */


declare(strict_types=1);

class Destructor
{
    private float $amount;
    private string $description;

    public function __construct(float $amount, string $description)
    {
        $this->amount = $amount;
        $this->description = $description;
    }


    // Métodos
    public function add_tax(float $rate): void
    {
        $this->amount += $this->amount * $rate / 100;
    }

    public function apply_discount(float $rate): void
    {
        $this->amount -= $this->amount * $rate / 100;
    }

    // Getter & Setter
    public function get_amount(): float
    {
        return $this->amount;
    }

    public function get_description(): string
    {
        return $this->description;
    }

    public function set_description(string $description): void
    {
        $this->description = $description;
    }

    // Implementación del método __destruct
    public function __destruct()
    {
        echo "Destruct: {$this->description}";
    }
}
