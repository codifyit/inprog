<?php
/**
 * Código 7 · Cadenas (string): comillas
 * Apartado: 3.3 Cadenas (string)
 * Documento: Variables y tipos de datos en PHP · 2º ASIR · Introducción a la programación
 *
 * Compara comillas simples y dobles, la sustitución de variables y el uso de llaves {$variable}.
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

$usuario = "rafa";
echo 'Hola $usuario\n';         // literal
echo "Hola $usuario\n";         // con sustitución
echo "Hay 3 {$usuario}s\n";     // llaves para delimitar la variable
