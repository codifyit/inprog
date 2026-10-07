<?php
/**
 * Código 1 · Qué es una variable
 * Apartado: 1. Qué es una variable
 * Documento: Variables y tipos de datos en PHP · 2º ASIR · Introducción a la programación
 *
 * Crea variables, copia un valor de una a otra y sustituye un valor por otro.
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

$servidor = "web01";      // se crea y guarda una cadena
$puerto   = 80;           // se crea y guarda un entero
$copia    = $servidor;    // se copia el valor en otra variable
$puerto   = 443;          // se sustituye el valor anterior
echo "$copia escucha en el puerto $puerto";
