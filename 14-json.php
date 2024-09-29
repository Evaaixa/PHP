<?php
include "includes/header.php";

//JSON
/**
 * Formato ligero de intercambio de datos
 * Se utiliza para transmitir datos entre un servidor y un cliente
 * Una colección de datos que son pares de clave y valor
 * Esa colección se muestra en una lista o array
 * Javascript, React, Angular, Vue, Android, Java, C, Kotlin
 * entienden, manejan y consumen datos en formato JSON
 */

//  array asociativo en php
$productos = [
    [
        'nombre' => 'libro entrañable',
        'precio' => 24,
        'disponible' => true,
        'oferta' => true
    ],
    [
        'nombre' => 'revista albúm',
        'precio' => 18,
        'disponible' => true,
        'oferta' => false
    ],
    [
        'nombre' => 'folios',
        'precio' => 30,
        'disponible' => false,
        'oferta' => false
        ]
    ];
    
// cuando hacemos una consulta a una BBDD podemos obtener los datos en un array asociativo.
// ese array lo transformamos a JSON para enviarlo al cliente o a JavaScript
// json encode convierte el array en un string
$productos_json = json_encode($productos, JSON_UNESCAPED_UNICODE); 
echo '<pre>';
var_dump( $productos_json );
echo '</pre>';

//convertir un json a array asociativo
$productos_array = json_decode($productos_json, true );
echo '<pre>';
var_dump( $productos_array );
echo '</pre>';


include "includes/footer.php";