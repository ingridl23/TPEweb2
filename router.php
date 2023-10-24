<?php
require_once('controlador/controladorLibros.php');

require_once ('controlador/controladorSesion.php');
require_once 'controlador/controladorHome.php';
require_once 'controlador/controladorAdmin.php';
//require_once 'controlador/cerrarsesion.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
 
$action = 'home'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// parsea la accion //
$params = explode('/', $action);

// tabla de ruteo
switch ($params[0]) {
    
    
    case 'error':
        $login= new SesionController();
        $login->showFormLoginError();
        break;
        
     case 'home':
        $home= new ControladorHome();
        $home->mostrarControllerHome();
        
         break;
   
    case 'libros':
       $libros= new LibroController();
       $libros->showLibrosByAutor();
        break;

       case 'login':
           $login= new SesionController();
           $login->ControlerInicioSesion();
             break;
        case 'crudAdmin':
            $crud= new ControllerAdmin();
            $crud->showlibros();
              break;

          case 'logout':
                $authController = new SesionController();
                $authController->CerrarSesion();
                  break;
         

            case 'insertar'://realiza la accion pero primero muestra unos erores como que variables no estan definidas pero una vez que se retrocede a la pagina anterior se puede verificar que  se agrega un libro correctamente//
                $insertar = new LibroController();
                $insertar->addBooks();
                break;

               case 'borrar': // realiza la accion de borrar una vez que muestra un error de pagina no disponible y recargando la pagina nuevamente se verifica que elimina correctamente//

                $id = $params[1];
                $borrar = new ControllerAdmin();
                // obtengo el parametro de la acción
               
                $borrar->deleteBooks($id);
                break;

               case 'editar': //realiza la accion y se visualiza una vez que se vuelve a la pagina del admin //
                $id= $params[1];
               
                $editar= new ControllerAdmin();
                $editar->EditarLibro($id);


                case 'update': 
                    $id= $params[1];
                    $modificar= new ControllerAdmin();
                  
                    $modificar->updateBooks($id);
                    break;
                         default:
                          // header:("HTTP/1.0 404 Not Found");
                         echo('error 404 not found');
                            break;
    }

?>
