<?php
/**
 * Código 14 · Comparar teniendo en cuenta el tipo
 * Apartado: 4.3 Comparar teniendo en cuenta el tipo
 * Documento: Variables y tipos de datos en PHP · 2º ASIR · Introducción a la programación
 *
 * Compara un puerto recibido como cadena con == y === y con una conversión (int).
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

$puerto = "22";            // los datos de formularios son cadenas
var_dump($puerto == 22);
var_dump($puerto === 22);
var_dump((int) $puerto === 22);
