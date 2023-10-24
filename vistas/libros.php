<?php
require_once 'libs/smarty/Smarty.class.php';

class vistaLibros{

   private $smarty;

    function __construct(){

      $this->smarty= new Smarty();
    
    }

    function renderLibrosByAutor($autor,$libros){


       $this->smarty->assign("libros",$libros);
        $this->smarty->assign("autor",$autor);
        $this->smarty->display("templates/libros.tpl");
    }
    // function renderError() {
    //     $smarty = new Smarty ();
    //     $error='ERROR! AUTOR no especificado.';
    //     $smarty->assign("error",$error);
    //     $smarty->display("templates/error.tpl");

    // }


}



?>
<?php
// require_once 'controlador/controladorLibros.php';
 $libros= new LibroController();
 $libros->showLibrosByAutor();
?>