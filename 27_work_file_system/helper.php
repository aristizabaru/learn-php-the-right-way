<?php

declare(strict_types=1);

function pretty_print_array(array $array): void
{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
function pretty_print_scalar(int|float|string $scalar): void
{
    echo '<pre>';
    print_r($scalar);
    echo '</pre>';
}
