<?php
require_once 'vistas/home.php';
class ControladorHome{
    private $home;

    function __construct(){
      $this->home= new claseHome();
    }

    function mostrarControllerHome(){
        $this->home->mostrarHome();
    }
}