<?php
/* Smarty version 3.1.33, created on 2019-06-05 21:19:35
  from 'D:\wamp64\www\tienda\vista\templates\cesta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf831e78af6f7_14647827',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dacdf2d6088d09ea50eea50054130f0f3bb665c9' => 
    array (
      0 => 'D:\\wamp64\\www\\tienda\\vista\\templates\\cesta.tpl',
      1 => 1559769021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf831e78af6f7_14647827 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['productos']->value))) {?>
<h2>Listado de cesta</h2>
    <?php $_smarty_tpl->_assignInScope('total', 0);?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'unidades', false, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value => $_smarty_tpl->tpl_vars['unidades']->value) {
?>
        <form action='productos.php' method='POST'>
        <?php echo $_smarty_tpl->tpl_vars['unidades']->value['unidades'];?>
 <?php echo $_smarty_tpl->tpl_vars['unidades']->value['productos']->getnombrecorto();?>
 -> <?php echo $_smarty_tpl->tpl_vars['unidades']->value['unidades']*$_smarty_tpl->tpl_vars['unidades']->value['productos']->getPVP();?>
€
        <?php $_smarty_tpl->_assignInScope('total', $_smarty_tpl->tpl_vars['total']->value+($_smarty_tpl->tpl_vars['unidades']->value['unidades']*$_smarty_tpl->tpl_vars['unidades']->value['productos']->getPVP()));?>
        <input type='hidden' value='<?php echo $_smarty_tpl->tpl_vars['producto']->value;?>
' name='cod'>
        <input type='submit' name='descontar' value='Descontar'/><br/>  
        <hr/>
        </form>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <strong>Importe total:<strong><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
€
    <form action='productos.php' method='POST'>
    <input type="submit" value='vaciar' name="Vaciar"/>
    <input type="submit" value='pagar' name="Pagar"/>
    </form>
<?php }
}
}
