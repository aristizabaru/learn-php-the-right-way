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
 * Documentación:
 * https://learn.microsoft.com/es-es/dotnet/csharp/fundamentals/object-oriented/inheritance
 */

declare(strict_types=1);

use App\Toaster;
use App\ToasterPro;

require_once __DIR__ . '/../vendor/autoload.php';

echo '<pre>';

$toaster = new Toaster();
$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->toast(); // Solo tuesta 2 veces

$toasterPro = new ToasterPro();
$toasterPro->addSlice('bread pro');
$toasterPro->addSlice('bread pro');
$toasterPro->addSlice('bread pro');
$toasterPro->addSlice('bread pro');
$toasterPro->toast(); // Tuesta hasta 4 veces
$toasterPro->toastBagel(); // También tiene opción nueva de bagel
$toasterPro->license(); // Esta tostadora pertenece a ACME®
