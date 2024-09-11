<?php
declare(strict_types= 1); 
include "calculadora.php";
include "includes/header.php";

/* 
* Activa el modo de tipado estricto
* Solo afecta al archivo en el que se declara
* Debe ser la primera instrucción del archivo
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

sumar(5, 7);


$resultado = restar(7, 4);
echo restar(8, 3);




include 'includes/footer.php';


