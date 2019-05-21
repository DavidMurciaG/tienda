<?php

include 'd:\wamp64\www\tienda\clases\DB.php';

require('Smarty.class.php');
$smarty = new Smarty;
$smarty->template_dir = 'd:\wamp64\www\tienda\vista\templates';
$smarty->compile_dir = 'd:\wamp64\www\tienda\vista\templates_c';

$lista = DB::obtieneProductos();

foreach ($lista as $list) {
    $pvp = $list->getPVP();
    $cod = $list->getcodigo();

    $nc = $list->getnombrecorto();
    $listado .= "<form action='producto.php' method='POST'>"
            . "<input type='submit' value='Añadir' name='anadir'>"
            . "$cod " . "$nc: $pvp €<br></form>";
}

$smarty->assign("listado", $listado);
$smarty->display('productos.tpl');
//$smarty->display('login.tpl');
?>

