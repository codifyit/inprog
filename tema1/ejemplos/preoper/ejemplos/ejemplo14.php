<?php
/**
 * Ejemplo 14 · Conversión de tipo: (int)
 * Documento: Operadores y precedencia en PHP · 2º ASIR · Introducción a la programación
 *
 * La conversión (int) se aplica solo al operando inmediato: (int) $a / $b frente a (int) ($a / $b).
 * Resultado esperado: 4.666… y 4.
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

$a = 56; $b = 12;
echo (int) $a / $b;     // 4.6666666666667
echo "\n";   // añadido: salto de línea entre resultados
echo (int) ($a / $b);   // 4
echo "\n";   // añadido: salto de línea entre resultados
