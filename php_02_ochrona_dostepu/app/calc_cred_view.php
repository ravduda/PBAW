<?php 
require_once dirname(__FILE__) .'/../config.php';
require_once "security/check.php";
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
<style>
	.calc-form{
		margin: 50px;
	}
</style>
</head>
<body>
	<div class="calc-form">
		<div>
			<a href="<?php print(_APP_URL);?>/app/security/logout.php" class="pure-button">Wyloguj</a>
		</div>
		<form action="<?php print(_APP_URL);?>/app/calc_cred.php" method="get" class="pure-form pure-form-aligned">
			<fieldset>
				<div class="pure-control-group">
					<label for="kwota">Kwota: </label>
					<input id="kwota" type="text" name="kwota" value="<?php echo out($kwota); ?>" />
				</div>
				<div class="pure-control-group">
					<label for="lat">Lat: </label>
					<input id="lat" type="text" name="lat" value="<?php echo out($lat); ?>" />
				</div>
				<div class="pure-control-group">
					<label for="procent">Procent: </label>
					<input id="procent" type="text" name="procent" value="<?php echo out($procent); ?>" />
				</div>
				<input type="submit" value="Oblicz" class="pure-button pure-button-primary"/>
			</fieldset>
		</form>	
	</div>
<?php
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
<?php echo 'Wynik: '.out($result); ?>
	
</div>
<?php } ?>

</body>
</html>