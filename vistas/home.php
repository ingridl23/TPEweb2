
<?php
require_once('libs/smarty/Smarty.class.php');


class claseHome{


function mostrarHome(){


$smarty= new Smarty();

$smarty->display('templates/home.tpl');
//$smarty->display('templates/login.tpl');
}

}




 ?>
