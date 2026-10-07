# Operadores y precedencia en PHP

Ejemplos de código del documento **«Operadores y precedencia en PHP»**, preparado para el módulo optativo *Introducción a la programación* de 2º ASIR (RA1, criterio e).

Cada fichero corresponde a un ejemplo numerado del documento: `ejemplo1.php` es el **Ejemplo 1**, `ejemplo2.php` el **Ejemplo 2**, y así sucesivamente. Los ejemplos van de los casos más sencillos a los que suelen provocar errores.

## Requisitos

- PHP 8 (por ejemplo, el incluido en XAMPP 8.0). Varios ejemplos (5, 11 y 12) se comportan de forma distinta en PHP 7.

## Cómo ejecutarlos

**En el navegador.** Copia la carpeta en `/opt/lampp/htdocs/` y abre, por ejemplo:

```
http://localhost/precedencia-operadores-php/ejemplos/ejemplo1.php
```

**En la terminal.** Desde la carpeta de los ejemplos:

```bash
/opt/lampp/bin/php ejemplo1.php
```

## Índice de ejemplos

| Fichero | Tema | Descripción |
| --- | --- | --- |
| [`ejemplo1.php`](ejemplos/ejemplo1.php) | La multiplicación va antes que la suma | La multiplicación se evalúa antes que la suma; los paréntesis cambian el orden. |
| [`ejemplo2.php`](ejemplos/ejemplo2.php) | Misma prioridad: de izquierda a derecha | Con operadores de igual prioridad (`-`, `*`, `/`) se evalúa de izquierda a derecha. |
| [`ejemplo3.php`](ejemplos/ejemplo3.php) | El resto (%) tiene la prioridad de la multiplicación | El operador resto `%` tiene la misma prioridad que la multiplicación. |
| [`ejemplo4.php`](ejemplos/ejemplo4.php) | La potencia (**) y el signo menos | `**` va antes que el signo menos unario y se asocia por la derecha: `-2 ** 2` es -4 y `2 ** 3 ** 2` es 512. |
| [`ejemplo5.php`](ejemplos/ejemplo5.php) | Concatenación y suma (cambio en PHP 8) | En PHP 8 la suma y la resta se evalúan antes que la concatenación con `.`. |
| [`ejemplo6.php`](ejemplos/ejemplo6.php) | Comparaciones antes que operadores lógicos | Las comparaciones se evalúan antes que `&&`, así que no hacen falta paréntesis para combinarlas. |
| [`ejemplo7.php`](ejemplos/ejemplo7.php) | && va antes que \|\| | `&&` tiene más prioridad que `\|\|`: la misma expresión cambia de resultado con paréntesis. |
| [`ejemplo8.php`](ejemplos/ejemplo8.php) | El operador ! actúa sobre lo que tiene justo al lado | `!` niega solo el operando que tiene al lado: `!$x > 5` no es lo mismo que `!($x > 5)`. |
| [`ejemplo9.php`](ejemplos/ejemplo9.php) | Operadores de bits y comparación: permisos Unix | Comprobación de permisos Unix: sin paréntesis, `&` se evalúa después de `==` y el resultado es erróneo. |
| [`ejemplo10.php`](ejemplos/ejemplo10.php) | Asignación con = frente a and | `=` tiene más prioridad que `and` pero menos que `&&`, por eso `$r` y `$s` acaban con valores distintos. |
| [`ejemplo11.php`](ejemplos/ejemplo11.php) | El ternario y la concatenación | El ternario tiene muy poca prioridad: sin paréntesis, la concatenación forma parte de la condición y se pierde el texto. |
| [`ejemplo12.php`](ejemplos/ejemplo12.php) | Ternarios anidados en PHP 8 | En PHP 8 los ternarios anidados necesitan paréntesis; sin ellos se produce un error fatal. |
| [`ejemplo13.php`](ejemplos/ejemplo13.php) | El operador ?? (fusión de null) | `??` tiene menos prioridad que `+`: `$a ?? 80 + 1` no equivale a `($a ?? 80) + 1`. |
| [`ejemplo14.php`](ejemplos/ejemplo14.php) | Conversión de tipo: (int) | La conversión `(int)` se aplica solo al operando inmediato: `(int) $a / $b` frente a `(int) ($a / $b)`. |
| [`ejemplo15.php`](ejemplos/ejemplo15.php) | Incremento dentro de una expresión | Preincremento y postincremento dentro de una expresión: cuándo cambia el valor de la variable. |
| [`ejemplo16.php`](ejemplos/ejemplo16.php) | Expresión completa: precio con IVA | Cálculo de un precio con IVA que combina operadores aritméticos y de concatenación. |

## Diferencias con el documento

El código de cada ejemplo es el del documento. Para que se pueda ejecutar y leer el resultado, se han añadido algunas líneas marcadas con el comentario `// añadido`:

- `header("Content-Type: text/plain; charset=utf-8");` al principio de cada fichero, para que los saltos de línea y la salida de `var_dump()` se vean bien en el navegador.
- `echo "\n";` después de cada `echo`, para que los resultados no aparezcan pegados. Se añade como línea aparte para no alterar la precedencia de las expresiones originales.
- `var_dump()` en los ejemplos 13 y 15, que en el documento solo asignan valores y no muestran nada.

## Prueba sugerida

En el **ejemplo 12**, quita las dos barras de la línea comentada y ejecútalo: verás el error fatal que produce un ternario anidado sin paréntesis en PHP 8.
