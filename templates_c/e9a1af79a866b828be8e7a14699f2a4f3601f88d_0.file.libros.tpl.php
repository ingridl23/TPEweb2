<?php
/* Smarty version 4.2.1, created on 2023-10-24 03:59:54
  from 'C:\Users\carina\Downloads\xampp\htdocs\TPEWEB2\TPEweb2\templates\libros.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6537251a006e61_32186245',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9a1af79a866b828be8e7a14699f2a4f3601f88d' => 
    array (
      0 => 'C:\\Users\\carina\\Downloads\\xampp\\htdocs\\TPEWEB2\\TPEweb2\\templates\\libros.tpl',
      1 => 1698111054,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6537251a006e61_32186245 (Smarty_Internal_Template $_smarty_tpl) {
?> <link rel="stylesheet" href="CSS/admin.css"/>
<h1 class="tituloLista">Lista por autor: <?php echo $_smarty_tpl->tpl_vars['autor']->value;?>
</h1>

<table class="tabla1">
 <thead class="encabezados1">
            <tr>
                <th>Título</th>
                <th>año de publicacion</th>
                <th>descripcion</th>
            </tr>
        <thead>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['libros']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
      
                <tr>
                    <td class="tdtitulo"><?php echo $_smarty_tpl->tpl_vars['item']->value->titulo;?>
</td>

                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value->Anio;?>
</td> 
                    
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value->descripcion;?>
</td>
                </tr>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </table>
 <?php }
}
