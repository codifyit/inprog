<?php
/**
 * Código 4 · Enteros (int): límite
 * Apartado: 3.1 Enteros (int)
 * Documento: Variables y tipos de datos en PHP · 2º ASIR · Introducción a la programación
 *
 * Muestra PHP_INT_MAX y cómo PHP convierte el resultado en float al superarlo.
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

var_dump(PHP_INT_MAX);
var_dump(PHP_INT_MAX + 1);
