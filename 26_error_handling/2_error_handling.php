<?php // Erro handle

/**
 * Error handle
 * Se puede registrar un error handle para procesar de manera custo todos los errores
 * que salen de PHP. Esta definición y registro del erro handle va a sobre escribir
 * cualquier configuración que se tenga en la directiva error_reporting del archivo
 * php.ini
 * 
 * Documentación
 * https://www.php.net/manual/es/function.set-error-handler.php
 */

function error_handler(int $type, string $msg, ?string $file, ?int $line)
{
    echo "$type: $msg in $file on line $line";

    /**
     * Se puede retonar false para volver a el manejo de PHP de errores, true para
     * continuar con la ejecución del script o exti(); como salida del sistema
     */
    exit;
}

set_error_handler('error_handler', E_ALL);

echo $x;
