<?php
/**
 * Ejemplo 8 · El operador ! actúa sobre lo que tiene justo al lado
 * Documento: Operadores y precedencia en PHP · 2º ASIR · Introducción a la programación
 *
 * ! niega solo el operando que tiene al lado: !$x > 5 no es lo mismo que !($x > 5).
 * Resultado esperado: bool(false) y bool(true). Si quieres negar una condición entera, ponla entre paréntesis.
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

$x = 3;
var_dump(!$x > 5);     // bool(false)
var_dump(!($x > 5));   // bool(true)
