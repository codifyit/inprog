<?php
/**
 * Ejemplo 9 · Operadores de bits y comparación: permisos Unix
 * Documento: Operadores y precedencia en PHP · 2º ASIR · Introducción a la programación
 *
 * Comprobación de permisos Unix: sin paréntesis, & se evalúa después de == y el resultado es erróneo.
 * Resultado esperado: int(0) frente a bool(true). La versión sin paréntesis dice que no hay permiso de lectura, y es falso.
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

$permisos = 6;   // rw- (4 + 2)
var_dump($permisos & 4 == 4);     // int(0)
var_dump(($permisos & 4) == 4);   // bool(true)
