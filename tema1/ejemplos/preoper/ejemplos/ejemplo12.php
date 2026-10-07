<?php
/**
 * Ejemplo 12 · Ternarios anidados en PHP 8
 * Documento: Operadores y precedencia en PHP · 2º ASIR · Introducción a la programación
 *
 * En PHP 8 los ternarios anidados necesitan paréntesis; sin ellos se produce un error fatal.
 * Resultado esperado: B.
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

$n = 75;
// echo $n > 90 ? "A" : $n > 70 ? "B" : "C";     // Error fatal en PHP 8
echo $n > 90 ? "A" : ($n > 70 ? "B" : "C");      // B
echo "\n";   // añadido: salto de línea entre resultados
