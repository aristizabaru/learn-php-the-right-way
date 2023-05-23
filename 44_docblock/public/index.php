<?php // DocBlock

/*
 * DockBlock
 * Dockblocks se usan principalmente para documentar clases, propiedades y métodos
 * en PHP, si bien su uso se ha ido disminuyendo por la constante implementación
 * de tipos dentro del lenguaje, lo cual hace este proceso en ciertas ocaciones
 * redundante.
 * 
 * Documentación:
 * https://docs.phpdoc.org/3.0/guide/guides/docblocks.html
 */

declare(strict_types=1);

use App\Transaction;
use App\Customer;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$transaction = new Transaction();
$result = $transaction->process(new Customer('Andrés'), 200);
var_dump($result);
