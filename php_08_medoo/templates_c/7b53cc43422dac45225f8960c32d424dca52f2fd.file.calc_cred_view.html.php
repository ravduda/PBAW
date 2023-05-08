<?php /* Smarty version Smarty-3.1.17, created on 2023-04-24 23:03:22
         compiled from "/var/www/html/php_07_role/app/views/calc_cred_view.html" */ ?>
<?php /*%%SmartyHeaderCode:489466756446f2846c4762-75233459%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b53cc43422dac45225f8960c32d424dca52f2fd' => 
    array (
      0 => '/var/www/html/php_07_role/app/views/calc_cred_view.html',
      1 => 1682377397,
      2 => 'file',
    ),
    '5ec7d3ca0c0002f574f375a56495207d968fff08' => 
    array (
      0 => '/var/www/html/php_07_role/app/views/templates/elements.html',
      1 => 1682376885,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '489466756446f2846c4762-75233459',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_6446f284709e10_95000423',
  'variables' => 
  array (
    'app_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6446f284709e10_95000423')) {function content_6446f284709e10_95000423($_smarty_tpl) {?><!DOCTYPE html>
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
