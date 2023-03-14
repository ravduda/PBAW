<?php
session_start();

if(!isset($_SESSION['role'])){
    include 'login.php';
    exit();
}

