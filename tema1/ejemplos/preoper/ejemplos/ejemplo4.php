<?php
/**
 * Ejemplo 4 · La potencia (**) y el signo menos
 * Documento: Operadores y precedencia en PHP · 2º ASIR · Introducción a la programación
 *
 * ** va antes que el signo menos unario y se asocia por la derecha: -2 ** 2 es -4 y 2 ** 3 ** 2 es 512.
 * Resultado esperado: -4, 4 y 512.
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

echo -2 ** 2;        // -4
echo "\n";   // añadido: salto de línea entre resultados
echo (-2) ** 2;      // 4
echo "\n";   // añadido: salto de línea entre resultados
echo 2 ** 3 ** 2;    // 512
echo "\n";   // añadido: salto de línea entre resultados
