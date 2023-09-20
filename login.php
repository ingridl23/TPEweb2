
<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="CSS/styles.css">
     <title>Document</title>
 </head>
 <body>
     <form method="post" >
         <h2>Hola</h2>
         <p>Inicia tu sesion</p>
         <?php
                 
          require_once('controlador_login.php');
          require_once('bbdd.php');
          ?>
         <div class="input-wrapper">
             <input type="text" name="nombre-usuario" placeholder="Nombre" alt="">
             <img class="input-icon" src="images/name.svg">
         </div>
 
  <!-- <div class="input-wrapper">
             <input type="text" name="direccion-usuario" placeholder="Direccion">
             <img class="input-icon" src="images/direction.svg">
         </div>
          -->
         <div class="input-wrapper">
             <input type="email" name="email-usuario" placeholder="Email">
             <img class="input-icon" src="email/name.svg">
         </div>
         
         <div class="input-wrapper">
             <input type="password" name="contraseña-usuario" placeholder="contraseña">
             <img class="input-icon" src="images/password.svg">
         </div>
         
     <!--    <div class="input-wrapper">
             <input type="number" name="telefono-usuario" placeholder="telefono/celular">
             <img class="input-icon" src="TPEweb2/images/phone.svg">
         </div>
        -->
        <div>
        <a  href="#"class="parrafo-olvido-contraseña-ingreso">¿olvidaste la contraseña? /</a>
        <a  href="#" class="parrafo-olvido-contraseña-ingreso"> no tienes cuenta registrate</a>
        </div>
         <input class="btn" type="submit" name="register" value="iniciar sesion">
         
   </form> 
  
 </body>
 </html>






<?php





    



?>
