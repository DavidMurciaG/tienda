<?php

session_start();
include 'd:\wamp64\www\tienda\clases\DB.php';
include 'd:\wamp64\www\tienda\clases\Cesta.php';

require('Smarty.class.php');
$smarty = new Smarty;
$smarty->template_dir = 'd:\wamp64\www\tienda\vista\templates';
$smarty->compile_dir = 'd:\wamp64\www\tienda\vista\templates_c';

if (isset($_SESSION['usuario'])) {
    $smarty->assign("usuario", $_SESSION['usuario']);
    $lista = DB::obtieneProductos();
    foreach ($lista as $list) {
        $pvp = $list->getPVP();
        $cod = $list->getcodigo();

        $nc = $list->getnombrecorto();
        $listado .="<form action='productos.php' method='POST'>.<input type='submit' value='Añadir' name='anadir'>"
                . " $cod " . "$nc: $pvp €<br>"
                . "<input type='hidden' value='$cod' name='cod'>"
                . "</form>";
        if (isset($_POST['añadir'])) {
            $cesta->add_producto($cod);
            $cod = $_POST['cod'];
            $producto = DB::obtieneProducto($cod);
            $cesta = array_push(Cesta::$productos_cesta, $producto);
        }
    }

    $smarty->assign("listado", $listado);
    $smarty->assign("cesta", $cesta);
    $smarty->display('productos.tpl');
} else {
    header('Location: http://localhost/tienda/logica/login.php');
}
?>

