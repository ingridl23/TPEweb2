<?php
function head(){
 $resultado= ('<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Document</title>
</head>
<body>
<header>
    <div><h1>Wiki Libro</h1></div>
    <nav class="navegacion">
        <ol>
            <li>  <a href="#">libros</a> </li> 
            <li><a href="#">autores</a></li>
            
        </ol>
      
        <section><a href="#">login</a></section>
    </nav>
</header>
</body>
</html>
');
echo($resultado);
}



function footer(){
    $resultado2=('<footer>
    <div>
       <h5>proyecto web 2 Unicen Sede Tres Arroyos &copy;2023 </h5> 
    </div>
</footer>');
echo($resultado2);
}



function login(){

 $resultado3=('<form class="form-class"  action="login.php" method="post">
 <p>Forma parte de esta comunidad completando tus datos en el siguiente formulario
 </p>
 <label >Nombre de Usuario:<input type="text" value="" nombre="usuario"></label>
 <label>Email:<input type="email"  name="email"></label>
 <label>Contraseña<input type="password"  aria-valuemin="4" aria-valuemax="6" name="password"></label>
 <input type="submit">
</form>');
echo ($resultado3);
 
}

function showhome(){
    header();
    footer();
}
?>