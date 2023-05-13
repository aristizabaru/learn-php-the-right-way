<?php // Constructor

/**
 * Constructor
 * PHP permite a los desarrolladores declarar métodos constructores para las clases.
 * Aquellas que tengan un método constructor lo invocarán en cada nuevo objeto
 * creado, lo que lo hace idóneo para cualquier inicialización que el objeto
 * pueda necesitar antes de ser usado.
 * 
 * Documentación:
 * https://www.php.net/manual/en/language.oop5.php
 * 
 * Documentación contructores:
 * https://www.php.net/manual/en/language.oop5.decon.php
 */

declare(strict_types=1);

class Constructor
{
    public float $amount;
    public string $description;
    /**
     * Los constructores se invocan cada que se crea una nueva instancia
     * de la clase y se definen usando el atributo mágico __construct
     */
    public function __construct(float $amount, string $description)
    {
        /**
         * $this hace referencia a la instancia creada, de esta forma
         * se pueden acceder a sus propiedades
         */
        $this->amount = $amount;
        $this->description = $description;
    }
}
