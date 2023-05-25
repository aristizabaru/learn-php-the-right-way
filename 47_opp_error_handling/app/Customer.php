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

namespace App;

class Customer
{
    public function __construct(private array $billingInfo = [])
    {
    }

    public function getBillingInfo(): array
    {
        return $this->billingInfo;
    }
}
