<?php
/* Smarty version 3.1.33, created on 2019-06-05 20:19:39
  from 'D:\wamp64\www\tienda\vista\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf823db4af7d4_48410894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a500bc0d64dae7285959f53214610f0fc1549f2' => 
    array (
      0 => 'D:\\wamp64\\www\\tienda\\vista\\templates\\login.tpl',
      1 => 1559165984,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf823db4af7d4_48410894 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html> <html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Login Tienda Web con Plantillas</title>
    <link href="tienda.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id='login'>
        <form action='login.php' method='post'>
            <fieldset>
                <legend>Login</legend>
                                <div><span class='error'><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span></div>
                <div class='campo'>
                    <label for='usuario'>Usuario:</label>
                    <br/>
                    <input type='text' name='usuario' id='usuario' maxlength="50" />
                    <br/>
                </div>
                <div class='campo'>
                    <label for='password'>Contraseña:</label>
                    <br/>
                    <input type='password' name='password' id='password' maxlength="50" />
                    <br/>
                </div>

                <div class='campo'>
                    <input type='submit' name='enviar' value='Enviar' />
                </div>
            </fieldset>
        </form>
    </div>
</body>

</html><?php }
}
