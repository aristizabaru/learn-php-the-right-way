<?php // include include_once require require_conce

/**
 * include include_once require require_conce
 * Estos constructores incluyen y evalúan el archivo especificado.
 * 
 * Los archivos son incluidos con base en la ruta de acceso dada o,
 * si ninguna es dada, buscará primero en el 'include_path' del archivo
 * de configuración de php (php.ini). Si el archivo no se encuentra en
 * el include_path, include finalmente verificará en el propio directorio
 * del script que hace el llamado y en el directorio de trabajo actual,
 * antes de fallar. 
 */

// include -> incluye el archivo y genera una alerta si no se encuentra
include './files/1_include.php';
// include_once -> incluye ela archivo una sola vez
include_once './files/2_include_once.php';
// require -> incluye el archivo y genera un error si no se encuentra
require './files/3_require.php';
// require_once -> incluye ela archivo una sola vez
require './files/4_require_once.php';
