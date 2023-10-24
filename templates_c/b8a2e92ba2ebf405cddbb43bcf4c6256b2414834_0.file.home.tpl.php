<?php
/* Smarty version 4.2.1, created on 2023-10-24 03:11:02
  from 'C:\Users\carina\Downloads\xampp\htdocs\TPEWEB2\TPEweb2\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_653719a6700bf5_36896408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8a2e92ba2ebf405cddbb43bcf4c6256b2414834' => 
    array (
      0 => 'C:\\Users\\carina\\Downloads\\xampp\\htdocs\\TPEWEB2\\TPEweb2\\templates\\home.tpl',
      1 => 1697680123,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:login.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_653719a6700bf5_36896408 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wiki libro</title>
    <link rel="stylesheet" href="CSS/styles.css"/>
</head>
<body>
    <section>
        <div class="titulopage">wiki libro</div>
        <nav class="contenedor_nav">
            <ul class="Ulnav">
            
              <li><a href="libros.php?libros=1">Jorge Luis Borges</a></li>
               <li><a href="libros.php?libros=2">Julio Cortázar</a></li>
                <li><a href="libros.php?libros=3">Ernesto Sabato</a></li>
                 <li><a href="libros.php?libros=4">Adolfo Bioy Casares</a></li>
                  <li><a href="libros.php?libros=5">Alejandra Pizarnik</a></li>
                   <li><a href="libros.php?libros=6">María Elena Walsh</a></li>
                    <li><a href="libros.php?libros=7">Stephen King</a></li>
                     <li><a href="libros.php?libros=8">Miguel De Cervantes</a></li>
                      <li><a href="libros.php?libros=9">Pablo Neruda</a></li>
            
            </ul>
        </nav>
    </section>
      <?php $_smarty_tpl->_subTemplateRender('file:login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

 


 
		<?php }
}
