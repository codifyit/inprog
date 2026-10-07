<?php
/**
 * Código 6 · Números decimales (float): precisión
 * Apartado: 3.2 Números decimales (float)
 * Documento: Variables y tipos de datos en PHP · 2º ASIR · Introducción a la programación
 *
 * Demuestra que 0.1 + 0.2 no es exactamente 0.3 y cómo compararlos con round().
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

var_dump(0.1 + 0.2);
var_dump(0.1 + 0.2 == 0.3);
var_dump(round(0.1 + 0.2, 2) == 0.3);   // solución: redondear
