<?php
/* Smarty version 3.1.33, created on 2019-05-21 22:56:50
  from 'd:\wamp64\www\tienda\vista\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array(
            'version' => '3.1.33',
            'unifunc' => 'content_5ce4823235cbb7_48781283',
            'has_nocache_code' => false,
            'file_dependency' =>
            array(
                '1e1c972a0f4641a6201a6600b5b19c8cdd33ee6a' =>
                array(
                    0 => 'd:\\wamp64\\www\\tienda\\vista\\templates\\login.tpl',
                    1 => 1558479409,
                    2 => 'file',
                ),
            ),
            'includes' =>
            array(
            ),
                ), false)) {

    function content_5ce4823235cbb7_48781283(Smarty_Internal_Template $_smarty_tpl) {
        ?><!DOCTYPE html>
        <html>
            <head>
                <meta http-equiv="content-type" content="text/html; charset=UTF-8">
                <title>Login Tienda Web con Plantillas</title>
                <link href="tienda.css" rel="stylesheet" type="text/css">
            </head>
            <body>
                <div id='login'>
                    <form action='login.php' method='post'>
                        <fieldset >
                            <legend>Login</legend>
                            <div><span class='error'><?php echo $_smarty_tpl->tpl_vars['error']->value; ?>
                                </span></div>
                            <div class='campo'>
                                <label for='usuario' >Usuario:</label><br/>
                                <input type='text' name='usuario' id='usuario' maxlength="50" /><br/>
                            </div>
                            <div class='campo'>
                                <label for='password' >Contraseña:</label><br/>
                                <input type='password' name='password' id='password' maxlength="50" /><br/>
                            </div>

                            <div class='campo'>
                                <input type='submit' name='enviar' value='Enviar' />
                            </div>
                        </fieldset>
                    </form>
                </div>
            </body>
        </html>
    <?php
    }

}
