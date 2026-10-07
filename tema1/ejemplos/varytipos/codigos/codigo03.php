<?php
/**
 * Código 3 · Enteros (int)
 * Apartado: 3.1 Enteros (int)
 * Documento: Variables y tipos de datos en PHP · 2º ASIR · Introducción a la programación
 *
 * Escribe enteros en decimal, hexadecimal, octal (permisos 0755 = 493) y binario, y usa el guion bajo como separador.
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

$decimal = 255;
$hexa    = 0xFF;        // hexadecimal: prefijo 0x
$octal   = 0755;        // octal: prefijo 0 (permisos rwxr-xr-x)
$binario = 0b1010;      // binario: prefijo 0b
$grande  = 1_000_000;   // el guion bajo solo mejora la lectura
var_dump($decimal, $hexa, $octal, $binario, $grande);
