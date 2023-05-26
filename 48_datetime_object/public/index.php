<?php // DateTime class

/*
 * DateTime Class
 * Los siguientes ejemplos demuestran la versatilidad de la clase DateTime
 * a la hora de manejar fechas dentro de PHP.
 * 
 * NOTA
 * EN EL MANEJO CON FECHAS ES MEJOR CREAR INMUTABLE DATETIMES PORQUE
 * ASEGURAN QUE SUS VALORES INTERNOS NO PUEDAN SER MODIFICADOS
 * 
 * NOTA
 * PARA UN MANEJO MÁS EFICIENTE DE FECHAS SE RECOMIENDA INSTALAR
 * EL PAQUETE 'CARBON'
 * https://carbon.nesbot.com/
 * 
 * Documentación:
 * https://www.php.net/manual/es/intro.datetime.php
 * https://www.php.net/manual/es/class.datetime
 * https://www.php.net/manual/es/timezones.php
 */

declare(strict_types=1);

echo '<pre>';

// Si no se pasa nada al constructor crea la fecha con now()
$dateTime1 = new DateTime();
var_dump($dateTime1);
echo PHP_EOL;

// Se puede pasar cualquier fecha que se usa con strtotime()
// Esta construcción set la hora a media noche por defecto
// del día especificado
$dateTime2 = new DateTime('Tomorrow');
var_dump($dateTime2);
echo PHP_EOL;

// También se puede pasar un TimeZone object al constructor
$dateTime3 = new DateTime(timezone: new DateTimeZone('Asia/Tokyo'));
echo 'Asia/Tokio timezon on $dateTime3 object' . PHP_EOL;
echo PHP_EOL;
var_dump($dateTime3);
echo PHP_EOL;

// Hay varios métodos disponibles en la documentación que se pueden
// consultar sobre la clase Datetime, aquí se exploran algunos

// Format la fecha
echo $dateTime3->format('d/m/Y g:i A - e') . PHP_EOL;
echo PHP_EOL;
echo 'America/Bogota timezon on $dateTime3 object' . PHP_EOL;
echo PHP_EOL;
var_dump($dateTime3);
echo PHP_EOL;
// Cambiar TimeZone
$dateTime3->setTimezone(new DateTimeZone('America/Bogota'));
echo $dateTime3->format('d/m/Y g:i A - e') . PHP_EOL;
echo PHP_EOL;
// Devolver el TimeZone del objeto
// Como getTimeZone retorna un objeto se puede seguir encadenando métodos (chaining methods)
echo $dateTime3->getTimezone()->getName() . ' - ' . $dateTime3->format('d/m/Y g:i A') .  PHP_EOL;
echo PHP_EOL;
// Cambiar fecha del objeto
$dateTime3->setDate(2024, 5, 3)->setTime(15, 26);
echo $dateTime3->format('d/m/Y g:i A ') . PHP_EOL;;


/*
 * IMPORTANT METHODS
 */

// DateTime::createFromFormat
// Crea instancias de DateTime a partir de formatos

/*
 * Problema
 * PHP por defecto crea instancias a partir del formato americano, para hacerlo a partir
 * del Internacional que es day/month/year se debe usar como separador el '-' o '.' 
 */

$date = '5/12/2023';

// day/month/year - Europe
$dateTimeEurope = new DateTime(str_replace('/', '-',  $date));
var_dump($dateTimeEurope); // 2023-12-05 00:00:00
// month/day/year - U.S.
$dateTimeUsa = new DateTime($date);
var_dump($dateTimeUsa); // 2023-05-12 00:00:00

// La forma más eficiente de crear la fecha sería usando DateTime::createFromFormat
// static method. Hay que tener en cuenta que se debe formatear la hora, la crea
// con el timestamp actual. Con este proceso no tenemos que reemplazar el string

$dateTimeEurope = DateTime::createFromFormat('d/m/Y', $date)->setTime(0, 0);
var_dump($dateTimeEurope); // 2023-12-05 00:00:00


/*
 * Compare dates
 * Aunque se pueden comparar los objetos también se pueden extraer los timestamps
 * y compararlas 
 */

$dateCompare1 = new DateTime('05/25/2023 9:15 AM');
$dateCompare2 = new DateTime('05/25/2023 9:14 AM');

var_dump($dateCompare1 < $dateCompare2); // false
var_dump($dateCompare1 > $dateCompare2); // true
var_dump($dateCompare1 == $dateCompare2); // false
var_dump($dateCompare1 <=> $dateCompare2); // 1 -> porque A es mayor que B


/*
 * Diferencia entre fechas (intervalo)
 * Se puede obtener el intervalo de tiempo de diferencia entre dos fechas
 * usando el método diff 
 */
$dateInterval1 = new DateTime('05/25/2023 9:15 AM');
$dateInterval2 = new DateTime('05/25/2022 9:15 AM');

var_dump($dateInterval1->diff($dateInterval2));
echo $dateInterval1->diff($dateInterval2)->format('%Y years - %M months - %D days') . PHP_EOL;

/* 
 * DateTimeInmutable()
 * Una vez creado el objeto no permite modificación, si se aplica algún método
 * este retornará una nueva instancia 
 */

// Ejercicio simple

$from = new DateTimeImmutable();
$to = $from->add(new DateInterval('P1M'));

echo $from->format('d/m/Y') . ' - ' . $to->format('d/m/Y') . PHP_EOL; // 26/05/2023 - 26/06/2023


/*
 * DatePeriod
 * La clase DatePeriod permite crear periodos de tiempos que pueden ser iterables 
 */

// Crea periodos de un día
$period = new DatePeriod(new DateTime('05/01/2023'), new DateInterval('P2D'), (new DateTime('05/31/2023'))->modify('+1 day'));

foreach ($period  as $date) {
    echo $date->format('m/d/Y') . PHP_EOL;
}
