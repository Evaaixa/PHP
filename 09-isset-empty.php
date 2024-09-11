<?php
include "includes/header.php";

$usuarios = [];
$usuarios2 = ['Pepe', 'Eva', 'Tomas'];

$usuario = [
    'nombre' => 'Pepe', 
    'nivel' => 2,
    'permisos' => [
        'administrador' => 'true',
        'cliente'=> 'false'
    ]
];

// empty comprueba si un arreglo (array) está vacío
var_dump(empty($usuarios));
echo '<br>';

// isset comprueba si un arreglo (array) está creado o una propiedad está definida
var_dump(isset($usuarios4));
echo'<br>';

//  var_dump(isset($usuario['nivel']));

if (isset($usuario['nivel'])){
    echo 'El usuario tiene el nivel'. $usuario['nivel'];
}else{
    echo 'El usuario no tiene nivel definido';
}


include 'includes/footer.php';