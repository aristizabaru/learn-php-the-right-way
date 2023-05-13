<?php // Getters & Setters

/**
 * Getters & Setters
 * Las propiedades NUNCA deberían ser accesibles directamente fuera de la clase,
 * estas solo deberían de accederse desde la clase por medio de métodos denominados
 * getters & setters, a los cuales se les pueda aplicar los constraints
 * pertinentes para cada caso.
 * 
 * En este orden de ideas todas las propiedades deberían ser privadas, salvo
 * sea absolutamente necesario tenerlas públicas
 * 
 * Documentación:
 * https://www.php.net/manual/en/language.oop5.php
 * 
 * Documentación métodos:
 * https://www.php.net/manual/es/language.oop5.basic.php#language.oop5.basic.properties-methods
 */

declare(strict_types=1);

class Getter_setter
{
    // Las propiedades deberían ser siempre privadas
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
}
