<?php
declare(strict_types = 1); 
include "calculadora.php";
include "includes/header.php";

/* 
* Activa el modo de tipado estricto para el archivo PHP en el que se declara
* Solo afecta al archivo en el que se declara, no a los archivos incluidos
* Debe ser la primera instrucción en un archivo PHP sin contar la etiqueta de apertura <?php y los comentarios
* Realiza comprobaciones de tipo de parámetros y valores de retorno de las funciones
*/

echo '<h2>Funciones</h2>';

/**
 * Tipos de datos:
 * int
 * bool
 * string
 * float
 * array
 */

 function sumar(int $n1, int $n2 = 0): void{
    echo $n1 + $n2 . '<br>';
 }

sumar(5, 7);
sumar(60);
// sumar('hola', 4);

// funciones que retornan datos
function usuarioLogueado() : bool {
    return false;
}

$isLogueado = usuarioLogueado();

echo $isLogueado ? '<p>El usuario ha iniciado sesión</p>' : "<p>Acceso denegado</p>";

// parámetros nombrados a partir de la versión 8
function sumar2(int $numero1, int $numero2): int{
    return $numero1 + $numero2;
}

$resultado = restar(7, 4);
echo restar(8, 3);




include 'includes/footer.php';


