<?php

include_once('bbdd.php');
include_once('login.php');


if (!empty($_POST['register'])) {

   //si el usuario ingresa su nombre y contraseña se guarda esa info //
  if(!empty($_POST['nombre-usuario']) and !empty($_POST['contraseña-usuario'])and !empty($_POST['direccion-usuario']) ){

    $usuario=$_POST['nombre-usuario'];
    $contraseña=$_POST['contraseña-usuario'];
    $email= $_POST['email-usuario'];


    $consultaR= "SELECT * FROM registro WHERE nombre = '$usuario' and contraseña = '$contraseña' and email = '$email' ";
     $query=$dbregistro->prepare($consultaR);
     $query->execute();
    // $resultadoR=$query->fetchAll(PDO::FETCH_OBJ);
     if ($datos=$query->fetchAll(PDO::FETCH_OBJ)) {
      ?>
              <?php
              require_once('inicio.php');
              ?>
              <?php
            // header("location:inicio.php");
     } else {
       echo('<div class="alert alert-dangers"> acceso denegado </div>');
     }
    }else{
         echo('campos vacios ');
  }



}

   
  
 


    //if(
     //   strlen($_POST['nombre-usuario'])>=1 && 
       // strlen($_POST['direccion-usuario'])>=1 && 
       // strlen($_POST['email-usuario'])>=1 && 
      //  strlen($_POST['contraseña-usuario'])>=1 && 
       // strlen($_POST['telefono-usuario'])>=1 
     //   )//{
        
          //  $name=trim($_POST['nombre-usuario']); 
          //  $direccion=trim($_POST['direccion-usuario']); 
          //  $email=trim($_POST['email-usuario']); 
           // $password=trim($_POST['contraseña-usuario']); 
           // $telefono=trim($_POST['telefono-usuario']); 
           // $fecha=date("d/m/y");
           //VALUES ('$name','$direccion','$email','$password','$telefono','$fecha')";

             //if ($consulta) {
      ?>
      <!--  <h3 class="success">Tu registro se ha completado con exito </h3>-->
       <?php
      
    // }else{
      ?>
     <!-- <h3 class="error">Ocurrio un error</h3>-->
      <?php
    // }

    ?>
 <!--<h3 class="error">Llena todos los campos</h3>-->
