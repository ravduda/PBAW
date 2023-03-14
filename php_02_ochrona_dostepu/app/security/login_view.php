<?php require_once '../../config.php';?>
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
		<form action="<?php print(_APP_URL);?>/app/security/login.php" method="get" class="pure-form pure-form-aligned">
			<fieldset>
				<div class="pure-control-group">
					<label for="login">Login: </label>
					<input id="login" type="text" name="login" />
				</div>
				<div class="pure-control-group">
					<label for="haslo">Hasło: </label>
					<input id="haslo" type="password" name="password" />
				</div>
				<input type="submit" value="Zaloguj" class="pure-button pure-button-primary"/>
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

</body>
</html>