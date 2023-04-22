<?php // Heredoc & Nowdoc

/**
 * Heredoc
 * El texto heredoc se comporta como un string entre comillas dobles,
 * pero sin tener comillas dobles.
 * 
 * Se emplea usando el operador <<< y un identificador
 */
$data = 20;

$heredoc = <<< text
HEREDOC
Linea 1 $data
Linea 2
Linea 3


text;

echo nl2br($heredoc);
/**
 * Nowdoc
 * Nowdoc es a los string con comillas simples lo mismo que Heredoc
 * lo es a los string con comillas dobles.
 * 
 * Se emplea usando el operador <<< y un identificador entre comillas
 * simples
 */
$nowdoc = <<< 'text'
NOWDOC
Linea 1
Linea 2
Linea 3
text;

echo nl2br($nowdoc);
