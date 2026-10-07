<?php
/**
 * Ejemplo 13 · El operador ?? (fusión de null)
 * Documento: Operadores y precedencia en PHP · 2º ASIR · Introducción a la programación
 *
 * ?? tiene menos prioridad que +: $a ?? 80 + 1 no equivale a ($a ?? 80) + 1.
 * Resultado esperado: 81 en ambos casos con este dato, pero las dos expresiones no son equivalentes.
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

$config = [];
$puerto = $config["port"] ?? 80 + 1;     // 81
var_dump($puerto);   // añadido: muestra el valor
$puerto = ($config["port"] ?? 80) + 1;   // 81 también, pero por otro motivo
var_dump($puerto);   // añadido: muestra el valor
