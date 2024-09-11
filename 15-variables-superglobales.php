<?php
include "includes/header.php";

/**
 * Son arrays asociativos predefinidos disponibles en todo el script en php
 */

/**
 * $_GET - contiene variables pasadas al script a través de parámetros en la url
 */

/**
 * $_POST - contiene valores pasadas a través de htto post
 */

 /**
  * $_REQUEST - contiene los valores de $_GET, $_POST y $_COOKIE
  */

  /**
   * $_COOKIE - valores pasados a través de http cookie
   */

   /**
    * $_SESSION - variables disponibles para el script actual
    */

    /**
     * $_SERVER - información sobre el entorno del servidor y del script
     */

/**
 * $_ENV - contiene variables de entorno disponibles para el script actual 
 * La disponibilidad depende de la configuración del servidor
 */

 $path = $_ENV['PATH'];
if(isset($path)){
    echo "Path: $path <br>";
}else{
    echo "La variable ENV no está disponible<br>";
}

    //  Mostrar la IP del usuario
    $user_ip = $_SERVER['REMOTE_ADDR'];
    echo "Tu IP es: $user_ip <br>";

    $nombreServidor = $_SERVER["SERVER_NAME"];
    echo "Nombre del servidor: $nombreServidor";

    echo '<ul>';
foreach($_SERVER as $key => $value){
    echo "<li>"
};




include "includes/footer.php";
