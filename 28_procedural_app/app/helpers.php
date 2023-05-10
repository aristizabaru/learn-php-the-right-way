<?php

declare(strict_types=1);

function format_dollar_amount(float $amount): string
{
    $is_negative = $amount < 0;
    $amount_str = ($is_negative ? '-' : '') . '$' . number_format(abs($amount), 2);

    return $amount_str;
}

function get_color_amount(float $amount): string
{
    return $amount < 0 ? 'red' : 'green';
}

function format_date(string $date): string
{
    return date('M j, Y', strtotime($date));
}
