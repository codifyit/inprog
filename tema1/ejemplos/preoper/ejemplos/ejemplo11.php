<?php
/**
 * Ejemplo 11 · El ternario y la concatenación
 * Documento: Operadores y precedencia en PHP · 2º ASIR · Introducción a la programación
 *
 * El ternario tiene muy poca prioridad: sin paréntesis, la concatenación forma parte de la condición y se pierde el texto.
 * Resultado esperado: Solo la segunda línea muestra «Estado: Aprobado».
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

$nota = 7;
echo "Estado: " . $nota >= 5 ? "Aprobado" : "Suspenso";     // Aprobado
echo "\n";   // añadido: salto de línea entre resultados
echo "Estado: " . ($nota >= 5 ? "Aprobado" : "Suspenso");   // Estado: Aprobado
echo "\n";   // añadido: salto de línea entre resultados
