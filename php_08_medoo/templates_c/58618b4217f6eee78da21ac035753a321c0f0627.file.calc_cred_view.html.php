<?php /* Smarty version Smarty-3.1.17, created on 2023-05-08 14:47:18
         compiled from "/var/www/html/php_08_medoo/app/views/calc_cred_view.html" */ ?>
<?php /*%%SmartyHeaderCode:34662047864590b76c97930-25753487%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58618b4217f6eee78da21ac035753a321c0f0627' => 
    array (
      0 => '/var/www/html/php_08_medoo/app/views/calc_cred_view.html',
      1 => 1683550112,
      2 => 'file',
    ),
    '5f9aa2a6ae5cadc23dc1104caa2839c7044d1c99' => 
    array (
      0 => '/var/www/html/php_08_medoo/app/views/templates/elements.html',
      1 => 1683550112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34662047864590b76c97930-25753487',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_64590b76cce108_82226518',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_64590b76cce108_82226518')) {function content_64590b76cce108_82226518($_smarty_tpl) {?><!DOCTYPE html>
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
        <p class="logo">Kalkulator kredytowy</p>
      </header>

      <!-- Main -->
      <div id="main">
        <!-- Post -->
        <section class="post">
          <!-- Form -->
          
<p><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout" class="button primary">Wyloguj</a></p>
<form method="post" action="ctrl.php">
  <input type="hidden" name="action" value="calcCompute" />
  <div class="row gtr-uniform">
    <div class="col-6 col-12-xsmall">
      <input
        type="text"
        name="kwota"
        id="kwota"
        value="<?php echo $_smarty_tpl->tpl_vars['kwota']->value;?>
"
        placeholder="kwota"
      />
    </div>
    <div class="col-6 col-12-xsmall">
      <input type="text" name="lat" id="lat" value="<?php echo $_smarty_tpl->tpl_vars['lat']->value;?>
" placeholder="lat" />
    </div>
    <div class="col-12">
      <input
        type="text"
        name="procent"
        id="procent"
        value="<?php echo $_smarty_tpl->tpl_vars['procent']->value;?>
"
        placeholder="procent"
      />
    </div>
    <!-- Break -->
    <div class="col-12">
      <ul class="actions">
        <li>
          <input type="submit" value="Oblicz" class="primary" />
        </li>
      </ul>
    </div>
  </div>
</form>

<?php if (isset($_smarty_tpl->tpl_vars['messages']->value)) {?> <?php if (count($_smarty_tpl->tpl_vars['messages']->value)>0) {?>
<h4>Wystąpiły błędy:</h4>
<ol class="err">
  <?php  $_smarty_tpl->tpl_vars['msg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['msg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->key => $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->_loop = true;
?> <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li> <?php } ?>
</ol>
<?php }?> <?php }?> <?php if (isset($_smarty_tpl->tpl_vars['result']->value)) {?>
<h4>Wynik</h4>
<p class="res"><?php echo $_smarty_tpl->tpl_vars['result']->value;?>
</p>
<?php }?> 
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