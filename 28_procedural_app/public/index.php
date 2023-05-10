<?php

declare(strict_types=1);

/**
 * Algoritmo
 * 1. Retornar todos los archivos presentes en la carpeta transaction file
 * 2. Cargar a memoria todas las transacciones en un array
 * 3. Calcular los totales
 * 4. Presentar resultados
 */

define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);
define('APP_PATH', ROOT . 'app' . DIRECTORY_SEPARATOR);
define('FILES_PATH', ROOT . 'transaction_file' . DIRECTORY_SEPARATOR);
define('VIEWS_PATH', ROOT . 'views' . DIRECTORY_SEPARATOR);

require_once APP_PATH . 'app.php';
require_once APP_PATH . 'helpers.php';

$files = [];
$transactions = [];
$totals = [];

$files = get_transactions_files(FILES_PATH);
foreach ($files as $file) {
    $transactions = array_merge($transactions, get_transactions($file, 'parse_transaction'));
}
$totals = calculate_totals($transactions);

require_once VIEWS_PATH . 'transactions.php';
