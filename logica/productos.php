<?php

session_start();
include 'd:\wamp64\www\tienda\clases\DB.php';

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
        $listado .="<input type='submit' value='Añadir' name='anadir'>"
                . " $cod " . "$nc: $pvp €<br>";
    }

    $smarty->assign("listado", $listado);
    $smarty->display('productos.tpl');
} else {
    header('Location: http://localhost/tienda/logica/login.php');
}
?>

