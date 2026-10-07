<?php
/**
 * Código 8 · Cadenas (string): caracteres y longitud
 * Apartado: 3.3 Cadenas (string)
 * Documento: Variables y tipos de datos en PHP · 2º ASIR · Introducción a la programación
 *
 * Accede a caracteres por posición (también negativa) y muestra que strlen() cuenta bytes, no letras.
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

$host = "servidor";
echo $host[0] . "\n";   // s
echo $host[-1] . "\n";  // r
var_dump(strlen("canción"));
