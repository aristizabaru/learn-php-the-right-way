<?php // Methods

/**
 * Methods
 * Los métodos dentro de las clases permiten ejecución de rutinas de código,
 * estos son en escencia funciones declaradas dentro de la clase
 * 
 * Documentación:
 * https://www.php.net/manual/en/language.oop5.php
 * 
 * Documentación métodos:
 * https://www.php.net/manual/es/language.oop5.basic.php#language.oop5.basic.properties-methods
 */

declare(strict_types=1);

class Methods
{
    public float $amount;
    public string $description;

    public function __construct(float $amount, string $description)
    {
        $this->amount = $amount;
        $this->description = $description;
    }

    // Métodos
    public function add_tax(float $rate)
    {
        $this->amount += $this->amount * $rate / 100;
    }

    public function apply_discount(float $rate)
    {
        $this->amount -= $this->amount * $rate / 100;
    }
}
