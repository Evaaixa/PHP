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

?>

<h2>Tabla de Deportes y Aventura</h2>
<table>
    <tr>ACCION</tr>

    <tr>AVENTURA</tr>

    <tr>DEPORTES</tr>


<?php

// $deportes = array (
//     "deporte1" => array ('accion' => 'GTA', 
//         'aventura' => 'ASSASINS',
//         'deportes' => 'FIFA 19',
// ),
//     "deporte2" => array ('accion' => 'COD', 
//         'aventura' => 'CRASH',
//         'deportes' => 'PES 19',
// ),
//     "deporte3" => array ('accion' => 'PUGB', 
//         'aventura' => 'PRINCE OF PERSIA',
//         'deportes' => 'MOTO GP 19',
// ),
// );

// foreach ($deportes as $deporte) {
//     echo "<tr>";
//     echo "<td>" . $deporte["accion"] ."</td>";
//     echo "<td>" . $deporte["aventura"] ."</td>";
//     echo "<td>" . $deporte["deportes"] ."</td>";

//     echo "</tr>";
// }
?>
</table>
<?php

$tabla = [
    'ACCION' => ['GTA', 'COD', 'PUGB'],
    'AVENTURA'=> ['ASSASINS','CRASH','PRINCE OF PERSIA'],
    'DEPORTES' => ['FIFA 19', 'PES 19', 'MOTO GP 19', 'NBA']    
];

$max_juegos = array_map('count', $tabla);
$max_num_juegos = max($max_num_juegos);
var_dump($max_juegos);
echo '<br>';

echo "<h2>Juegos del Mundo</h2>";
echo '<table>';

echo "<tr>";
foreach ($tabla as $key => $value) {
    echo "<th>$key</th>";
}
echo "</tr>";

for($i = 0 ; $i < $max_num_juegos ; $i++){
    echo '<tr>';

    foreach($tabla as $categoria){
        echo '<td>';
        if(isset($categoria[$i])){
            echo $categoria[$i];
        }
        echo '</td>';
    }
    echo "</tr>";
}
echo '</table>';
include 'includes/footer.php';