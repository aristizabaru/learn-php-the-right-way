<?php // Object cloning and __clone magic method

/*
 * Object cloning and __clone magic method 
 * Para crear una copia de un objeto se utiliza la palabra clave clone
 * (que invoca, si fuera posible, al método __clone() del objeto). No se
 * puede llamar al método __clone() de un objeto directamente.
 * 
 * $copia_de_objeto = clone $objeto;
 * 
 * Cuando se clona un objeto, PHP llevará a cabo una copia superficial
 * de las propiedades del objeto. Las propiedades que sean referencias
 * a otras variables, mantendrán las referencias.
 * 
 * __clone(): void
 * 
 * Una vez que la clonación ha finalizado, se llamará al método __clone()
 * del nuevo objeto (si el método __clone() estuviera definido), para
 * permitirle realizar los cambios necesarios sobre sus propiedades.
 * 
 * Documentación:
 * https://www.php.net/manual/es/language.oop5.cloning.php
 */

declare(strict_types=1);

namespace App;

class Invoice
{
    private string $id;

    // si se clona un objeto con el keyword clone, no se llama al constructor
    public function __construct()
    {
        $this->id = $this->createInvoiceId();
    }

    // Este método solo se llama si se clona un objeto con el keyword clone
    public function __clone()
    {
        $this->id = $this->createInvoiceId();
    }

    public static function create(): static
    {
        return new static();
    }

    private function createInvoiceId(): string
    {
        return uniqid('invoice_');
    }
}
