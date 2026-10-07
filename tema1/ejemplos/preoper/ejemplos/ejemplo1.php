<?php
/**
 * Ejemplo 1 · La multiplicación va antes que la suma
 * Documento: Operadores y precedencia en PHP · 2º ASIR · Introducción a la programación
 *
 * La multiplicación se evalúa antes que la suma; los paréntesis cambian el orden.
 * Resultado esperado: 14 y 20. Los paréntesis siempre ganan a la tabla de precedencia.
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

echo 2 + 3 * 4;      // 14
echo "\n";   // añadido: salto de línea entre resultados
echo (2 + 3) * 4;    // 20
echo "\n";   // añadido: salto de línea entre resultados
