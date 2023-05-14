<?php // Namespaces

/**
 * Namespaces
 * Cuando se define una clase, una función o una constante se ponen por defecto
 * en un global space si no hay una definición de un namespace.
 * 
 * Los namespaces resuelven dos problemas:
 * 1. El conflicto de nombres entre el código que se crea y las clases/funciones/constantes
 * internas de PHP o las clases/funciones/constantes de terceros.
 * 
 * 2. La capacidad de apodar (o abreviar) Nombres_Extra_Largos diseñada para aliviar
 * el primer problema, mejorando la legibilidad del código fuente.
 * 
 * Existen 3 tipos de referencias a los espacios de nombre:
 * 1. No cualificados: no utiliza el sufijo '\' y por lo tanto $a = new foo()
 * resuleve al namespace\foo o globalspace\foo
 * 
 * 2. Nombre cualificado: si se le asigna una cualificación con sufijo '\' como
 * ruta relativa al namespace actual, entonces $a = namespace\new foo()
 * resuelve a namespace_actual\namespace\foo
 * 
 * 3. Completamente cualificado: cuando se da la ruta absoluta del namespace utilizando
 * el sufijo '\', donde $a = \namespace_actual\new foo() resuelve a \namespace_actual\foo
 * 
 * Documentación:
 * https://www.php.net/manual/es/language.namespaces.php
 */

/**
 * use & as
 * La capacidad de referirse a un nombre completamente cualificado externo con un alias,
 * o importar, es una característca importante de los espacios de nombres. Esto es
 * similar a la capacidad de los sistemas de ficheros basados en Unix de crear enlaces
 * simbólicos a un fichero o directorio.
 * 
 * Para tener dispoible un espacio de nombre dentro de otro fichero es indispensable
 * importar el fichero usando 'require' o 'include' e importar el namespace usando
 * 'use'
 * 
 * use namespace\nivel\clase
 * 
 * Se puede apodar un nombre de clase, apodar un nombre de interfaz, y 
 * apodar un nombre de espacio de nombres usando la palabra reservada 'as'
 * 
 * use namespace\nivel\clase as MiClase
 * 
 * NOTA: SI SE CARGA UN ARCHIVO CON UN NAMESPACE DEFINIDO Y DESDE AHÍ SE NECESITA
 * HACER REFERENCIA UNA CLASE EN EL NAMESPACE GLOBAL, SE DEBE IMPORTAR O HACER
 * REFERENCIA A ÉL EXPLICITAMENTE USANDO 'use' O '\' PORQUE PHP NO RESUELVE AL
 * NAMESPACE GLOBAL AUTOMÁTICAMENTE SI EL NAMESPACE LOCAL FALLA. ESTO SOLO APLICA
 * PARA CLASES.
 */

/**
 * Espacio global
 * Sin ninguna definición de espacios de nombres, todas las definiciones de clases
 * y funciones son colocadas en el espacio global, como si lo estuvieran antes de
 * que PHP soportara los espacios de nombres. Prefijar un nombre con \ especificará
 * que el nombre es requerido desde el espacio global incluso en el contexto
 * del espacio de nombres.
 * 
 * $f = \fopen(...); // llamar a fopen global
 */

declare(strict_types=1);
require_once __DIR__ . DIRECTORY_SEPARATOR . '../PaymentGateway/Stripe/Transaction.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . '../PaymentGateway/Stripe/CustomerProfile.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . '../PaymentGateway/Paddle/Transaction.php';

// El namespace se importa usando 'use'
use PaymentGateway\Stripe\Transaction as Stripe;

echo '<pre>';

// Si la clase no tiene definido un namespace la busca en el globalspace.
var_dump(new Stripe());

/**
 * Si no se importa el namespace, se puede usar un namespace cualificado
 * o un namespace completamente cualificado para hacer referencia
 */
// Referencia cualificada desde la referencia del namespace actual
var_dump(new PaymentGateway\Paddle\Transaction());
// Referencia completamente cualificada desde el espacio global
var_dump(new \PaymentGateway\Paddle\Transaction());

/**
 * Constante mágica __NAMESPACE__
 * El valor de __NAMESPACE__ es una cadena que contiene el nombre del espacio de
 * nombres actual. En código global, que no es de espacio de nombres, contiene
 * una cadena vacía.
 */

var_dump(__NAMESPACE__); // Como es el namespace global arroja una cadena vacía
