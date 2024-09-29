<?php
include "includes/header.php";

/**
 * Crea un array con el contenido de la siguiente tabla
 * ACCION       AVENTURA            DEPORTES
 * GTA          ASSASINS            FIFA 19
 * COD          CRASH               PES 19
 * PUGB         PRINCE OF PERSIA    MOTO GP 19
 * Mostrar el contenido en una tabla de html
 */

 $deportes = array 
 (
    "deporte1" => array ('accion' => 'GTA', 
        'aventura' => 'ASSASINS',
        'deportes' => 'FIFA 19',
        ),
    "deporte2" => array ('accion' => 'COD', 
        'aventura' => 'CRASH',
        'deportes' => 'PES 19',
        ),
    "deporte3" => array ('accion' => 'PUGB', 
        'aventura' => 'PRINCE OF PERSIA',
        'deportes' => 'MOTO GP 19',
        ),
 );
    

foreach ($deportes as $deporte) {
    echo "<tr>";
    echo "<td>" . $deporte["accion"] ."</td>";
    echo "<td>" . $deporte["aventura"] ."</td>";
    echo "<td>" . $deporte["deportes"] ."</td>";

    echo "</tr>";
}


$tabla = array
(
    'ACCION' => array('GTA', 'COD', 'PUGB'),
    'AVENTURA'=> array('ASSASINS','CRASH','PRINCE OF PERSIA'),
    'DEPORTES' => array('FIFA 19', 'PES 19', 'MOTO GP 19', 'NBA')    
);

// array_map('count', $array) - aplica una función, en este caso count a cada elemento de $array y devuelve un array con los resultados
// max($array) - devuelve el valor máximo de un array
// encontrar el máximo número de juegos en un género
$max_juegos = max(array_map('count', $tabla));

echo "<table>";

// Generar encabezados de la table (géneros)
echo "<tr>";
foreach ($tabla as $genero => $juegos) {
    echo "<th>" . $genero . "</th>";
}
echo "</tr>";

// Generar filas de juegos
for ($i = 0; $i < $max_juegos; $i++) {
    echo "<tr>";
    foreach ($tabla as $juegos) {
        echo "<td>";
        if (isset($juegos[$i])) {
            echo $juegos[$i];
        } else {
            echo "&nbsp;"; // Espacio en blanco para celdas vacías
        }
        echo "</td>";
    }
    echo "</tr>";
}

echo "</table>";

include 'includes/footer.php';





















include 'includes/footer.php';