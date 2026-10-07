<?php
/**
 * Ejemplo 16 · Expresión completa: precio con IVA
 * Documento: Operadores y precedencia en PHP · 2º ASIR · Introducción a la programación
 *
 * Cálculo de un precio con IVA que combina operadores aritméticos y de concatenación.
 * Resultado esperado: Total: 121 €. Versión recomendada, más legible: echo "Total: " . ($total + $total * $iva / 100) . " €";
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

$total = 100;
$iva = 21;
echo "Total: " . $total + $total * $iva / 100 . " €";
echo "\n";   // añadido: salto de línea entre resultados
