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

class InvoiceComplex
{
    private string $id;
    public float $amount;
    public string $description;

    /* No se deberían de serializar ciertos datos de forma transparente,
     * es por esto que se usan los métodos mágicos __serialize &
     * __unserialize para controlar la forma en que se ejecuta
     * la serialización y deserialización
     */
    public string $creditCardNumber; // No se debería de guardar RAW sino encrypted

    public function __construct(float $amount, string $description, string $creditCardNumber)
    {
        $this->id = $this->createInvoiceId();
        $this->amount = $amount;
        $this->description = $description;
        $this->creditCardNumber = $creditCardNumber;
    }

    private function createInvoiceId(): string
    {
        return uniqid('invoice_');
    }

    /*
     * Hay unos magic methods que se pueden usar para controlar la serialización
     * & unserialización, estos son __sleep() & __wakeup(), sin embargo permite
     * más control del proceso y tienen mayor presedencia __serialize & unserialize()
     */

    public function __serialize(): array
    {
        // Se pueden controlar qué propiedaes se quieren serializar
        return [
            'id' => $this->id,
            'amount' => $this->amount,
            'description' => $this->description,
            // Este proceso permite controlar como se serializa el objeto.
            'creditCardNumber' => base64_encode($this->creditCardNumber)
        ];
    }

    public function __unserialize(array $data): void
    {
        $this->id = $data['id'];
        $this->amount = $data['amount'];
        $this->description = $data['description'];
        // Total control sobre como construir nuevamente le objeto
        $this->creditCardNumber = base64_decode($data['creditCardNumber']);
    }
}
