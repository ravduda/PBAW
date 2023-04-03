<?php
require_once dirname(__FILE__).'/../config.php';

require_once $conf->root_path.'/app/CalcCredCtrl.class.php';

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

$ctrl = new CalcCredCtrl();
$ctrl->process();

