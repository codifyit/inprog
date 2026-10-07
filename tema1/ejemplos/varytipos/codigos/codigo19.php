<?php
/**
 * Código 19 · Uso común: datos de un formulario o de la URL
 * Apartado: 5.5 Recoger datos de un formulario o de la URL
 * Documento: Variables y tipos de datos en PHP · 2º ASIR · Introducción a la programación
 *
 * Recoge parámetros de $_GET con valor por defecto, convierte la edad a entero y protege el nombre con htmlentities().
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

// URL: http://localhost/edad.php?edad=25
$edad = (int) ($_GET["edad"] ?? 0);
$nombre = htmlentities($_GET["nombre"] ?? "invitado");
echo "Hola $nombre, tienes $edad años";
