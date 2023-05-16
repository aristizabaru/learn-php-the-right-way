<?php // Herencia

/**
 * Herencia -> Extiende la funcionalidad de la clase base
 * 
 * La herencia, junto con la encapsulación y el polimorfismo, es una de las tres
 * características principales de la programación orientada a objetos. La herencia
 * permite crear clases que reutilizan, extienden y modifican el comportamiento
 * definido en otras clases. La clase cuyos miembros se heredan se denomina clase
 * base y la clase que hereda esos miembros se denomina clase derivada. Una clase
 * derivada solo puede tener una clase base directa, pero la herencia es transitiva.
 * Si ClassC se deriva de ClassB y ClassB se deriva de ClassA, ClassC hereda los
 * miembros declarados en ClassB y ClassA.
 * 
 * Nota: La herencia puede romper el encapsulamiento
 * 
 * SIEMPRE FAVORECER COMPOSICIÓN SOBRE HERENCIA
 * 
 * Documentación:
 * https://learn.microsoft.com/es-es/dotnet/csharp/fundamentals/object-oriented/inheritance
 */

namespace App;

class Toaster
{
    /**
     * Access Modifier -> Protected
     * El access modifier protected asegura que no se pueda acceder fuera del objeto
     * pero sí desde una clase hija.
     * 
     * Si se declara private, la clase hija no podría acceder o sobre escribir
     * la propiedad o método.
     * 
     * En el caso de los access modifier no se puede disminuir la visibilidad en las
     * clases hijas, si un método o propiedad es public, la clase hija no puede
     * sobre escribirlo a protected o private porque estaría disminuyendo la
     * visibilidad
     * 
     * Nota: La herencia puede romper el encapsulamiento
     */
    protected array $slices;
    protected int $size;

    public function __construct()
    {
        $this->slices = [];
        $this->size = 2;
    }

    /**
     * final keyword
     * Al usar final se hace un bloqueo a una clase para que no pueda ser extendida
     * o a un método para que no pueda ser sobre escrito por una clase hija.
     */
    final function license(): void
    {
        echo 'Esta tostadora pertenece a ACME<sup>®</sup>';
    }

    public function addSlice(string $slice): void
    {
        /**
         * El uso de $this
         * $this hace referencia al objeto que está siendo invocado por lo que si
         * se llama desde una instancia de una clase hija, ese $this hará referencia
         * a ese objeto y no a una instancia de la clase padre
         */
        if (count($this->slices) < $this->size) {
            $this->slices[] = $slice;
        }
    }

    public function toast(): void
    {
        foreach ($this->slices as $i => $slice) {
            echo ($i + 1) . ': Toasting ' . $slice . PHP_EOL;
        }
    }
}
