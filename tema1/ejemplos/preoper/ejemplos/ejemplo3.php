<?php
/**
 * Ejemplo 3 · El resto (%) tiene la prioridad de la multiplicación
 * Documento: Operadores y precedencia en PHP · 2º ASIR · Introducción a la programación
 *
 * El operador resto % tiene la misma prioridad que la multiplicación.
 * Resultado esperado: 11.
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

echo 10 + 7 % 3;     // 11
echo "\n";   // añadido: salto de línea entre resultados
