<?php
/**
 * Código 11 · Arrays: array multidimensional
 * Apartado: 3.5 Arrays
 * Documento: Variables y tipos de datos en PHP · 2º ASIR · Introducción a la programación
 *
 * Accede a un dato de un array de equipos con nombre e IP.
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

$equipos = [
    ["nombre" => "pc01", "ip" => "192.168.1.10"],
    ["nombre" => "pc02", "ip" => "192.168.1.11"],
];
echo $equipos[1]["ip"];
