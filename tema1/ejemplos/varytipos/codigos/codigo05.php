<?php
/**
 * Código 5 · Números decimales (float)
 * Apartado: 3.2 Números decimales (float)
 * Documento: Variables y tipos de datos en PHP · 2º ASIR · Introducción a la programación
 *
 * Crea float con decimales y notación científica, y compara una división exacta (int) con una no exacta (float).
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

$temperatura = 21.5;
$cientifico  = 1.5e3;     // 1.5 · 10³
var_dump($temperatura, $cientifico);
var_dump(10 / 4);         // división no exacta
var_dump(10 / 5);         // división exacta
