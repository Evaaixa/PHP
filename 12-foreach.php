<?php
include "includes/header.php";

$vehiculos = ['Coche', 'Avión', 'Camión', 'Moto'];

// para saber el número de elementos del array
echo count($vehiculos) . '<br>';
echo sizeof($vehiculos) .'<br>';

for($i = 0 ; $i < count($vehiculos) ; $i++) {
    echo $vehiculos[$i] .'<br>';
}

foreach($vehiculos as $vehiculo) {
    echo $vehiculo .'<br>';
}

$usuario = [
    'nombre' => 'Pepa',
    'nivel' => 2,
    'permisos' => 'Administrador',
];

foreach($usuario as $valor){
    echo $valor .'<br>';
}

foreach ($usuario as $key => $valor){
    echo $key . ': ' . $valor .'<br>';
}

$productos = [
    [
        'nombre' => 'libro',
        'precio' => 24,
        'disponible' => true,
        'oferta' => true
    ],
    [
        'nombre' => 'revista',
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

echo '<div class="artículos">';
foreach($productos as $producto){
    ?>
    <article>
        <p>Producto: <?php echo $producto['nombre']; ?></p>
        <p>Precio: <?php echo $producto['precio'] . ' €'; ?></p>
        <p><?php echo $producto['disponible'] ? 'Disponible' : 'No disponible' ?></p>
        <?php echo $producto['oferta'] ? '<p class="rebajado">Rebajado</p>': ""; ?>
    </article>
    <?php
}

echo '</div>';

include 'includes/footer.php';