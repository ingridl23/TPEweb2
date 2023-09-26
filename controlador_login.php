<?php

include_once('bbdd.php');
include_once('login.php');

session_start();
//inicio de sesion de un usuario//
if ($_GET['iniciarSesion']) {
  if ($_SESSION['logueado']) {
      echo '<br>Estas logueado,modifica no mas';
  } else {
      echo "logueate";
  }
} else if ($_GET['cerrar']) {
  session_destroy();
  header('Location: login.php');
} else {
  $clave = password_hash($_POST['contraseña-usuario'], PASSWORD_BCRYPT);

  //$db = new PDO('mysql:host=localhost;' . 'dbname=tp_web2;charset=utf8', 'root', '');
  $query = $dbregistro->prepare('SELECT * FROM registro WHERE nombre = ?');
  $query->execute([$_POST['nombre-usuario']]);
  $user = $query->fetch(PDO::FETCH_OBJ);
  echo "<br>";
  var_dump($user);

  if (password_verify($_POST['contraseña-usuario'], ($user->clave))) {
      $_SESSION['usuario'] = $_POST['nombre-usuario'];
      $_SESSION['logueado'] = true;

      echo "<h3 class=success>Tu registro se ha completado con exito </h3>";
      header('Location:inicio.php');
  } else
      echo "<h3 class=error>Ocurrio un error acceso denegado</h3>";

}
 ?>
 
<?php
//si se loguea por primera vez//
if (isset( $_POST['register'])) {

  if (
      strlen($_POST['nombre-usuario'])>= 1 &&
      strlen($_POST['email-usuario'])>= 1 &&
      strlen($_POST['contraseña-usuario'])>= 1 &&
      
      ){

          $nombre =$_POST( [ 'nombre-usuario' ]);
          $correoElectrónico =$_POST([ 'email-usuario']);
          $contraseña = password_hash($_POST(['contraseña-usuario']), PASSWORD_BCRYPT);
          $fecha = date(" d/m/a ")


 // $dbregistro = new PDO ('mysql:host=localhost;dbname=tpe_web2;charset=utf8' , 'root' , '' ,);
  $consulta ="INSERT INTO registro(nombre,email,contraseña,fecha)
  VALUES(' $nombre ',' $correoElectrónico ',' $contraseña ',,' $fecha ') ";

    //$resultado= mysqli_query($dbregistro, $consulta);
   $consulta = $dbregistro->prepare($consulta);
   $consulta->execute();

  if ($consulta) {
    ?>
    <h3 class="Success">Tu registro se ha completado con exito </h3>
    <?php

  } if else{
   ?>
   <h3 class ="error">Ocurrió un error</h3>
   <?php
  }
} else {
  ?>

  <h3 class ="error"> Llena todos los campos </h3>
  <?php
}
}
?>
