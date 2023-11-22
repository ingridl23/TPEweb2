<?php
               
require_once('modelo/modelologin.php');
require_once 'controlador/Helper.php';
require_once 'vistas/home.php';
require_once 'vistas/admin.php';

class SesionController{

    private $model;
    private $vista;
    private $helper;


       function __construct(){
        $this->model= new modeloLogin();
        $this->vista= new AdminView();
        $this->helper= new Helper();
       
    }

    function showFormLoginError() {
      $this->vista->showFormLoginError();
  }
   

     function ControlerInicioSesion(){
      session_start();

      // toma los datos del form
      
      $usuario =$_POST['nombre-usuario'];
      $password= $_POST['contraseña'];
      
      //$_SESSION['usuario']=$usuario;
    // busco el usuario por contraseña
    $user = $this->model->getUserByPassword($usuario);
  

  // verifico que el usuario existe y que las contraseñas son iguales
    
    if (!empty($user) && password_verify($password, $user->contraseña)) {
    // inicio una session para este usuario
     
   // $_SESSION['USER_ID'] = $user->id;
       $this->helper->validateUser($user);
       
         header("Location: ".BASE_URL."crudAdmin");
       
         


} else {
    // si los datos son incorrectos muestro el form con un error
        
         $this->showFormLoginError();  //vista de error//

} 

}

function CerrarSesion(){
  $this->helper->logout();
}
}  
  
