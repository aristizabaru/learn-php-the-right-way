<?php

declare(strict_types=1);

function get_transactions_files(string $file_path): array
{
    if (!is_dir($file_path))
        trigger_error("$file_path no corresponde a un directorio válido", E_USER_ERROR);

    $files = [];
    $file_names = scandir($file_path);
    foreach ($file_names as $file_name) {
        if (is_dir($file_name))
            continue;

        $files[] = $file_path . $file_name;
    }

    return $files;
}

function get_transactions(string $file, callable $parse_transaction): array
{
    if (!file_exists($file))
        trigger_error("$file no es un archivo válido", E_USER_ERROR);

    $transactions = [];
    $header = true;
    $file_stream = fopen($file, 'r');

    while (($line = fgetcsv($file_stream)) !== false) {
        $header ? $header = false : $transactions[] = $parse_transaction($line);
    }

    return $transactions;
}

function parse_transaction(array $transaction): array
{
    if (count($transaction) < 1)
        trigger_error("No hay transacciones para procesar", E_USER_ERROR);

    [$date, $check, $description, $amount] = $transaction;
    $amount = (float)str_replace(['$', ','], '', $amount);
    $transaction_parsed = [
        'date' => $date,
        'check' => $check,
        'description' => $description,
        'amount' => $amount
    ];

    return $transaction_parsed;
}

function calculate_totals(array $transactions): array
{
    $total_income = 0;
    $total_expense = 0;
    $net_total = 0;

    foreach ($transactions as $transaction) {
        $net_total += $transaction['amount'];

        if ($transaction['amount'] < 0)
            $total_expense += $transaction['amount'];
        else
            $total_income += $transaction['amount'];
    }

    return [
        'total_income' => $total_income,
        'total_expense' => $total_expense,
        'net_total' => $net_total,
    ];
}
