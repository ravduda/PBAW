<?php
require_once 'init.php';

switch($action){
	case 'calcCompute':
		require_once $conf->root_path.'/app/controllers/CalcCredCtrl.class.php';
		$ctrl = new CalcCredCtrl();
		$ctrl->process();
		break;
	default:
		require_once $conf->root_path.'/app/controllers/CalcCredCtrl.class.php';
		$ctrl = new CalcCredCtrl();
		$ctrl->process();
		break;
}