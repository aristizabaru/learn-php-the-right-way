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

class ToasterPro extends Toaster
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

    // Se usa constructor property promotion
    public function __construct()
    {
        /**
         * Si no se inicializa el constructor del padre, esto puede generar un error
         * ya que no se han inicializado en la clase padre $slices.
         * 
         * El constructor del padre no se inicializa automáticamente. Hay que invocarlo
         * usando a palabra reservada 'parent' y el scope resolution operator '::'
         */
        parent::__construct();
        $this->size = 4;
    }

    // Sobre escribir métodos
    public function addSlice(string $slice): void
    {
        /**
         * Se puede hacer una lógica custom para este método sobre escrito como validaciones
         * extras, para llamar al método del padre se debe usar 'parent::nombreMetodo'
         */

        // ... algunas validaciones extras
        parent::addSlice($slice);
    }


    public function toastBagel()
    {
        /**
         * El uso de $this
         * $this hace referencia al objeto que está siendo invocado por lo que si
         * se llama desde una instancia de una clase hija, ese $this hará referencia
         * a ese objeto y no a una instancia de la clase padre
         */
        foreach ($this->slices as $i => $slice) {
            echo ($i + 1) . ': Toasting ' . $slice . ' with bagels option ' . PHP_EOL;
        }
    }
}
