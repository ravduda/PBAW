<?php
require_once dirname(__FILE__).'/../config.php';
require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';


function getParams(&$kwota, &$lat, &$procent){
	$kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$lat = isset($_REQUEST['lat']) ? $_REQUEST['lat'] : null;
	$procent = isset($_REQUEST['procent']) ? $_REQUEST['procent'] : null;
}

function validate(&$messages, &$kwota, &$lat, &$procent){
	if(!(isset($kwota)&& isset($lat)&& isset($procent))){
		return false;
	}
	if($kwota == ''){
		$messages [] = 'Nie podano kwoty';
	}
	if($lat == ''){
		$messages [] = 'Nie podano lat';
	}
	if($procent == ''){
		$messages [] = 'Nie podano procent';
	}
	
	if (empty( $messages )) {
		
		if(!is_numeric($kwota)){
			$messages [] = 'Kwota nie jest liczbą całkowitą';
		}
		if(!is_numeric($lat)){
			$messages [] = 'Ilość lat nie jest liczbą całkowitą';
		}
		if(!is_numeric($procent)){
			$messages [] = 'Procent nie jest liczbą całkowitą';
		}
	}
	if (empty($messages)){
		return true;
	}
	return false;
}

function calculate(&$messages, $kwota, $lat, $procent){
	if (empty ( $messages )) {
		$kwota = intval($kwota);
		$lat = intval($lat);
		$procent = intval($procent);
		if ($lat <= 0)
			$messages [] = 'Ilość lat musi być dodatnia';
	}
	if (empty ( $messages )) {
		$result = ($kwota / ($lat*12)) * (1+($procent/100));
		return $result;
	}
}

$messages = [];
$kwota = null;
$lat = null;
$procent = null;
$result = null;

getParams($kwota, $lat, $procent);
if(validate($messages, $kwota, $lat, $procent))
	$result = calculate($messages, $kwota, $lat, $procent);

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);

$smarty->assign('page_header','Kalkulator kredytowy');
$smarty->assign('kwota',$kwota);
$smarty->assign('lat',$lat);
$smarty->assign('procent',$procent);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);

$smarty->display(_ROOT_PATH.'/app/calc_cred_view.html');
