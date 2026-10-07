<?php
/**
 * Código 9 · Booleanos (bool)
 * Apartado: 3.4 Booleanos (bool)
 * Documento: Variables y tipos de datos en PHP · 2º ASIR · Introducción a la programación
 *
 * Muestra que la cadena "0" se considera falsa en una condición if.
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

$entrada = "0";
if ($entrada) {
    echo "Hay datos";
} else {
    echo "Vacío";
}
