<?php
require_once dirname(__FILE__).'/init.php';

//przekierowanie przeglądarki klienta (redirect)
//header("Location: "._APP_URL."/app/calc_view.php");

//przekazanie żądania do następnego dokumentu ("forward")
header("Location: ".$conf->app_root.'/ctrl.php');