<?php
/**
 * Código 2 · Cómo saber el tipo de una variable
 * Apartado: Cómo saber el tipo de una variable
 * Documento: Variables y tipos de datos en PHP · 2º ASIR · Introducción a la programación
 *
 * Muestra el tipo de una variable con var_dump(), gettype() e is_float(); gettype() devuelve "double" para los float.
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

$cpu = 37.5;
var_dump($cpu);          // tipo y valor
echo gettype($cpu) . "\n";   // solo el nombre del tipo
var_dump(is_float($cpu)); // ¿es de este tipo?
