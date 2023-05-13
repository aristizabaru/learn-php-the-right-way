<?php // Classes & objects

declare(strict_types=1);

include_once '../models/1_Class_definition.php';
include_once '../models/2_Properties_definition.php';
include_once '../models/3_Typed_properties.php';
include_once '../models/4_Constructor.php';
include_once '../models/5_Methods.php';
include_once '../models/6_Getter_setter.php';
include_once '../models/7_Method_chaining.php';
include_once '../models/8_Destructor.php';

echo '<pre>';
/**
 * Objetos
 * Los objetos son instancias de las clases, para crearlos se usan la palabra
 * reservada new seguido del nombre de la clase y paréntesis.
 * 
 * LOS ARCHIVOS DE LAS CLASES SE SUELEN NOMBRAR COMO LA CLASE, PARA
 * EFECTOS PRÁCTICOS DEL ORDEN DE LOS CONCEPTOS SE NOMBRA DE FORMA
 * DIFERENTE YA QUE UNA CLASE NO PUEDE COMENZAR POR NÚMERO
 * 
 * Documentación:
 * https://www.php.net/manual/es/language.types.object.php
 */

$transaction_1 = new Class_definition();
var_dump($transaction_1); // object(Transaction_1)#1 (0) { }

$transaction_2 = new Properties_definition();
// Como las propiedades no fueron inicializadas resuelven a NULL
var_dump($transaction_2);
/**
 * Para acceder a las propiedades o métodos de un objeto se usa
 * el object operator ->
 */
$transaction_2->amount = 15;
var_dump($transaction_2->amount); // int(15)

$transaction_3 = new Typed_properties();
var_dump($transaction_3); // object(Typed_properties)#3...

/**
 * Los constructores permiten pasar los argumentos que inicializarán
 * las propiedades de la instancia
 */
$transaction_4 = new Constructor(15, 'Transaction 4');
var_dump($transaction_4->amount); // float(15)

// Los métodos se invocan usando el object operator ->
$transaction_5 = new Methods(100, 'Transaction 5');
$transaction_5->add_tax(8);
var_dump($transaction_5->amount); // float(108)
$transaction_5->apply_discount(10);
var_dump($transaction_5->amount); // float(97.2)


// Los métodos se invocan usando el object operator ->
$transaction_6 = new Getter_setter(120, 'Transaction 6');

var_dump($transaction_6->get_amount()); // float(120)
$transaction_6->set_description('Transacción 7');
var_dump($transaction_6->get_description()); // Transacción 7

/**
 * Method Chaining
 * Se usa para encadenar varias acciones sobre un objeto invocando
 * encadenadamente sus métodos, cada invocación retorna el mismo objeto
 * por lo que el encadenamiento es posible con el object operator ->
 * 
 * Se debe entender muy bien el caso de uso para aplicar chaining methods
 */

// Tanto la creación del objeto como los métodos están encadenados
$transaction_6 = (new Method_chaining(200, 'Transaction 6'))
    ->add_tax(10)
    ->apply_discount(20);

/**
 * Crear objetos usando variables
 * Se puede almacenar el nombre de una clase en una variable y aplicando
 * la misma lógica que functions variable es posible invocar la creación
 * de un objeto
 */

$class_name = 'Method_chaining';
$transaction_variable = new $class_name(200, 'Transaction Variable');
var_dump($transaction_variable); // object(Method_chaining)...


/**
 * La invocación al método mágico __destruct ocurre cuando ya no hay
 * referencias al objeto o el script termina su ejecución
 */
$transaction_destructor_1 = new Destructor(340, 'Transaction Destructor 1');
$amount = $transaction_destructor_1->get_amount(); // Store value
unset($transaction_destructor_1); // __destructor called


/**
 * stdClass
 * A generic empty class with dynamic properties. Objects of this class can be
 * instantiated with new operator or created by typecasting to object. Several
 * PHP functions also create instances of this class, e.g. json_decode(),
 * mysqli_fetch_object() or PDOStatement::fetchObject().
 * 
 * Documentation:
 * https://www.php.net/manual/en/class.stdclass
 */

$json_str = '{"a": 1, "b": 2, "c": 3}';
$arr = json_decode($json_str, true); // True devuelve un array asociativa
var_dump($arr);
// Si no se pasa parámetro json_str retorna una instancia de la clase std
$obj = json_decode($json_str); // Devuelve instancia
var_dump($obj);
var_dump($obj->a);

// Casting -> cuando se hace cast a object sobre un array o escalar devuelve istancia de std
$new_obj = (object)$arr;
var_dump($new_obj);
