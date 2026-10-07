<?php
/**
 * Ejemplo 2 · Misma prioridad: de izquierda a derecha
 * Documento: Operadores y precedencia en PHP · 2º ASIR · Introducción a la programación
 *
 * Con operadores de igual prioridad (-, *, /) se evalúa de izquierda a derecha.
 * Resultado esperado: 12 y 20.
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

echo 20 - 5 - 3;     // 12
echo "\n";   // añadido: salto de línea entre resultados
echo 100 / 10 * 2;   // 20
echo "\n";   // añadido: salto de línea entre resultados
