<?php
/* Smarty version 3.1.33, created on 2019-06-05 20:27:26
  from 'D:\wamp64\www\tienda\vista\templates\listaProductos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf825ae4ef8a6_99733711',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87b0503af47aa7bf58d95056be412f15cd0b1333' => 
    array (
      0 => 'D:\\wamp64\\www\\tienda\\vista\\templates\\listaProductos.tpl',
      1 => 1559766396,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf825ae4ef8a6_99733711 (Smarty_Internal_Template $_smarty_tpl) {
?>    <h1>Bienvenido a esta página <?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
</h1> 
    <hr/>
    <h3>Listado de Productos</h3> <?php echo $_smarty_tpl->tpl_vars['listado']->value;?>

    <hr/>
    <form action='logoff.php' method='POST'>
        <input type='submit' name='desconectar' value='Desconectar usuario <?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
' />
    </form><?php }
}
