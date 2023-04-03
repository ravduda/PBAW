<?php
require_once dirname(__FILE__).'/../config.php';


$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

switch($action){
	case 'calcCompute':
		require_once $conf->root_path.'/app/CalcCredCtrl.class.php';
		$ctrl = new CalcCredCtrl();
		$ctrl->process();
		break;
	default:
		require_once $conf->root_path.'/app/CalcCredCtrl.class.php';
		$ctrl = new CalcCredCtrl();
		$ctrl->process();
		break;
}


