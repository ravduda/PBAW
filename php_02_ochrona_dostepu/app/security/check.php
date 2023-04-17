<?php
session_start();

if(!isset($_SESSION['role'])){
    include_once 'login.php';
    exit();
}

