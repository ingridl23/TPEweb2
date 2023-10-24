<?php
/* Smarty version 4.2.1, created on 2023-10-24 02:46:09
  from 'C:\Users\carina\Downloads\xampp\htdocs\TPEWEB2\TPEweb2\templates\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_653713d10cb389_69541191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c595fbfb3d4e9d96c2624682b37bb22401523cd' => 
    array (
      0 => 'C:\\Users\\carina\\Downloads\\xampp\\htdocs\\TPEWEB2\\TPEweb2\\templates\\admin.tpl',
      1 => 1698108238,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_653713d10cb389_69541191 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wiki libro Admin</title>
    <link rel="stylesheet" href="CSS/admin.css"/> 
</head>
<body class="bodyAdmin">

<div class="conteiner1">
    <div class="titulopage2">wiki libro Welcome Admin</div>
    <a  class="btncerrar" name="cerrar" href="logout">cerrar sesion</a>

<section class="sectionFormAdmin">
        <form method="post" action=" insertar">
        <input type="text" name="titulo" placeholder="ingresa titulo">
        <input type="number" name="AñoDePublicacion" placeholder="Año De Publicacion">
        <input type="text" name="descripcion" placeholder="ingresa descripcion">
        <input type="number" name="idAutor" placeholder="id de autor">
       
        <input type="submit" name="btn-submit" value="insertar">
        </form>
</section>
</div>
<!-- lista de tareas -->
<table class="tabla">

    <thead class="encabezados">
            <tr>
                <th>Título</th>
                <th>año de publicacion</th>
                <th>descripcion</th>
                <th>id autor</th>
                <th> id libro</th>
            </tr>
        <thead>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['libros']->value, 'libro');
$_smarty_tpl->tpl_vars['libro']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['libro']->value) {
$_smarty_tpl->tpl_vars['libro']->do_else = false;
?>
   
             <tr>
             <td><?php echo $_smarty_tpl->tpl_vars['libro']->value->titulo;?>
</td>
             <td><?php echo $_smarty_tpl->tpl_vars['libro']->value->Anio;?>
</td>
             <td><?php echo $_smarty_tpl->tpl_vars['libro']->value->descripcion;?>
</td>
             <td><?php echo $_smarty_tpl->tpl_vars['libro']->value->id_autor;?>
</td>
             <td><?php echo $_smarty_tpl->tpl_vars['libro']->value->id_libros;?>
</td> 

              <td class="btns" > <a href='borrar/<?php echo $_smarty_tpl->tpl_vars['libro']->value->id_libros;?>
' type='button' class="btnDelete">Borrar</a></td>
               <td class="btns"><a href='editar/<?php echo $_smarty_tpl->tpl_vars['libro']->value->id_libros;?>
' type='button' class="btnUpdate">editar</a></td>
           </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
<p class="mt-3"><small>Mostrando <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 libros</small></p>
</body>

<footer class="footer">
    <h6 class="h6footer">tpe web 2 &copy;2023</h6>
</footer>
 <?php }
}
