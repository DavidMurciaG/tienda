<?php
/* Smarty version 3.1.33, created on 2019-06-06 00:10:07
  from 'D:\wamp64\www\tienda\vista\templates\cesta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf859dfe78332_46384975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dacdf2d6088d09ea50eea50054130f0f3bb665c9' => 
    array (
      0 => 'D:\\wamp64\\www\\tienda\\vista\\templates\\cesta.tpl',
      1 => 1559779799,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf859dfe78332_46384975 (Smarty_Internal_Template $_smarty_tpl) {
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
            <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                <!--Datos para pagar paypal-->
                <input name="cmd" type="hidden" value="_cart" />
                <input name="upload" type="hidden" value="1" />
                <!--Mi correo de pay pall-->
                <input name="business" type="hidden" value="Zaraguaza87-facilitator@iesandorra.es" />
                <input name="shopping_url" type="hidden" value="http://vista/templates/pago.tpl" />
                <input name="currency_code" type="hidden" value="EUR" />
                <input name="return" type="hidden" value="http://vista/templates/pago.tpl%22/%3E
                <input name="notify_url" type="hidden" value="http://vista/templates/pago.tpl" />
                <input name="rm" type="hidden" value="2" />

                <!--pasamos el contenido de la factura y mostramos el boton ( foto de paypal) -->
                <tr class="pago">
                  <td class="pago"></td>
                  <td class="pago"></td>
                  <td class="pago"></td>
   <input type="hidden" name="item_name" value="Compra de <?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
">
   <input type="hidden" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
">
                </tr>
                <input type="image" src="http://www.paypal.com/es_ES/i/btn/x-click-but01.gif" border="0" name="submit" alt="Realice pagos con PayPal: es rápido, gratis y seguro">
        </form>

    <form action='productos.php' method='POST'>
    <input type="submit" value='vaciar' name="Vaciar"/>
    <input type="submit" value='pagar' name="Pagar"/>
    </form>
<?php }
}
}
