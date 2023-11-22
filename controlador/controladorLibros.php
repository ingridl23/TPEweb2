
<?php

require_once ('modelo/modeloLibros.php');
require_once 'vistas/libros.php';
require_once 'vistas/admin.php';

class LibroController{
   private $model;
   private $view;

   public function __construct() {
       $this->model = new modeloLibros();
       $this->view = new vistaLibros();
        
   }

   function showLibrosByAutor() {
    // verifica datos obligatorios
    if (!isset($_GET['libros']) || empty($_GET['libros'])) {
       // $this->view->renderError();
        return;
    }
    // obtiene el genero enviado por GET
    $autor = $_GET['libros'];
    // obtengo las peliculas del modelo
    $libros = $this->model->getLibrosmodel($autor);
    // actualizo la vista
    $this->view->renderlibrosByAutor($autor, $libros);
}





    

}

?>