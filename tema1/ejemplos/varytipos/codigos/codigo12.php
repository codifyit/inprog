<?php
/**
 * Código 12 · El valor null
 * Apartado: 3.6 El valor null
 * Documento: Variables y tipos de datos en PHP · 2º ASIR · Introducción a la programación
 *
 * Usa null, isset(), unset() y el operador ?? para dar un valor por defecto.
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

$token = null;
var_dump($token);
var_dump(isset($token));      // ¿existe y no es null?
$cache = "datos";
unset($cache);                // elimina la variable
var_dump(isset($cache));
echo $token ?? "sin token";   // valor alternativo si es null
