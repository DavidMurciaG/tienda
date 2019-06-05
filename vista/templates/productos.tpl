<!DOCTYPE html> 
{*Plantilla para visualizar los productos, se invoca desde productos.php*}
<html>
<head>
    <title>práctica de tienda página de productos </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>
    {*primero solo visualizaremos que el usuario está conectado*}
    <div class="productos">
        {include file='listaProductos.tpl'}
    </div>
    <div class="cesta">
    {include file='cesta.tpl'}
    </div>
</body>
</html>