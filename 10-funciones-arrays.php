<?php
include "includes/header.php";

// in_array - buscar elementos en un array, comprobar si existe
$frutas = ['fresa', 'piña', 'pera'];
$existe = in_array('pera', $frutas);

if ($existe):
    echo '<p>El elemento existe</p>';
endif;

if($existe):
    echo '<p>El elemento existe</p>';
elseif(!$existe):
    echo '<p>El elemento no existe</p>';
endif;

// ordenar los elementos de menor a mayor
sort($frutas);
echo'<pre>';
var_dump($frutas);
echo'</pre>';

// ordenar los elementos de mayor a menor
rsort($frutas);
echo'<pre>';
var_dump($frutas);
echo'</pre>';

$usuario = [
    'nombre' => 'pepe', 
    'nivel' => 'inicial',
    'permisos' => 'algunos',
];

rsort($usuario);
echo'<pre>';
var_dump($usuario);
echo'</pre>';

// ordenar arreglo asociativo asort arsort
asort($usuario);
echo'<pre>';
var_dump($usuario);
echo'</pre>';

// ordenar por claves keys ksort krsort
ksort($usuario);
echo'<pre>';
var_dump($usuario);
echo'</pre>';

include 'includes/footer.php';