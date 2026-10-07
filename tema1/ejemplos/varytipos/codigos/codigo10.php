<?php
/**
 * Código 10 · Arrays: array asociativo
 * Apartado: 3.5 Arrays
 * Documento: Variables y tipos de datos en PHP · 2º ASIR · Introducción a la programación
 *
 * Crea un array asociativo de configuración con tipos mezclados y lo muestra con var_dump().
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

$config = [
    "host"   => "localhost",
    "puerto" => 3306,
    "ssl"    => true,
];
echo $config["host"] . ":" . $config["puerto"] . "\n";
var_dump($config);
