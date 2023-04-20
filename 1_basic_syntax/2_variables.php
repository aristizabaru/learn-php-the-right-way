<?php // Variables

/**
 * Varibales
 * Todas las variables en PHP deben empezar con signo de $
 * y nunca deben comenzar con números o tener caracteres
 * especiales excepto _
 */

 $_123name = 'Andres';
 echo $_123name;
 
 /**
  * Asignación de variables
  * Las varibales son asignadas por valor y no por referencia,
  * si se quiere asginar una variable por ferefencia se debe
  * usar &
  */
 
 
 /**
  * La asignación se hace por valor, así que la variable $y
  * guarda el valor de 1 y no la referencia de $x, así que
  * cuando el varlo de $x cambia, el valor de $y será el mismo
  */
 $x = 1;
 $y = $x;
 $x = 3;
 echo "$y"; // print 1
 
 /**
  * Para evitar este comportamiento se debe asignar el valor de $x
  * a $y por referencia $y = $$x;
  */
 
 $x = 1;
 $y = &$x;
 $x = 3;
 echo "$y"; // print 3