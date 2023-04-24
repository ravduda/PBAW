<?php /* Smarty version Smarty-3.1.17, created on 2023-04-24 22:54:46
         compiled from "/var/www/html/php_07_role/app/views/LoginView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6122641616446f8599f7136-57589655%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a648c534e71b0c8d9c9a88605b2fc996bc35b9d' => 
    array (
      0 => '/var/www/html/php_07_role/app/views/LoginView.tpl',
      1 => 1682376706,
      2 => 'file',
    ),
    '5ec7d3ca0c0002f574f375a56495207d968fff08' => 
    array (
      0 => '/var/www/html/php_07_role/app/views/templates/elements.html',
      1 => 1682376885,
      2 => 'file',
    ),
    'df7850140f2e1cb90177bb46eff6acebcc5213d1' => 
    array (
      0 => '/var/www/html/php_07_role/app/views/templates/messages.tpl',
      1 => 1682372024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6122641616446f8599f7136-57589655',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_6446f859a4fd29_99433397',
  'variables' => 
  array (
    'app_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6446f859a4fd29_99433397')) {function content_6446f859a4fd29_99433397($_smarty_tpl) {?><!DOCTYPE html>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
  <head>
    <title>Elements Reference - Massively by HTML5 UP</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, user-scalable=no"
    />
    <link
      rel="stylesheet"
      href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/views/templates/assets/css/main.css"
    />
    <noscript
      ><link
        rel="stylesheet"
        href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/views/assets/css/noscript.css"
    /></noscript>
  </head>
  <body class="is-preload">
    <!-- Wrapper -->
    <div id="wrapper">
      <!-- Header -->
      <header id="header">
        <p class="logo"> Logowanie do systemu </p>
      </header>

      <!-- Main -->
      <div id="main">
        <!-- Post -->
        <section class="post">
          <!-- Form -->
          



<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post"  class="pure-form pure-form-aligned bottom-margin">
	<fieldset>
        <div class="pure-control-group">
			<input id="id_login" type="text" name="login" placeholder="Login"/>
		</div>
		<br/>
        <div class="pure-control-group">
			<input id="id_pass" type="password" name="pass" placeholder="Hasło"/><br />
		</div>
		<div class="pure-controls">
			<input type="submit" value="zaloguj" class="primary"/>
		</div>
	</fieldset>
</form>	

<?php /*  Call merged included template "messages.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6122641616446f8599f7136-57589655');
content_644708b6e14ae0_34028145($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "messages.tpl" */?>


          <hr />
        </section>
      </div>

      <!-- Footer -->
      <footer id="footer">
        <section class="split contact"></section>
      </footer>

      <!-- Copyright -->
      <div id="copyright">
        <ul>
          <li>&copy; Untitled</li>
          <li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
        </ul>
      </div>
    </div>

    <!-- Scripts -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/views/templates/assets/js/jquery.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/views/templates/assets/js/jquery.scrollex.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/views/templates/assets/js/jquery.scrolly.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/views/templates/assets/js/browser.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/views/templates/assets/js/breakpoints.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/views/templates/assets/js/util.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/views/templates/assets/js/main.js"></script>
  </body>
</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.17, created on 2023-04-24 22:54:46
         compiled from "/var/www/html/php_07_role/app/views/templates/messages.tpl" */ ?>
<?php if ($_valid && !is_callable('content_644708b6e14ae0_34028145')) {function content_644708b6e14ae0_34028145($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
<div class="messages error">
	<ol>
	<?php  $_smarty_tpl->tpl_vars['err'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['err']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['msgs']->value->getErrors(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['err']->key => $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->_loop = true;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
	<?php } ?>
	</ol>
</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
<div class="messages info bottom-margin">
	<ol>
	<?php  $_smarty_tpl->tpl_vars['inf'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['inf']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['msgs']->value->getInfos(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['inf']->key => $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->_loop = true;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
	<?php } ?>
	</ol>
</div>
<?php }?>
<?php }} ?>
