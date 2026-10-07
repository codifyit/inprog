<?php
/**
 * Ejemplo 15 · Incremento dentro de una expresión
 * Documento: Operadores y precedencia en PHP · 2º ASIR · Introducción a la programación
 *
 * Preincremento y postincremento dentro de una expresión: cuándo cambia el valor de la variable.
 * Resultado esperado: $j = 10 y $k = 12; en ambos casos $i termina valiendo 6.
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

$i = 5;
$j = $i++ * 2;   // $j = 10, $i = 6
var_dump($j, $i);   // añadido: muestra los valores
$i = 5;
$k = ++$i * 2;   // $k = 12, $i = 6
var_dump($k, $i);   // añadido: muestra los valores
