<?php
define ('PATH_SITE', dirname(__FILE__));
define ('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

require_once(funciones.php);
require_once();

$action = 'home'; // acción por defecto

if (!empty($_GET['action'])) { // se remplaza
    $action = $_GET['action'];
}


$params = explode('/', $action);

// determina que camino seguir según la acción
switch ($params[0]) {
    case 'home':
       showhome();
        break;
    case 'login':
        showhome();
        login();
       
        break;

    default:
        echo('404 Page not found');
        break;
        
}
//geroo mi idea es que a partir de aca realicemos las consultas como hizo diego en la clase y las consultas especiales 
//  las dejemos para el usuario administrador

//1. conexion a la base de datos
$db = new PDO('mysql:host=localhost;dbname=;charset=utf8', 'root', '');
$consulta='SELECT libro.titulo as libro.añodepublicacion, libro.descripccion, autor.nombre as nombreC, club.direccion FROM libro JOIN autor  ON libro.id=autor.id WHERE autor.id=?';
$query=$db->prepare($consulta);
$query->execute();

$resultado=$query->fetchAll(PDO::FETCH_OBJ);
echo $resultado->titulo;
echo $resultado->año de publicacion;
echo $resultado->descripccion;
echo $resultado->autor;



//por ejemplo una estructura asi..
// if usuario == (identificador x):{
//    (entonces se le da acceso  A LAS CONSULTAS A TRAVES DE ALGO COMO UN BOTON O ALGO DE ESO)
// $consulta = insert / delete/.........
//$query = $db->prepare($consulta);
//$query->execute();....
//   }
//etc


// y las demas consultas normal asi en codigo fuera de ninguna condicion de usuario//
?>