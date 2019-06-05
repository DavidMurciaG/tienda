<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
    <input name="cmd" type="hidden" value="_xclick" />
    <!--
                Mi correo de pay pall identificador email ID en profile de mi cuenta de business
                -->
    <input name="business" type="hidden" value="davidmurcia_18-facilitator@hotmail.com" />

    <input name="shopping_url" type="hidden" value="http://localhost/tienda/logica/pagar.php" />
    <input name="currency_code" type="hidden" value="EUR" />
    <input name="return" type="hidden" value="http://localhost/tienda/logica/pagar.php" />
    <input name="notify_url" type="hidden" value="http://localhost/tienda/logica/pagar.php" />
    <input name="rm" type="hidden" value="2" />
    <input type="hidden" name="item_name" value="Compra de {$usuario}">
    <input type="hidden" name="amount" value="{$cesta->get_productos}">
    <input type="image" src="http://www.paypal.com/es_ES/i/btn/x-click-but01.gif" border="0" name="submit" alt="Realice pagos con PayPal: es rápido, gratis y seguro">
</form>