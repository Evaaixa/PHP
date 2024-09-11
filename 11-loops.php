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
    $i++;
}while ($i <= 10);

/**
    * FIZZ BUZZ
    * Imprimir n números
    * Si n es múltiplo de 3 imprimir n - FIZZ
    * Si n es múltiplo de 5 imprimir n - BUZZ
    * Si n es múltiplo de 3 y de 5 imprimir n - FIZZ BUZZ
*/

echo "<p>FIZZ BUZZ</p>";
$n = 100;

for ($i = 1; $i <= $n; $i++):
    if($i % 15 === 0){
    echo $i . ' - FIZZ BUZZ ';
    }elseif($i % 3 === 0){
    echo $i . ' - FIZZ '; 
    }elseif($i % 5 === 0) {
    echo $i . ' - BUZZ';
    }
endfor;

echo '<p>Claude</p>';

function fizzBuzz($start, $end){
    for($i = $start ; $i <= $end ; $i++){
        $salida = '';
        if($i % 3 === 0) $salida .= 'FIZZ';
        if($i % 5 === 0) $salida .= 'BUZZ';
        
        echo $salida === '' ? $i : "$i $salida";
        echo '<br>';
    }
}

fizzBuzz(1, 100);


include 'includes/footer.php';