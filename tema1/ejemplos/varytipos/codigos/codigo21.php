<?php
/**
 * Código 21 · Uso común: intercambiar valores
 * Apartado: 5.7 Intercambiar valores
 * Documento: Variables y tipos de datos en PHP · 2º ASIR · Introducción a la programación
 *
 * Intercambia dos variables con una variable temporal y con la forma abreviada [$a, $b] = [$b, $a].
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

$a = "principal";
$b = "respaldo";
$tmp = $a;   // forma clásica con variable temporal
$a = $b;
$b = $tmp;
[$a, $b] = [$b, $a];   // forma abreviada (vuelve al estado inicial)
echo "$a / $b";
