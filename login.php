
<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="styles.css">
     <title>Document</title>
 </head>
 <body>
     <form method="post" >
         <h2>Hola</h2>
         <p>Inicia tu registro</p>
         <div class="input-wrapper">
             <input type="text" name="nombre-usuario" placeholder="Nombre" alt="">
             <img class="input-icon" src="images/name.svg">
         </div>
 
   <div class="input-wrapper">
             <input type="text" name="direccion-usuario" placeholder="Direccion">
             <img class="input-icon" src="images/direction.svg">
         </div>
         
         <div class="input-wrapper">
             <input type="email" name="email-usuario" placeholder="Email">
             <img class="input-icon" src="email/name.svg">
         </div>
         
         <div class="input-wrapper">
             <input type="password" name="contraseña-usuario" placeholder="contraseña">
             <img class="input-icon" src="images/password.svg">
         </div>
         
         <div class="input-wrapper">
             <input type="number" name="telefono-usuario" placeholder="telefono/celular">
             <img class="input-icon" src="TPEweb2/images/phone.svg">
         </div>

         <input class="btn" type="submit" name="register" value="registrar">
         
   </form> 
   <?php
   require_once('login.php');
   ?>
 </body>
 </html>






<?php
include_once('bbdd.php');
//include_once('funciones.php');

if (isset($_POST['register'])) {
   
    if(
        strlen($_POST['nombre-usuario'])>=1 && 
        strlen($_POST['direccion-usuario'])>=1 && 
        strlen($_POST['email-usuario'])>=1 && 
        strlen($_POST['contraseña-usuario'])>=1 && 
        strlen($_POST['telefono-usuario'])>=1 
        ){
        
            $name=trim($_POST['nombre-usuario']); 
            $direccion=trim($_POST['direccion-usuario']); 
            $email=trim($_POST['email-usuario']); 
            $password=trim($_POST['contraseña-usuario']); 
            $telefono=trim($_POST['telefono-usuario']); 
            $fecha=date("d/m/y");


    $dbregistro= new PDO('mysql:host=localhost;dbname=tpe_web2;charset=utf8', 'root', '',);
    $consulta="INSERT INTO registro(nombre,direccion,email,contraseña,telefono,fecha)
    VALUES ('$name','$direccion','$email','$password','$telefono','$fecha')";

      //$resultado= mysqli_query($dbregistro, $consulta);
     $query=$dbregistro->prepare($consulta);
     $query->execute();

    if ($consulta) {
      ?>
      <h3 class="success">Tu registro se ha completado con exito </h3>
      <?php
     
    }else{
     ?>
     <h3 class="error">Ocurrio un error</h3>
     <?php
    }
}else{
 ?>
 <h3 class="error">Llena todos los campos</h3>
 
 <?php

}
}



    

//$usuario= $_POST['usuario'];
//$email= $_POST['email'];
//$password = $_POST['password'];
//$identificacion_Usuario=$_POST['id'];

?>
