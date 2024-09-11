<?php
include "includes/header.php";

// Declaración
$array1 = [];
$productos = ['cocacola', 'fanta', 'agua'];

// ver los elementos de un array
echo '<pre>';
var_dump($productos);
echo '</prev>';

// acceder a un elemento del array
echo $productos[0];
echo '<br>';

// agregar elementos
$productos[3] = 'casera';
echo

// agregar elementos al final
array_push($productos, 'zumo');

// agregar elementos al principio
array_unshift($productos, 'cerveza');
echo '<pre>';
var_dump($productos);
echo '</pre>';




include 'includes/footer.php';