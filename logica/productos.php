<?php

//smarty
require('Smarty.class.php');
$smarty = new Smarty;
$smarty->template_dir = 'd:\wamp64\www\tienda\vista\templates';
$smarty->compile_dir = 'd:\wamp64\www\tienda\vista\templates_c';


$smarty->display('productos.tpl');
?>

