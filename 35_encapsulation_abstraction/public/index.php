<?php // Encapsulación & abstracción

/**
 * Encapsulamiento -> Esconce el estado interno del objeto
 * 
 * En la Programación orientada a objetos (POO), la encapsulación se refiere
 * a la agrupación de datos con los métodos que operan en esos datos, o la
 * restricción del acceso directo a algunos de los componentes de un objeto.
 * La encapsulación se utiliza para ocultar los valores o el estado de un
 * objeto de datos estructurados dentro de una clase, evitando el acceso
 * directo a ellos por parte de los clientes de una manera que podría exponer
 * detalles de Implementación ocultos o violar la invariancia de estado
 * mantenida por los métodos.
 * 
 * Documentación:
 * https://es.wikipedia.org/wiki/Encapsulamiento_(inform%C3%A1tica)
 * 
 * Abstracción -> Esconde la implementación interna del objeto
 * 
 * En la teoría de la programación orientada a objetos, la abstracción implica
 * la facilidad para definir objetos que representan "actores" abstractos que
 * pueden realizar trabajo, informar y cambiar su estado y "comunicarse" con
 * otros objetos en el sistema. El término encapsulación se refiere a la
 * ocultación de los detalles del estado, pero extender el concepto de tipo
 * de datos de los lenguajes de programación anteriores para asociar el
 * comportamiento más fuertemente con los datos y estandarizar la forma en
 * que interactúan los diferentes tipos de datos es el comienzo de la
 * abstracción. Cuando la abstracción procede a las operaciones definidas,
 * permitiendo sustituir objetos de diferentes tipos, se denomina polimorfismo.
 * Cuando se procede en sentido contrario, dentro de los tipos o clases,
 * estructurándolos para simplificar un conjunto complejo de relaciones,
 * se denomina delegación o herencia.
 * 
 * Documentación:
 * https://en.wikipedia.org/wiki/Abstraction_(computer_science)#Abstraction_in_object_oriented_programming
 */

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use App\PaymentGateway\Paddle\Transaction;

echo '<pre>';

$transaction = new Transaction(340);
/**
 * Abstracción
 * No se conoce la implementación del método, solo lo que retorna.
 */
echo $transaction->getAmount();
