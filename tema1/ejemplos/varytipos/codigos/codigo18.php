<?php
/**
 * Código 18 · Uso común: mensajes y registros
 * Apartado: 5.4 Construir mensajes y registros
 * Documento: Variables y tipos de datos en PHP · 2º ASIR · Introducción a la programación
 *
 * Construye una línea de log con la fecha, el usuario y la acción usando . y .=
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

$usuario = "rafa";
$accion  = "login";
$linea = date("Y-m-d H:i:s") . " [$usuario] $accion";
$linea .= " correcto";
echo $linea;
