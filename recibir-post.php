<?php
include "includes/header.php";

echo "<h2>Aquí recibo los datos del formulario por POST</h2>"; 

if(isset($_POST['nombre'])){
    $nombre = trim($_POST['nombre']);
    echo "Hola :" . $nombre;
}
if(isset($_POST['apellidos'])){
    echo ''. $_POST['apellidos'];
};




include "includes/footer.php";