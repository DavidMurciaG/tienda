<!DOCTYPE html>
{*Platilla para visualizar los productos, se invoca desde productos.php*}
<html>
    <head>
        <title>práctica de tienda página de productos </title>
        <meta charset="UTF-8">
    </head>
    <body>
       {*primero solo visualizaremos que el usuario está conectado*}
       <h1>Bienvenido a esta página {$usuario}</h1>
       <hr/>
       <h3>Listado de Productos</h3>
        {$listado}
    </body>
</html>