<?php
/* Smarty version 4.2.1, created on 2023-11-22 15:54:22
  from 'C:\Users\carina\Downloads\xampp\htdocs\TPEWEB2\TPEweb2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_655e161e7df602_27914379',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49bc452cb262837fc628ac704b028dde0db4ddb6' => 
    array (
      0 => 'C:\\Users\\carina\\Downloads\\xampp\\htdocs\\TPEWEB2\\TPEweb2\\templates\\login.tpl',
      1 => 1698111054,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_655e161e7df602_27914379 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="CSS/styles.css">
   


     <form method="post" action="login">
         <h2>Hola</h2>
         <p>Inicia tu sesion</p>
       
         <div class="input-wrapper">
             <input type="text" name="nombre-usuario" placeholder="Nombre" alt="">
             <img class="input-icon" src="images/name.svg">
         </div>
 
     <!--    <div class="input-wrapper">
             <input type="email" name="email-usuario" placeholder="Email">
             <img class="input-icon" src="email/name.svg">
         </div>
         -->
         <div class="input-wrapper">
             <input type="password" name="contraseña" placeholder="contraseña">
             <img class="input-icon" src="images/password.svg">
         </div>
     
        <div>
        <a  href="#"class="parrafo-olvido-contraseña-ingreso">¿olvidaste la contraseña?/</a>
        <!--<a  href="#" class="parrafo-olvido-contraseña-ingreso"> no tienes cuenta registrate</a>-->
        </div>
        <!-- <a  href="controlador/controladorlogin.php"class="btn" type="submit" name="iniciarSesion" >Iniciar Sesion </a> -->
        <!-- <input class="btn" type="submit" name="cerrar" value="cerrar"> -->
         <input class="btn" type="submit" name="register" value="iniciar sesion">

   </form> 



<?php }
}
