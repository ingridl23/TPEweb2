<?php
require_once 'libs/smarty/Smarty.class.php';



class vistaAutores{



function mostrarAutores(){


$smarty= new Smarty();




$titulo="autores";

// $smarty->assign("categoria",$categorias);
$smarty->assign("titulo",$titulo);
$smarty->display("autores.tpl");

}
}
?>



 