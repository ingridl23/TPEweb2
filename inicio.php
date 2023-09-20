<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css">
    <title>Inicio</title>
</head>
<header>
    <h1 class="titulo-inicio">Wiki Libro</h1>
    <nav class="navegacion">
        <ul>
            <li><a href="#">libros</a> </li> 
            <li><a href="#">autores</a></li>
            
        </ul>
      
        <!--<section><a href="login.php">login</a></section> -->
    </nav>
</header>
<body>
    <?php
    require_once('bbdd.php');
    ?>

    <?php

  foreach ($resultado as $r){
    
    echo $r ['id_autor'];
    echo $r ['nombre_apellido'];
    echo('<br>');
    echo $r ['nacionalidad'];
    echo('<br>');
    echo $r ['titulo'];
    echo('<br>');
    echo $r ['Año_de_publicacion'];
    echo('<br>');
    echo $r['descripccion'];
    echo('<br>');
    };
    ?>
</body>
<footer>
    <div class="div-footer">
       <h5 class="h5-footer">proyecto web 2 Unicen Sede Tres Arroyos &copy;2023 </h5> 
    </div>
</footer>
</html>

<?php
//function head(){
 //$resultado= ('
 
//');
//echo($resultado);
//}



//function footer(){
//    $resultado2=('

//');
//echo($resultado2);
//}



//function login(){

 //$resultado3= ('<!DOCTYPE html>
 //<html lang="en">
 //head>
    // <meta charset="UTF-8">
    // <meta name="viewport" content="width=device-width, initial-scale=1.0">
    // <link rel="stylesheet" href="styles.css">
    // <title>Document</title>
// </head>
 //<body>
  //   <form method="post">
    //     <h2>Hola</h2>
      //   <p>Inicia tu registro</p>
      //   <div class="input-wrapper">
      //       <input type="text" name="nombre-usuario" placeholder="Nombre" alt="">
      //       <img class="input-icon" src="images/name.svg">
      //   </div>
 
//   <div class="input-wrapper">
///             <input type="text" name="direccion-usuario" placeholder="Direccion">
    //         <img class="input-icon" src="images/direction.svg">
    //     </div>
         
   //      <div class="input-wrapper">
      //       <input type="email" name="email-usuario" placeholder="Email">
      //       <img class="input-icon" src="email/name.svg">
      //   </div>
         
       //  <div class="input-wrapper">
        //     <input type="password" name="contraseña-usuario" placeholder="contraseña">
        //     <img class="input-icon" src="images/password.svg">
     //    </div>
         
     //    <div class="input-wrapper">
    //         <input type="number" name="telefono-usuario" placeholder="telefono/celular">
     //        <img class="input-icon" src="TPEweb2/images/phone.svg">
     //    </div>

       //  <input class="btn" type="submit" name="register" value="registrar">
         
  // </form> 
 //  <?php
  // 'require_once('login.php')';
   

 //</body>
// </html>
// ');
//echo ($resultado3);

//}

//function showhome(){
   
    //head();

   // footer();
//}
?>