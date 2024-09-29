<?php
include "includes/header.php";

/**
 * Crear un array con 8 números enteros
 * Recorrer el array y mostrarlo
 * Ordenar el array (de menor a mayor) y mostrarlo
 * Mostrar su longitud
 * Buscar algún elemento
 * Añadirle valores al array mientras sea menor que 120
 * Mostrar el array
 */

$numeros = [12, 34, 53, 46, 22, 88, 65, 75];
echo '<pre>';
foreach ($numeros as $numero) {
    echo $numero . " ";    
}
// var_dump($numeros);

sort($numeros);
echo'Array ordenado: <br>';
// var_dump($numeros);
echo'</pre>';    

echo "Longitud del array: " . count( $numeros ) ."<br>";

$buscar = 34;

if($existe){
    echo "El número $buscar existe en el array";
}else{
    echo "El número $buscar no existe en el array";
}
// añadirle valores al array
$salir = false;

while(!$salir){
    if(count($numeros) <= 120){
        array_push($numeros, 96);
    }else{
        $salir = true;
    }
}
for($i = 0 ; $i < count($numeros) ; $i++){
    echo $numeros[$i] ."<br>";
}
// 2da versión
function showArray($array){
    foreach($array as $key => $value){
        echo '['. $key .'] ' . $value . ''; 
}}

// 3ra versión
while (count($numeros) < 120){
    array_push($numeros, rand(1, 120));
    $valor++;
}
showArray($numeros);

/**
 * Comprobar si una variable está vacía
 * Si está vacía, rellenarla con texto en minúscula
 * Mostrar por pantalla su contenido en mayúscula y en negrita
 */ 
echo '<br>';
$variable;
if(empty($variable)){
    echo 'La variable está vacía';
}else{
    echo 'La variable tiene contenido';
}
echo '<br>';
// igual pero con el ternario
echo empty($variable) ? 'La variable está vacía' : 'La variable tiene contenido';
echo '<br>';
if(empty($variable)){
    $variable = "en un lugar de la Mancha";
}

$variable = strtoupper($variable);
echo '<b>' . $variable . '</b>';
echo "<br>";

/**
 * Crear 4 variables: una de tipo string, int, array y bool
 * Mostrar por pantalla el tipo y valor de cada una
 * y ahora sin var_dum()
 */

$nuevavar = 'Hola soy tipoString';
$numero = 54;
$array1 = [$nuevavar, $numero];
$existo = true;

echo $nuevavar . ' es de tipo ' . gettype($nuevavar) . '<br>';
echo $numero . ' es de tipo ' . gettype($numero) . '<br>';
echo '$array1' . ' es de tipo ' . gettype($array1) . '<br>';
echo $existo . ' es de tipo ' . gettype($existo) . '<br>';

/**
 * Crea un array con el contenido de la siguiente tabla
 * ACCION       AVENTURA            DEPORTES
 * GTA          ASSASINS            FIFA 19
 * COD          CRASH               PES 19
 * PUGB         PRINCE OF PERSIA    MOTO GP 19
 * Mostrar el contenido en una tabla de html
 */



include 'includes/footer.php';