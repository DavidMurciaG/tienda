{if (isset($productos))}
<h2>Listado de cesta</h2>
    {$total=0}
    {foreach $productos as $producto=>$unidades}
        <form action='productos.php' method='POST'>
        {$unidades['unidades']} {$unidades['productos']->getnombrecorto()} -> {$unidades['unidades']*$unidades['productos']->getPVP()}€
        {$total=$total+($unidades['unidades']*$unidades['productos']->getPVP())}
        <input type='hidden' value='{$producto}' name='cod'>
        <input type='submit' name='descontar' value='Descontar'/><br/>  
        <hr/>
        </form>

    {/foreach}
    <strong>Importe total:<strong>{$total}€
            <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                <!--Datos para pagar paypal-->
                <input name="cmd" type="hidden" value="_cart" />
                <input name="upload" type="hidden" value="1" />
                <!--Mi correo de pay pall-->
                <input name="business" type="hidden" value="davimurcia-facilitator@hotmail.com" />
                <input name="shopping_url" type="hidden" value="http://Localhost/tienda/logica/productos.php" />
                <input name="currency_code" type="hidden" value="EUR" />
                <input name="return" type="hidden" value="http://Localhost/tienda/logica/productos.php"
                <input name="notify_url" type="hidden" value="http://Localhost/tienda/logica/productos.php" />
                <input name="rm" type="hidden" value="2" />

                    <input type="hidden" name="item_name_total" value="total">
                    <input type="hidden" name="amount_1" value="1">
                    <input type="hidden" name="quantity_total" value="{$total}">
                </tr>
                <input type="image" src="http://www.paypal.com/es_ES/i/btn/x-click-but01.gif" border="0" name="submit" alt="Realice pagos con PayPal: es rápido, gratis y seguro">
        </form>

    <form action='productos.php' method='POST'>
    <input type="submit" value='vaciar' name="Vaciar"/>
    <input type="submit" value='pagar' name="Pagar"/>
    </form>
{/if}
