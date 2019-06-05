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
    <form action='productos.php' method='POST'>
    <input type="submit" value='vaciar' name="Vaciar"/>
    <input type="submit" value='pagar' name="Pagar"/>
    </form>
{/if}