<?php
/**
 * Ejemplo 7 · && va antes que ||
 * Documento: Operadores y precedencia en PHP · 2º ASIR · Introducción a la programación
 *
 * && tiene más prioridad que ||: la misma expresión cambia de resultado con paréntesis.
 * Resultado esperado: bool(true) y bool(false). Misma expresión, distinto resultado.
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

var_dump(true || false && false);     // bool(true)
var_dump((true || false) && false);   // bool(false)
