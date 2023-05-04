<?php // functions -> return

/**
 * functions -> return
 * Las funciones pueden retornar valores usando el la sentencia return.
 * Por defecto una función siempre retorna 'null' así no esté declarado
 */

function call_1()
{
    // Como no se define return esta devuelve NULL de forma explicita
}

var_dump(call_1()); // NULL


// Al no retornar nada explicitamente devuelve NULL
function call_2()
{
    return;
}

var_dump(call_2()); // NULL

function call_3()
{
    return 'Hola';
}

var_dump(call_3()); // string(4) "Hola"
