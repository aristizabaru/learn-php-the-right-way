<?php // Constructor property promotion

/**
 * Constructor property promotion
 * Esta es una característica que se incorporó en PHP 8.0 y que
 * permite eliminar el código boilerplate (repetitivo) a la hora
 * de crear un constructor y definir sus propiedades
 * 
 * Documentation:
 * https://wiki.php.net/rfc/constructor_promotion
 */

declare(strict_types=1);

/**
 * Forma de declaración antes de constructor property promotion
 * Antes de la introducción del constructor property promotion se repetía el
 * código en tres lugares diferentes.
 * 
 * En la segunda clase se observa como este shortcut simplifica la declaración
 */

class Constructor_initial
{
    // 1. Declaración inicial
    private float $amount;
    private string $description;

    public function __construct(
        // 2. Declaración de parámetros
        float $amount,
        string $description
    ) {
        // 3. Asignación de variables
        $this->amount = $amount;
        $this->description = $description;
    }

    // Getter
    public function get_description(): string
    {
        return $this->description;
    }
}

/**
 * Desde la declaración del parámetro si se le asigna un 'access modifier'
 * esto se entiende como una constructor property promotion por lo que
 * under the hood PHP crea las propiedades correspondientes y las inicializa
 * cuando se instancia el objeto.
 * 
 * La única propiedad que no se puede type hint es de tipo callable. Las
 * propiedades se inicializan con valores escalares, es por esto que no
 * es posible hacer una property promotion o una declaración de propiedad
 * en cualquier caso
 */
class Constructor_property_promotion
{

    public function __construct(
        // 1. Solo se necesita la declaración con 'access modifier'
        private float $amount,
        private string $description
    ) {
    }

    // Getter
    public function get_description(): string
    {
        return $this->description;
    }
}
