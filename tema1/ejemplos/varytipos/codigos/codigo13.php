<?php
/**
 * Código 13 · Conversión explícita con settype()
 * Apartado: 4.2 Conversión explícita (casting)
 * Documento: Variables y tipos de datos en PHP · 2º ASIR · Introducción a la programación
 *
 * Cambia el tipo de una variable de string a int con settype().
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

$puerto = "8080";
settype($puerto, "integer");
var_dump($puerto);
