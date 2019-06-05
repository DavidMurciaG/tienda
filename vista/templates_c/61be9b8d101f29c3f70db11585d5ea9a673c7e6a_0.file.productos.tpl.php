<?php
/* Smarty version 3.1.33, created on 2019-06-05 20:49:34
  from 'D:\wamp64\www\tienda\vista\templates\productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf82ade506700_16893577',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61be9b8d101f29c3f70db11585d5ea9a673c7e6a' => 
    array (
      0 => 'D:\\wamp64\\www\\tienda\\vista\\templates\\productos.tpl',
      1 => 1559767764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:listaProductos.tpl' => 1,
    'file:cesta.tpl' => 1,
  ),
),false)) {
function content_5cf82ade506700_16893577 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html> 
<html>
<head>
    <title>práctica de tienda página de productos </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>
        <div class="productos">
        <?php $_smarty_tpl->_subTemplateRender('file:listaProductos.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <div class="cesta">
    <?php $_smarty_tpl->_subTemplateRender('file:cesta.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
</body>
</html><?php }
}
