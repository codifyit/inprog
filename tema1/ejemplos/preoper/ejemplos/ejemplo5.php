<?php
/**
 * Ejemplo 5 · Concatenación y suma (cambio en PHP 8)
 * Documento: Operadores y precedencia en PHP · 2º ASIR · Introducción a la programación
 *
 * En PHP 8 la suma y la resta se evalúan antes que la concatenación con ..
 * Resultado esperado: Total: 5 y Resultado: 6. Aun así, escribe "Total: " . (2 + 3) para que el código se entienda en cualquier versión.
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

echo "Total: " . 2 + 3;          // Total: 5
echo "\n";   // añadido: salto de línea entre resultados
echo "Resultado: " . 10 - 4;    // Resultado: 6
echo "\n";   // añadido: salto de línea entre resultados
