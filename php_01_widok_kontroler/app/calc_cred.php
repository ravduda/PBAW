<?php
require_once dirname(__FILE__).'/../config.php';

$kwota = $_REQUEST['kwota'];
$lat = $_REQUEST['lat'];
$procent = $_REQUEST['procent'];

if(!(isset($kwota)&& isset($lat)&& isset($procent))){
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
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


if (empty ( $messages )) {
	$kwota = intval($kwota);
	$lat = intval($lat);
	$procent = intval($procent);
	if ($lat <= 0)
		$messages [] = 'Ilość lat musi być dodatnia';
}
if (empty ( $messages )) 
	$result = ($kwota / ($lat*12)) * (1+($procent/100));

include 'calc_cred_view.php';