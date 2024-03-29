<?php
require_once dirname(__FILE__).'/../../config.php';

if(!isset($_SESSION))
    session_start();

$form = [];
$messages = [];

function redirect_logged_user(){
    if(isset($_SESSION['role'])){
        header("Location: "._APP_URL);
    }
}

function get_login_params(&$form){
    $form["login"] = isset($_REQUEST["login"]) ? $_REQUEST["login"] : null;
    $form["password"] = isset($_REQUEST["password"]) ? $_REQUEST["password"] : null;
}

function validateLogin(&$form, &$messages){
    if(!isset($form["login"]) && !isset($form["password"])){
        return false;
    }

    if($form["login"] == ""){
        $messages [] = "Nie podano loginu!";
    }
    if($form["password"] == ""){
        $messages [] = "Nie podano hasła!";
    }
    
    if($form["login"] == "admin" && $form["password"] == "admin"){
        $_SESSION["role"] = "admin";
        return true;
    }
    if($form["login"] == "user" && $form["password"] == "user"){
        $_SESSION["role"] = "user";
        return true;
    }

    $messages [] = "Niepoprawny login lub hasło!";
    return false;
}

redirect_logged_user();
get_login_params($form);
if(validateLogin($form, $messages)){
    header("Location: "._APP_URL);
}

include_once("login_view.php");