<?php
include "includes/header.php";

    echo '<h2>Tipos de datos</h2>';

    // Boolean
    $isAutorized = true;
    echo '<p>.$isAutorized.</p>';
    var_dump($isAutorized);

    //Enteros
    $numero = 200;
    echo "<p>El número es $numero y es un número entero </p>";

    // Floats
    $float = 30.6;
    var_dump($float);
    echo"<br>";

    // Strings
    $nombre = 'Ana';

    // Array
    $array = [1, 2, 3];
    $array2 = array('fresa', 'piña', 'melocotón');
    var_dump($array);
    echo '<br>';

    include 'includes/footer.php';