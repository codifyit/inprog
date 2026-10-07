<?php
/**
 * Código 16 · Uso común: contadores y acumuladores
 * Apartado: 5.2 Contadores y acumuladores
 * Documento: Variables y tipos de datos en PHP · 2º ASIR · Introducción a la programación
 *
 * Suma el tamaño de varios discos y cuenta cuántos superan los 200 GB con un bucle for.
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

$discos_gb = [120, 80, 250, 500];
$total = 0;          // acumulador
$grandes = 0;        // contador
for ($i = 0; $i < count($discos_gb); $i++) {
    $total += $discos_gb[$i];
    if ($discos_gb[$i] > 200) {
        $grandes++;
    }
}
echo "Total: $total GB. Discos de más de 200 GB: $grandes";
