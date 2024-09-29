<?php
include "includes/header.php";

/**
 * Son arrays asociativos predefinidos disponibles en todo el script en php
 */

/**
 * $_GET - contiene variables pasadas al script a través de parámetros en la url
 * $_POST - contiene valores pasadas a través de http post method se suele utilizar para pasar datos de formularios
 */

 /**
  * $_REQUEST - contiene los valores de $_GET, $_POST y $_COOKIE
  */

  /**
   * $_COOKIE - valores pasados a través de http cookie
   */

   /**
    * $_SESSION - variables disponibles para el script actual. Para acceder a ella requiere que se inicie la sesión con session_start()
    */

    /**
     * $_SERVER - información sobre el entorno del servidor y la ejecución
     * Incluye headers, paths y locations de script
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

    // probamos accediendo desde la dirección ip de nuestra máquina
    // para averiguarla por consola con el comanfo ipconfig
    // escribimos en la dirección del navegador la dirección ip en vez de localhost
    // mostrar la IP del servidor
    $user_ip = $_SERVER['SERVER_ADDR'];
    echo "IP del servidor: " . $user_ip . "<br>";

    $_SERVER['SERVER_NAME']; //contiene el nombre del dominio
    $_SERVER['SERVER_SOFTWARE'];  //contiene el software que utiliza el servidor
    $_SERVER['HTTP_USER_AGENT'];  //contiene información sobre el navegador del cliente

    // mostrar todas las variables $_SERVER disponibles
    echo '<ul>';
    foreach($_SERVER as $clave => $valor){
        echo '<li>' .$clave.' - '.'</li>';
    }
    echo '<ul>';

    $nombreServidor = $_SERVER["SERVER_NAME"];
    echo "Nombre del servidor: $nombreServidor";

    echo '<ul>';
foreach($_SERVER as $key => $value){
    echo "<li>"
};


    /**
     * $_FILES - Contiene información sobre archivos subidos a través de HTTP POST method
     */
    /**
     * $_ENV - Contiene variables de entorno disponibles para el script actual
     * la disponibilidad depende de la configuración del servidor
     */

    // Acceder a una variable de entorno (si está disponible)
    $path = $_ENV['PATH'] ?? 'No disponible';
    echo "PATH: " . $path;

    /**
     * $GLOBALS - Contiene referencias a todas las variables disponibles en el ámbito global del script
     * contiene variables definidas por el usuario y otras superglobales
     */



include "includes/footer.php";
