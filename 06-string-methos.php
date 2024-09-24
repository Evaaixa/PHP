<?php
include "includes/header.php";

$texto = 'El batracio amarillo';

$longitud = strlen($texto);

echo "<p>El texto: $texto tiene: $longitud longitud</p>";

// eliminar espacios al principio y al final de un string
$texto = trim($texto);

// convertir a mayúsculas y a minúsculas
echo strtoupper($texto);
echo '<br>';
echo strtolower($texto);

echo str_replace('amarillo', 'rojo', $texto);

// comprobar si un string existe dentro de otro
echo strpos($texto, 'rojo');

// concatenar strings
echo 'Título: ' . $texto . ' Publicado';
echo '<br>';

// aquí hay que utilizar comillas dobles
echo "Título {$texto} Publicado";



include 'includes/footer.php';