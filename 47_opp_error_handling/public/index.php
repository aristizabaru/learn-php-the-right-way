<?php // Exceptions & Try Catch Finally blocks

/*
 * Exceptions & Try Catch Finally blocks 
 * Una excepción puede ser lanzada ("thrown"), y atrapada ("catched") dentro de PHP.
 * El código puede estar dentro de un bloque try para facilitar la captura de
 * excepciones potenciales. Cada bloque try debe tener al menos un bloque catch
 * o finally correspondiente.
 * 
 * Documentación excepciones:
 * https://www.php.net/manual/es/language.exceptions.php
 * 
 * El objeto lanzado debe ser una instancia de la clase Exception o una subclase
 * de Exception. Intentar lanzar un objeto que no lo sea resultará en un Error
 * Fatal de PHP.
 * 
 * Errores
 * PHP 7 cambia la mayoría de los errores notificados por PHP. En lugar de notificar
 * errores a través del mecanismo de notificación de errores tradicional de PHP 5,
 * la mayoría de los errores ahora son notificados lanzando excepciones Error.
 * 
 * Documentación errores:
 * https://www.php.net/manual/es/language.errors.php7.php
 * 
 * Jerarquia errores
 * 1. Throwable
 *      1. Error
 *          1. ArithmeticError
 *              1. DivisionByZeroError
 *          2. AssertionError
 *          3. CompileError
 *              1. ParseError
 *          4. TypeError
 *              1. ArgumentCountError
 *      2. Exception
 *          1. ...
 * 
 * Al igual que las excepciones normales, las excepciones Error se propagarán a través
 * del call stack hasta alcanzar el primer bloque catch coincidente. Si no hay bloques
 * coincidentes, será invocado cualquier manejador de excepciones predeterminado
 * (goblal exeption handler) instalado con set_exception_handler(), y si no hubiera
 * ningún manejador de excepciones predeterminado, la excepción será convertida en un
 * error fatal y será manejada como un error tradicional.
 * 
 * NOTA: Para capturar tanto excepciones de tipo 'Error' como excepciones normales
 * se mejor capturar la clase base Throwable
 */

declare(strict_types=1);

use App\Invoice;
use App\Customer;
use App\DomainInvoiceException;

require_once dirname(__DIR__) . '/vendor/autoload.php';

echo '<pre>';

/*
 * Global exception handler
 * Se puede configurar un handler global para cualquier excepción usando la función
 * incoporada set_exception_handler() 
 */
set_exception_handler(function (\Throwable $th) {
    echo $th->getMessage();
});


$invoice = new Invoice(new Customer());

// Como el catch que atrapa el error en el callstack, el handler global no se activa
try {
    $invoice->process(-25);

    /*
     * Aunque se puede especificar la clase extendida de Exception o Error que se espera
     * atrapar, lo mejor es referenciar \Thrawable ya que todas extienden de ella,
     * así tanto excepciones como errores de PHP serán atrapados
     */
} catch (\Throwable $th) {
    /*
     * Se puede throw otra alerta o hacer algún otro procesamiento como tirar el error
     * a un log y continuar.
     * 
     * $th es la instancia de la excepción.
     */
    $error = 'Code error: ' . $th->getCode() . ' - ' . $th->getMessage();
    $location = '. File: ' . $th->getFile() . '. Line: ' . $th->getLine();

    echo  $error . $location . PHP_EOL;

    /*
     * No es necesario esta declaración, solo es para demostrar como usar
     * métodos de clase para generar domain errors
     */

    throw DomainInvoiceException::missingBilling();
} finally {
    /*
     * Las declaraciones dentro de finally siempre se ejecutarán independinetemente
     * si se atrapa un error o no. Esta estructura es opcional dentro de try/catch
     */
    echo 'Finally Block: I Always Run...' . PHP_EOL;
}
