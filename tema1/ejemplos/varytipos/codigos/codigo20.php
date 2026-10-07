<?php
/**
 * Código 20 · Uso común: información del servidor
 * Apartado: 5.6 Información del servidor y del sistema
 * Documento: Variables y tipos de datos en PHP · 2º ASIR · Introducción a la programación
 *
 * Muestra datos de $_SERVER y el usuario con el que se ejecuta Apache mediante shell_exec("whoami").
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

echo $_SERVER["SERVER_SOFTWARE"] . "\n";   // software del servidor web
echo $_SERVER["REMOTE_ADDR"] . "\n";       // IP del cliente
$usuario_web = trim(shell_exec("whoami"));
echo "Apache se ejecuta como: $usuario_web";
