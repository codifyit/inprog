<?php
/**
 * Ejemplo 6 · Comparaciones antes que operadores lógicos
 * Documento: Operadores y precedencia en PHP · 2º ASIR · Introducción a la programación
 *
 * Las comparaciones se evalúan antes que &&, así que no hacen falta paréntesis para combinarlas.
 * Resultado esperado: bool(true).
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

$edad = 30;
var_dump($edad >= 18 && $edad <= 65);   // bool(true)
