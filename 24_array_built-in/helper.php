<?php

declare(strict_types=1);

function pretty_print_array(array $array): void
{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
