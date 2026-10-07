# Variables y tipos de datos en PHP

Ejemplos de código del documento **«Variables y tipos de datos en PHP»**, preparado para el módulo optativo *Introducción a la programación* de 2º ASIR (RA1, criterios b, c y d).

Cada fichero corresponde a un bloque numerado del documento: `codigo01.php` es el **Código 1**, `codigo02.php` el **Código 2**, y así sucesivamente.


## Índice de ejemplos

| Fichero | Código | Tema | Descripción |
| --- | --- | --- | --- |
| [`codigo01.php`](codigos/codigo01.php) | Código 1 | Qué es una variable | Crea variables, copia un valor de una a otra y sustituye un valor por otro. |
| [`codigo02.php`](codigos/codigo02.php) | Código 2 | Cómo saber el tipo de una variable | Muestra el tipo de una variable con var_dump(), gettype() e is_float(); gettype() devuelve "double" para los float. |
| [`codigo03.php`](codigos/codigo03.php) | Código 3 | Enteros (int) | Escribe enteros en decimal, hexadecimal, octal (permisos 0755 = 493) y binario, y usa el guion bajo como separador. |
| [`codigo04.php`](codigos/codigo04.php) | Código 4 | Enteros (int): límite | Muestra PHP_INT_MAX y cómo PHP convierte el resultado en float al superarlo. |
| [`codigo05.php`](codigos/codigo05.php) | Código 5 | Números decimales (float) | Crea float con decimales y notación científica, y compara una división exacta (int) con una no exacta (float). |
| [`codigo06.php`](codigos/codigo06.php) | Código 6 | Números decimales (float): precisión | Demuestra que 0.1 + 0.2 no es exactamente 0.3 y cómo compararlos con round(). |
| [`codigo07.php`](codigos/codigo07.php) | Código 7 | Cadenas (string): comillas | Compara comillas simples y dobles, la sustitución de variables y el uso de llaves {$variable}. |
| [`codigo08.php`](codigos/codigo08.php) | Código 8 | Cadenas (string): caracteres y longitud | Accede a caracteres por posición (también negativa) y muestra que strlen() cuenta bytes, no letras. |
| [`codigo09.php`](codigos/codigo09.php) | Código 9 | Booleanos (bool) | Muestra que la cadena "0" se considera falsa en una condición if. |
| [`codigo10.php`](codigos/codigo10.php) | Código 10 | Arrays: array asociativo | Crea un array asociativo de configuración con tipos mezclados y lo muestra con var_dump(). |
| [`codigo11.php`](codigos/codigo11.php) | Código 11 | Arrays: array multidimensional | Accede a un dato de un array de equipos con nombre e IP. |
| [`codigo12.php`](codigos/codigo12.php) | Código 12 | El valor null | Usa null, isset(), unset() y el operador ?? para dar un valor por defecto. |
| [`codigo13.php`](codigos/codigo13.php) | Código 13 | Conversión explícita con settype() | Cambia el tipo de una variable de string a int con settype(). |
| [`codigo14.php`](codigos/codigo14.php) | Código 14 | Comparar teniendo en cuenta el tipo | Compara un puerto recibido como cadena con == y === y con una conversión (int). |
| [`codigo15.php`](codigos/codigo15.php) | Código 15 | Uso común: guardar configuración | Agrupa los datos de conexión en un array asociativo y los muestra en un mensaje. |
| [`codigo16.php`](codigos/codigo16.php) | Código 16 | Uso común: contadores y acumuladores | Suma el tamaño de varios discos y cuenta cuántos superan los 200 GB con un bucle for. |
| [`codigo17.php`](codigos/codigo17.php) | Código 17 | Uso común: banderas (flags) | Recorre una lista de servicios y usa una variable booleana para saber si hay alguno parado. |
| [`codigo18.php`](codigos/codigo18.php) | Código 18 | Uso común: mensajes y registros | Construye una línea de log con la fecha, el usuario y la acción usando . y .= |
| [`codigo19.php`](codigos/codigo19.php) | Código 19 | Uso común: datos de un formulario o de la URL | Recoge parámetros de $_GET con valor por defecto, convierte la edad a entero y protege el nombre con htmlentities(). |
| [`codigo20.php`](codigos/codigo20.php) | Código 20 | Uso común: información del servidor | Muestra datos de $_SERVER y el usuario con el que se ejecuta Apache mediante shell_exec("whoami"). |
| [`codigo21.php`](codigos/codigo21.php) | Código 21 | Uso común: intercambiar valores | Intercambia dos variables con una variable temporal y con la forma abreviada [$a, $b] = [$b, $a]. |

## Notas

- **Código 18** muestra la fecha y hora del momento de la ejecución, así que la salida cambia cada vez.
- **Código 19** está pensado para el navegador. Prueba con `codigo19.php?edad=25&nombre=Ana`, sin parámetros y con `?edad=abc`.
- **Código 20** solo funciona completo desde el navegador: en la terminal no existen `SERVER_SOFTWARE` ni `REMOTE_ADDR` y PHP muestra avisos. En XAMPP para Linux, Apache suele ejecutarse con el usuario `daemon`.
