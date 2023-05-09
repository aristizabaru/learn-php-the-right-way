<?php // Error handling

/**
 * trigger_error
 * Para el manejo de errores, siempre es importante hacer uso de las
 * constantes de errores especificadas en la documentación.
 * 
 * PHP ofrece la opción de generar errores especificados por el usuario, para
 * esto se deben usar las constantes E_USER_NOTICE de la lista de errores y ejecutar
 * la función incorporada trigger_error
 * 
 * Documentación:
 * https://www.php.net/manual/es/errorfunc.constants.php
 * https://www.php.net/manual/es/function.trigger-error.php
 * 
 */

/**
 * Estos errores se muestran en pantalla si la opción display_errors en el archivo
 * de configuración de php.ini se ecuentra activa. NUNCA DEBE ESTAR ACTIVA EN
 * PRODUCCIÓN
 */
trigger_error('Este es un error fatal', E_USER_ERROR); // Fatal error: Este es un error fatal

// Si se quiere enviar un error a el log se puede usar error_log
error_log('Este es un ejemplo de log', 0,);
