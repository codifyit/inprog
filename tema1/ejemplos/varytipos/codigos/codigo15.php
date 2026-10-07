<?php
/**
 * Código 15 · Uso común: guardar configuración
 * Apartado: 5.1 Guardar configuración
 * Documento: Variables y tipos de datos en PHP · 2º ASIR · Introducción a la programación
 *
 * Agrupa los datos de conexión en un array asociativo y los muestra en un mensaje.
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

$db = [
    "host"    => "localhost",
    "usuario" => "admin",
    "base"    => "inventario",
];
echo "Conectando a {$db['base']} en {$db['host']} como {$db['usuario']}";
