<?php // Serialize & unserialize

/* Serialize & unserialize
 * El proceso de seralizar y deserializar se usa para poder convertir estructuras
 * de datos dentro de PHP a cadenas de texto que pueden ser compartidas o guardadas
 * en BD para su percistencia, cadenas de texto que luego serán recuperadas a las
 * estructuras de datos originales
 * 
 * Serializar(serialize) -> convertir a cadena
 * Deserializar(unserialize) -> recuperar estructura de datos a partir de la cadena
 * 
 * Para estos proceso PHP posee dos funciones incorporadas:
 * serialize(mixed $value): string
 * unserialize(string $str, array $options = ?): mixed
 * 
 * Dentro de la definición de las clases se pueden usar los métodos mágicos
 * __serialize() y __unserialize() para controlar el proceso de serialización
 * y deserealización. SIEMPRE SE SERIALIZAN LAS PROPIEDAES EN LAS CLASES, LOS
 * MÉTODOS NO SON SERIALIZABLES.
 * 
 * La serialización y deserialización crea copias profundas a diferencia de clone
 * que crea copias superficiales (shallow copies vs deep copies)
 * 
 * Documentación:
 * https://www.php.net/manual/es/function.serialize.php
 * https://www.php.net/manual/es/function.unserialize.php
 * https://www.php.net/manual/es/language.oop5.magic.php#object.serialize
 * https://www.php.net/manual/es/language.oop5.magic.php#object.unserialize
 */

declare(strict_types=1);

namespace App;

class Invoice
{
    private string $id;

    public function __construct()
    {
        $this->id = $this->createInvoiceId();
    }

    private function createInvoiceId(): string
    {
        return uniqid('invoice_');
    }
}
