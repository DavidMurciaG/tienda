<?php

session_start();
include '..\clases\DB.php';
include '..\clases\Cesta.php';
include_once '..\clases\Producto.php';

require('Smarty.class.php');
$smarty = new Smarty;
$smarty->template_dir = '..\vista\templates';
$smarty->compile_dir = '..\vista\templates_c';

if (isset($_SESSION['usuario'])) {
    $smarty->assign("usuario", $_SESSION['usuario']);
    $lista = DB::obtieneProductos();
    foreach ($lista as $list) {
        $pvp = $list->getPVP();
        $cod = $list->getcodigo();
        $nc = $list->getnombrecorto();
        $listado .="<form action='productos.php' method='POST'>.<input type='submit' value='Añadir' name='añadir'>"
                . " $nc: $pvp €<br>"
                . "<input type='hidden' value='$cod' name='cod'>"
                . "</form>";
        $smarty->assign("listado", $listado);
    }
} else {
    header('Location: http://localhost/tienda/logica/login.php');
}
$cesta = Cesta::obtener_cesta();

if (isset($_POST['añadir'])) {
    $cod = $_POST['cod'];
    $cesta->add_producto($cod);
    $productos = $cesta->getProductos();
    $cesta->guardar_cesta();
}

if (isset($_POST['descontar'])) {
    $cod = $_POST['cod'];
    $cesta->restaProducto($cod);
    $productos = $cesta->getProductos();
    $cesta->guardar_cesta();
}

if (isset($_POST['vaciar'])) {
    $cesta->vaciar_cesta();
    $cesta->guardar_cesta();
    unset($cesta);
}
if (isset($_POST['pagar'])) {
    $productos = $cesta->getProductos();
    header('Location: http://localhost/tienda/logica/pagar.php');
    $smarty->display('pagar.tpl');
}
$smarty->assign("productos", $productos);
$smarty->display('productos.tpl');
?>

