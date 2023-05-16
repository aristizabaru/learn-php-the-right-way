<?php

namespace App\Enums;

class Status
{
    // Definición de constante de clase
    public const PAID = 'paid';
    public const PENDING = 'pending';
    public const DECLINED = 'declined';

    // Lookup table -> mapea datos de input a un output
    public const ALL_STATUS = [
        self::PAID => 'Paid',
        self::PENDING => 'Pending',
        self::DECLINED => 'Declined'
    ];
}
