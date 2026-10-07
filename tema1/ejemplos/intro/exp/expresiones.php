<?php
function double($i) //Una función es un bloque de código con nombre
{
    return $i * 2;
}

$b = $a = 5;        /* asignar el valor cinco a la variable $a y $b */
$c = $a++;          /* post-incremento, asignar el valor original de $a
                       (5) a $c */
print "a = {$a}; b = {$b}; c = {$c}" . PHP_EOL;

$e = $d = ++$b;     /* pre-incremento, asignar el valor incrementado de
                       $b (6) a $d y $e */
print "b = {$b}; d = {$d}; e = {$e}" . PHP_EOL;

/* en este punto, $d y $e son iguales a 6 */

$f = double($d++);  /* asignar el doble del valor de $d antes
                       del incremento, 2*6 = 12, a $f */
print "d = {$d}; f = {$f}" . PHP_EOL;

$g = double(++$e);  /* asignar el doble del valor de $e después
                       del incremento, 2*7 = 14, a $g */
print "e = {$e}; g = {$g}" . PHP_EOL;

$h = $g += 10;      /* primero, $g es incrementado en 10 y finaliza con el
                       valor 24. El valor de la asignación (24) es
                       asignado después a $h, y $h finaliza también con el
                       valor 24. */
print "g = {$g}; h = {$h}" . PHP_EOL;
?>