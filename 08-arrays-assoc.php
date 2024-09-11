<?php
include "includes/header.php";

// Los arrays asociativos son muy similares a los objetos en JavaScript

$usuario = [
    'nombre' => 'Pepe', 
    'nivel' => 2,
    'permisos' => [
        'administrador' => 'true',
        'cliente'=> 'false'
    ]
];

$usuario['id'] = 23;

echo '<pre>';
var_dump( $usuario );
echo '</pre>';

echo $usuario['permisos']['administrador'];

include 'includes/footer.php';