<?php
/* Smarty version 3.1.33, created on 2019-05-21 21:27:32
  from 'd:\wamp64\www\tienda\vista\templates\productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce46d44d399e6_62638395',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb4119854f3f96ca1b260351eb66f633bc5224c9' => 
    array (
      0 => 'd:\\wamp64\\www\\tienda\\vista\\templates\\productos.tpl',
      1 => 1558474049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce46d44d399e6_62638395 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <title>práctica de tienda página de productos </title>
        <meta charset="UTF-8">
    </head>
    <body>
              <h1>Bienvenido a esta página <?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
</h1>
       <hr/>
       <h3>Listado de Productos</h3>
        <?php echo $_smarty_tpl->tpl_vars['listado']->value;?>

    </body>
</html><?php }
}
