<?php
define ('PATH_SITE', dirname(__FILE__));
define ('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

require_once('funciones.php');
require_once('bbdd.php');


$action = 'home'; // acción por defecto

if (!empty($_GET['action'])) { // se remplaza
    $action = $_GET['action'];
}


$params = explode('/', $action);

// determina que camino seguir según la  variable acción
switch ($params[0]) {
    case 'home':
       showhome();
        break;
    case 'login':
      
        require_once('login.php');
        
        break;

       case 'datos':
       
            

    default:
        echo('404 Page not found');
        break;
        
}

?>