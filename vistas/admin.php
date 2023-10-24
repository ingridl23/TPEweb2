<?php
require_once 'libs/smarty/Smarty.class.php';


class AdminView{
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    function showFormLoginError() {
        $error='LOS DATOS ESTAN VACIOS O USTED NO TIENE PERMITIDO EL ACCESO';
        $this->smarty->assign("error", $error);
        $this->smarty->display('templates/error.tpl');
    }


    function mostrarHomeForAdmin(){

        
        $this->smarty->display('templates/admin.tpl');
    }

//para la vista del admin y que realice las modificaciones//
     function showLibros($libros) {
    // asigno variables al tpl smarty
    $this->smarty->assign('count', count($libros)); 
    $this->smarty->assign('libros', $libros);

    // mostrar el tpl
    $this->smarty->display('templates/admin.tpl');

}

function FormEditar($id){
     
    
 
    $this->smarty->assign('id',$id);
    $this->smarty->display('templates/editar.tpl');
}

}
?>
