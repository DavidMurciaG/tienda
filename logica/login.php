<?php
        const D = DIRECTORY_SEPARATOR;
include '..' . D . 'clases' . D . 'DB.php';
session_start();
require('Smarty.class.php');
$smarty = new Smarty;
$smarty->template_dir = '..\vista\templates';
$smarty->compile_dir = '..\vista\templates_c';

//asignamos los valores para personalizar plantilla, para sustituir las variables de la misma
if (isset($_POST['enviar'])) {
    $nombre = $_POST['usuario'];
    $pass = $_POST['password'];
    if (DB::verificaCliente($nombre, $pass)) {
        $_SESSION['usuario'] = $nombre;
        header('Location: http://localhost/tienda/logica/productos.php');
    } else {
        $smarty->assign('error', 'Introduce nombre y contraseña de nuevo');
    }
}
$smarty->display('login.tpl');
?>


