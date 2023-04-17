<?php
require_once 'init.php';

switch($action){
	case 'calcCompute':
		$ctrl = new app\controllers\CalcCredCtrl();
		$ctrl->process();
		break;
	default:
		$ctrl = new app\controllers\CalcCredCtrl();
		$ctrl->process();
		break;
}