<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator</title>
</head>
<body>

<form action="<?php print(_APP_URL);?>/app/calc_cred.php" method="get">
	<label for="id_x">Kwota: </label>
	<input id="id_x" type="text" name="kwota" value="<?php if(isset($kwota)) print($kwota); ?>" /><br />
	<label for="id_x">Lat: </label>
	<input id="id_x" type="text" name="lat" value="<?php if(isset($lat)) print($lat); ?>" /><br />
	<label for="id_y">Procent: </label>
	<input id="id_y" type="text" name="procent" value="<?php if(isset($procent)) print($procent); ?>" /><br />
	<input type="submit" value="Oblicz" />
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Wynik: '.$result; ?>
</div>
<?php } ?>

</body>
</html>