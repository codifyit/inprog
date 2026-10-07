<?php
/**
 * Ejemplo 10 · Asignación con = frente a and
 * Documento: Operadores y precedencia en PHP · 2º ASIR · Introducción a la programación
 *
 * = tiene más prioridad que and pero menos que &&, por eso $r y $s acaban con valores distintos.
 * Resultado esperado: $r vale true y $s vale false. Usa && y || salvo en construcciones como ... or die("Error").
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

$r = true and false;
$s = true && false;
var_dump($r, $s);   // bool(true) bool(false)
