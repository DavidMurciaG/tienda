<?php
/* Smarty version 3.1.33, created on 2019-06-05 20:15:07
  from 'd:\wamp64\www\tienda\vista\templates\productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf822cb241354_60163549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb4119854f3f96ca1b260351eb66f633bc5224c9' => 
    array (
      0 => 'd:\\wamp64\\www\\tienda\\vista\\templates\\productos.tpl',
      1 => 1559765425,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cesta.tpl' => 1,
  ),
),false)) {
function content_5cf822cb241354_60163549 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html> 
<html>
<head>
    <title>práctica de tienda página de productos </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/css.css">
</head>
<body>
        <h1>Bienvenido a esta página <?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
</h1> 
    <hr/>
    <h3>Listado de Productos</h3> <?php echo $_smarty_tpl->tpl_vars['listado']->value;?>

    <hr/>
    <form action='logoff.php' method='POST'>
        <input type='submit' name='desconectar' value='Desconectar usuario <?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
' />
    </form>
    <?php $_smarty_tpl->_subTemplateRender('file:cesta.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html><?php }
}
