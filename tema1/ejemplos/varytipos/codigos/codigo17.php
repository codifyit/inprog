<?php
/**
 * Código 17 · Uso común: banderas (flags)
 * Apartado: 5.3 Banderas (flags)
 * Documento: Variables y tipos de datos en PHP · 2º ASIR · Introducción a la programación
 *
 * Recorre una lista de servicios y usa una variable booleana para saber si hay alguno parado.
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

$servicios = ["apache" => "activo", "mysql" => "parado", "ssh" => "activo"];
$todo_ok = true;
foreach ($servicios as $nombre => $estado) {
    if ($estado !== "activo") {
        $todo_ok = false;
        echo "Revisar: $nombre\n";
    }
}
echo $todo_ok ? "Todo correcto" : "Hay servicios caídos";
