<?php // Method Chaining

/**
 * Method chaining
 * Es posible usar una técnica llamada Method Chaining donde se encadenan
 * múltiples llamados a métodos de la instancia de una clase encadenados
 * por el operador de objetos -> (object operator).
 * 
 * Para hacerlo es necesario que los métodos que se encadenan retornen
 * el propio objeto, como se muestra a continuación.
 * 
 * Se debe entender muy bien el caso de uso para aplicar chaining methods.
 * 
 * Documentación:
 * https://www.php.net/manual/en/language.oop5.php
 * 
 * Documentación métodos:
 * https://www.php.net/manual/es/language.oop5.basic.php#language.oop5.basic.properties-methods
 */


declare(strict_types=1);

class Method_chaining
{
    private float $amount;
    private string $description;

    public function __construct(float $amount, string $description)
    {
        $this->amount = $amount;
        $this->description = $description;
    }


    // Métodos retornando su instancia para aplicar method chaining
    public function add_tax(float $rate): Method_chaining
    {
        $this->amount += $this->amount * $rate / 100;

        return $this;
    }

    public function apply_discount(float $rate): Method_chaining
    {
        $this->amount -= $this->amount * $rate / 100;

        return $this;
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
