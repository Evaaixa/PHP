<?php
include "includes/header.php";

// for
for ($i = 1; $i <= 10; $i++) {
    echo $i;
}

// while
$i = 0;
while ($i < 10){
    echo $i;
    $i++;
}

echo"<br>";
// do while
$i = 0;
do{
    echo $i;
    $i++; //incremento
}while ($i < 10);
echo '<br>';
// For
for($i = 0 ; $i < 10 ; $i++){
    echo $i . '<br>';
}


/**
    * FIZZ BUZZ
    * Imprimir n números
    * Si n es múltiplo de 3 imprimir n - FIZZ
    * Si n es múltiplo de 5 imprimir n - BUZZ
    * Si n es múltiplo de 3 y de 5 imprimir n - FIZZ BUZZ
*/

echo "<p>FIZZ BUZZ</p>";
$n = 100;

for ($i = 1; $i <= $n; $i++){
    if($i % 15 === 0){
    echo $i . ' - FIZZ BUZZ <br>';
    }
    elseif($i % 3 === 0){ //elseif puede ir con o sin espacio else if
        echo $i . ' - FIZZ '; 
    }elseif($i % 5 === 0) {
        echo $i . ' - BUZZ';
    }else{
        echo $i . '<br>';
    }
}
endfor;

echo '<p>Claude</p>';

function fizzBuzz($start, $end){
    for($i = $start ; $i <= $end ; $i++){
        $salida = '';
        if($i % 3 === 0) $salida .= 'FIZZ';
        if($i % 5 === 0) $salida .= 'BUZZ';
        
        // condicional ternario
        // condición $salida / $output === ''
        echo $salida === '' ? $i : "$i $salida";
        echo '<br>';
    }
}

fizzBuzz(1, 100);


include 'includes/footer.php';